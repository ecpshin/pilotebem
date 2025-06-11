<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $regioes = \App\Models\Regiao::whereAtivo(true)->get();
        return view('home', [
            'regioes' => $regioes
        ]);
    }

    public function upload(Request $request)
    {
        dd($request->all());
        return redirect(route('home'));
    }
}
