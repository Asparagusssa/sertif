<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index()
    {
        $certifications = Certification::query()->orderBy('price')->get();

        return view('certification', ['certifications' => $certifications]);
    }
}
