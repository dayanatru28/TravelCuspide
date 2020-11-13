<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReservacionesModel;


class Reservaciones extends BaseController
{
	public function index()
	{
		echo view('head');
		echo view('header');
		echo view('buscadorReservaciones');
		echo view('footer');
	}

	public function buscar(){

		$ReservacionesModel=new ReservacionesModel();
		$request=\Config\Services::request();
		$codigoReservacion=$request->getPostGet('codigoReserva');
		$ReservacionesModel=$ReservacionesModel->where('codigoReserva',$codigoReservacion)->findAll();
		$ReservacionesModel=array('ReservacionesModel'=>$ReservacionesModel);

		$estructura=view('head').view('header').view('infoReserva',$ReservacionesModel).view('footer');
		return $estructura;	
		
	}

	//--------------------------------------------------------------------

}