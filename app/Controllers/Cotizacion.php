<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FormModel;
use App\Models\CotizacionesModel;
use App\Models\SalidasModel;

class Cotizacion extends BaseController
{
	public function index()
	{

		$salidasModel= new SalidasModel();
		$salidasModel= $salidasModel->findColumn('nombreSalida');
		$salidasModel=array('salidasModel'=>$salidasModel);

		$estructura=view('head').view('header').view('cotizacion',$salidasModel).view('footer');
		return $estructura;
	}

	public function mostrar()
	{	
		$salidasModel= new SalidasModel();
		$request=\Config\Services::request();
		$idSalida=$request->getPostGet('idSalida');
		$salidasModel=$salidasModel->where('idSalida',$idSalida)->findAll();
		$salidasModel=array('salidasModel'=>$salidasModel);

		$estructura=view('head').view('header').view('cotizacion',$salidasModel).view('footer');
		return $estructura;
	}

	public function insertar(){
		$CotizacionesModel= new CotizacionesModel();
		$request=\Config\Services::request();
		$data = array(
			'nombreCoti'    => $request->getPostGet('nombreCoti'),
			'correoCoti'    =>  $request->getPostGet('correoCoti'),
			'celularCoti'    =>  $request->getPostGet('celularCoti'),
			'direccionCoti'    => $request->getPostGet('direccionCoti'),
			'destino'    =>  $request->getPostGet('destino'),
			'cantPersonas'    =>  $request->getPostGet('cantPersonas'),
			'cantNinos'    =>  $request->getPostGet('cantNinos'),
			'diaSalida'    =>  $request->getPostGet('trip-start'),
			'cantDias'    =>  $request->getPostGet('cantDias'),
			'mensajeCoti'    =>  $request->getPostGet('mensajeCoti')
		);
		
		if($CotizacionesModel->insert($data)===false)	{
			echo ("Eey.. No podemos agregar tu solicitud");
		}
		else{
			$this->sendMail();
			$this->sendMailCorporacion();
			$estructura=view('head').view('header').view('envioexitoso').view('footer');
			return $estructura;
		}	
		
	}

	// enviar el correo de confirmacion al usuario
	public function sendMail() { 
		$request=\Config\Services::request();
		$to = $this->request->getVar('correoCoti');
		$subject = ('Cotizacion Corporacion Cuspide');
		$nombre=$request->getPostGet('nombreCoti');
		$celular=$request->getPostGet('celularCoti');
		$direccion=$request->getPostGet('direccionCoti');
		$destino=$request->getPostGet('destino');
		$cantPersonas=$request->getPostGet('cantPersonas');
		$cantNinos=$request->getPostGet('cantNinos');
		$diaSalida=$request->getPostGet('trip-start');
		$cantDias=$request->getPostGet('cantDias');
		$mensajeCoti=$request->getPostGet('mensajeCoti');

		$message =('Usted ha realizado la cotizacion sobre un viaje a nombre de '.$nombre.' con correo electronico '.$to. ' y celular '.$celular. 
		' Para un viaje desde: '.$direccion. ' hacia: '.$destino. ' Cantidad de personas a viajar: '.$cantPersonas. ' Cantidad de niños: '.$cantNinos.
		' Dia previsto de la salida: '.$diaSalida. ' Duracion prevista del viaje: '.$cantDias. ' Mensaje Final. '.$mensajeCoti);
        
        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('leidy28ortega@gmail.com', 'Confirm Registration');
        
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) 
		{
            $estructura=view('head').view('header').view('envioexitoso').view('footer');
			return $estructura;
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
	}
	
	// enviar el correo de confirmacion a la corporacion
	public function sendMailCorporacion() { 
		$request=\Config\Services::request();
		$to = ('u20161144636@usco.edu.co');
		$subject = ('Cotizacion Corporacion Cuspide');
		$nombre=$request->getPostGet('nombreCoti');
		$correo=$request->getPostGet('correoCoti');
		$celular=$request->getPostGet('celularCoti');
		$direccion=$request->getPostGet('direccionCoti');
		$destino=$request->getPostGet('destino');
		$cantPersonas=$request->getPostGet('cantPersonas');
		$cantNinos=$request->getPostGet('cantNinos');
		$diaSalida=$request->getPostGet('trip-start');
		$cantDias=$request->getPostGet('cantDias');
		$mensajeCoti=$request->getPostGet('mensajeCoti');

		$message =('Se ha realizado la cotizacion sobre un viaje a nombre de '.$nombre.' con correo electronico '.$correo. ' y celular '.$celular. 
		' Para un viaje desde: '.$direccion. ' hacia: '.$destino. ' Cantidad de personas a viajar: '.$cantPersonas. ' Cantidad de niños: '.$cantNinos.
		' Dia previsto de la salida: '.$diaSalida. ' Duracion prevista del viaje: '.$cantDias. ' Mensaje Final. '.$mensajeCoti);
        
        $email = \Config\Services::email();
		//enviar a
		$email->setTo($to);
        $email->setFrom('leidy28ortega@gmail.com', 'Confirm Registration');
		// Asunto
		$email->setSubject($subject);
		//Mensaje
        $email->setMessage($message);

        if ($email->send()) 
		{
            $estructura=view('head').view('header').view('envioexitoso').view('footer');
			return $estructura;
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }
	
	//--------------------------------------------------------------------

}