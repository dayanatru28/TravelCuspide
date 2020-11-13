<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SalidasModel;
use App\Models\ImagenesModel;
use App\Models\SitiosInteresModel;
use App\Models\ActividadesTurModel;

class Desplan extends BaseController
{
	public function index()
	{
		echo view('head');
		echo view('header');
		echo view('desplan');
		echo view('footer');
	}

	public function mostrar(){
		
			//Busqueda de informacion de cada paquete turisticos 

			$salidasModel= new SalidasModel();
			$imagenesModel=new ImagenesModel();
			$sitiosInteresModel = new SitiosInteresModel();
			$ActividadesTurModel= new ActividadesTurModel();
			
			$request=\Config\Services::request();
			$idSalida=$request->getPostGet('idSalida');

			//Busco Informacion Basica de la salida
			$salidasModel=$salidasModel->where('idSalida',$idSalida)->find();
			$salidasModel=array('salidasModel'=>$salidasModel);

			//Busqueda Imagenes Salida
			$imagenesModel = $imagenesModel->where('idSalida',$idSalida)->findAll();
			$imagenesModel =array('imagenesModel'=>$imagenesModel);

			//Busqueda Sitios interes de la salida
			$sitiosInteresModel = $sitiosInteresModel->where('idSalida',$idSalida)->findAll();
			$sitiosInteresModel =array('sitiosInteresModel'=>$sitiosInteresModel);

			//Busqueda Actividades de ecoturismos de la salida
			$ActividadesTurModel = $ActividadesTurModel->where('idSalida',$idSalida)->findAll();
			$ActividadesTurModel =array('ActividadesTurModel'=>$ActividadesTurModel);


			$datos['salidasModel']=$salidasModel;
			$datos['imagenesModel']=$imagenesModel;
			$datos['sitiosInteresModel']=$sitiosInteresModel;
			$datos['ActividadesTurModel']=$ActividadesTurModel;


			
			$estructura=view('head').view('header').view('desplan',$datos).view('footer');
			return $estructura;


	}

	//--------------------------------------------------------------------

}