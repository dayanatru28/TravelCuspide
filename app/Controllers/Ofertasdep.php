<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SalidasModel;


class Ofertasdep extends BaseController
{
	public function index()
	{
		echo view('head');
		echo view('header');
		echo view('ofertasdepartamentales');
		echo view('footer');
	}

	public function mostrar(){

			//Busqueda de paquetes turisticos por clasificacion
			$salidasModel= new SalidasModel();
			
			$request=\Config\Services::request();
			$idClasificacion=$request->getPostGet('idClasificacion');
			$salidasModel=$salidasModel->where('idClasificacion',$idClasificacion)->findAll();

			$salidasModel=array('salidasModel'=>$salidasModel);

			//Envio el nombre de la clasificacion si es departamental o nacional
			if($idClasificacion==1){
				$nombre=array("Departamentales");
				$nombre=array('nombre'=>$nombre);
			}else{
				$nombre=array("Nacionales");
				$nombre=array('nombre'=>$nombre);
			}

			//Junto la informacion en un solo arreglo
			$datos['salidasModel']=$salidasModel;
      		$datos['nombre']=$nombre;
			
			$estructura=view('head').view('header').view('ofertasdepartamentales',$datos).view('footer');
			return $estructura;
			
		
	}

	//--------------------------------------------------------------------

}