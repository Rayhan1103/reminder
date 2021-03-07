<?php

namespace App\Controllers;

class Ac extends BaseController
{
	public function index()
	{
		echo "halo";
		return view('ac');
	}
}
