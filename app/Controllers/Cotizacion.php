<?php namespace App\Controllers;

class Cotizacion extends BaseController
{
	public function index()
	{
		echo view('head');
		echo view('header');
		echo view('cotizacion');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}