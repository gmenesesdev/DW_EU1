<?php

namespace App\Http\Controllers;

use App\Models\Uf;

class UfController extends Controller
{
    public function show()
    {
        $ufValue = Uf::getUfValue();
        return view('uf', compact('ufValue'));
    }
}

