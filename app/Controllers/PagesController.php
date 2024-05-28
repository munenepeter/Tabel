<?php

namespace App\Controllers;

use Tabel\Controllers\MainController;

class PagesController extends MainController {

    public function __construct() {
        //   $this->middleware('auth');
    }
    public function index() {
        
        return view('index');
    }
}