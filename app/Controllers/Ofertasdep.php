<?php namespace App\Controllers;

class Ofertasdep extends BaseController
{
	public function index()
	{
		echo view('head');
		echo view('header');
		echo view('ofertasdepartamentales');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}