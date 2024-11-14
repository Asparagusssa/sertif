<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $q = mb_strtolower(request('q'));
        $certifications = Certification::whereRaw('lower(name) like ?', ["%{$q}%"])
            ->orderBy('price')
            ->get();
        return view('result', ['certifications' => $certifications]);
    }
}
