<?php namespace App\Controllers;

use CodeIgniter\Controller;
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
			echo "Error";
		}
		
		
	}
	

	//--------------------------------------------------------------------

}