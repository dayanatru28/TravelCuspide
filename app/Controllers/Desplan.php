<?php namespace App\Controllers;

class Desplan extends BaseController
{
	public function index()
	{
		echo view('head');
		echo view('header');
		echo view('desplan');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}