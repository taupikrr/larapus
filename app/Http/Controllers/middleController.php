<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class middleController extends Controller
{
    //
	public function__construct()
	{
		$this->middleware('auth');

	}
    public function index ()
    {
    	$a="SMK Assalaam";
    	return "Nama Sekolah Saya :".$a;
    }
}
