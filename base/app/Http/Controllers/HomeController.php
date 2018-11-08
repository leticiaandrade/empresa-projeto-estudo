<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class HomeController extends Controller {


	public function index() {
		return view('home');
	}

	public function sobre() {
		return view('sobre');
	}
	public function equipamentos() {
		return view('equipamentos');
	}
	public function noticias() {
		return view('noticias');
	}
	public function contato() {
		return view('contato');
	}
	
}