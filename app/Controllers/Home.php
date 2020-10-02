<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SalidasModel;

class Home extends BaseController
{
	public function index()
	{
		
		//Busqueda de salidas por ubicacion (Huila o Nacional)
		$salidasModel= new SalidasModel();
		//Huila id 1
		$salidasHuilaModel= $salidasModel->where('idClasificacion','1')->findAll();
		$salidasHuilaModel=array('salidasHuilaModel'=>$salidasHuilaModel);
		//Nacional id 2
		$salidasNacionalModel= $salidasModel->where('idClasificacion','2')->findAll();
		$salidasNacionalModel=array('salidasNacionalModel'=>$salidasNacionalModel);

		$estructura=view('head').view('header').view('index',$salidasHuilaModel,$salidasNacionalModel).view('footer');
		return $estructura;
	}

	//--------------------------------------------------------------------

}
