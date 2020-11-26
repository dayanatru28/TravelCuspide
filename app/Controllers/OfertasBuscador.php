<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SalidasModel;
use App\Models\TipoPlanModel;
use App\Models\BuscadorModel;


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
      //Se recibe el id de la actividad deportiva   
      $tipoPlan=$request->getPostGet('idPlan');
      //Hago la consulta a la base de datos
      $db = \Config\Database::connect();
      $sql = "SELECT * FROM salidas INNER JOIN buscador ON salidas.idSalida=buscador.idSalida WHERE buscador.idPlan=?";
      //Paso el valor del id de la actividad deportiva
      $query=$db->query($sql, $tipoPlan);
      $salidasModel=$query->getResultArray();
      //Guardo la informacion en un arreglo y la envio
      $salidasModel=array('salidasModel'=>$salidasModel);

      //Envio el nombre de la actividad deportiva
      $tipoPlanModel= new TipoPlanModel();
      $nombre=$tipoPlanModel->where('idTipoPlan',$tipoPlan)->findColumn('nombreTipoPlan');
      $nombre= array('nombre'=>$nombre);

      $datos['salidasModel']=$salidasModel;
      $datos['nombre']=$nombre;

      $estructura=view('head').view('header').view('ofertasdepartamentales',$datos).view('footer');
      return $estructura;

  }
}