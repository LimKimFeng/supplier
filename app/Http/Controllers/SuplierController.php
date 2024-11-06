<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;

class SuplierController extends Controller
{
    public function index() {
        return view('suplier.index');
    }

    public function create() {
        return view('suplier.create');
    }

    public function edit() {
        return view('suplier.edit');
    }
}
