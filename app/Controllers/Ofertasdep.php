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
			
			$estructura=view('head').view('header').view('ofertasdepartamentales',$salidasModel).view('footer');
			return $estructura;
			
		
	}

	//--------------------------------------------------------------------

}