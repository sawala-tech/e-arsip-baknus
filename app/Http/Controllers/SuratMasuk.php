<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasuk extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('pages.surat-masuk.app');
    }
}
