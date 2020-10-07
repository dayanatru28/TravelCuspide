<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SalidasModel;
use App\Models\TipoSalidaModel;


class OfertasBuscador extends BaseController
{
	public function index()
	{
    echo view('head');
		echo view('header');
		echo view('index');
		echo view('footer');
		
    }
    
    public function mostrar(){

        $request=\Config\Services::request();
        $tipoSalida=$request->getPostGet('tipoSalida');
        //como llega en arreglo, se convierte el valor en un numero para buscar en la base de datos, se suma 1 porque el arreglo comienza en 0 y los id desde 1
        $tSalida=intval($tipoSalida);
        $tSalida=$tSalida+1;

       
        $tipoPlan=$request->getPostGet('tipoPlan');
        //como llega en arreglo, se convierte el valor en un numero para buscar en la base de datos, se suma 1 porque el arreglo comienza en 0 y los id desde 1
        $tPlan=intval($tipoPlan);
        $tPlan=$tPlan+1;

        $salidasModel= new SalidasModel();
        $comparaciones = array('tipoSalida'=>$tSalida,'tipoPlan'=>$tPlan);
        $salidasModel=$salidasModel->like($comparaciones)->findAll();
        $salidasModel=array('salidasModel'=>$salidasModel);

        $estructura=view('head').view('header').view('ofertasdepartamentales',$salidasModel).view('footer');
		    return $estructura;

    }
}