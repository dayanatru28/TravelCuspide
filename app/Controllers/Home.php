<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SalidasModel;
use App\Models\TipoSalidaModel;
use App\Models\TipoPlanModel;

class Home extends BaseController
{
	public function index()
	{
		
		
		$TiposalidasModel= new TipoSalidaModel();
		//Buscador tipo Salida
		$tiposSalida= $TiposalidasModel->findColumn('nombreTipoSalida');
		$tiposSalida= array('tiposSalida'=>$tiposSalida);

		$TipoplanModel= new TipoPlanModel();
		//Buscador tipo Salida
		$tiposPlan= $TipoplanModel->findColumn('nombreTipoPlan');
		$tiposPlan= array('tiposPlan'=>$tiposPlan);


		//Busqueda de salidas por ubicacion (Huila o Nacional)
		//Huila id 1
		$salidasModel= new SalidasModel();
		$salidasHuilaModel= $salidasModel->where('idClasificacion','1')->findAll();
		$salidasHuilaModel=array('salidasHuilaModel'=>$salidasHuilaModel);
		//Nacional id 2
		$salidasNacionalModel= $salidasModel->where('idClasificacion','2')->findAll();
		$salidasNacionalModel=array('salidasNacionalModel'=>$salidasNacionalModel);

		$datos['salidasHuilaModel']=$salidasHuilaModel;
		$datos['salidasNacionalModel']=$salidasNacionalModel;
		$datos['tiposSalida']=$tiposSalida;
		$datos['tiposPlan']=$tiposPlan;

		$estructura=view('head').view('header').view('index',$datos).view('footer');
		return $estructura;
	}

	//--------------------------------------------------------------------

}
