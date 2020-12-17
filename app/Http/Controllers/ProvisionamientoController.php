<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvisionamientoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showForm()
    {
        return view('provisionamiento');
    }

    public function getForm()
    {
        return view('aprov.frmProv');
    }


}
