<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index(){
        // return '<h1>Hallo ini dari Controller</h1>';

        //Call from Routing
        $nama='aryo';
        $data=['nama' => $nama];
        return view('test.tes', $data);
    }
}
