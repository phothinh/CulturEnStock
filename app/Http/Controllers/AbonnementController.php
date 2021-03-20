<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function show()
    {
        return view('abonnement.show');
    }
}
