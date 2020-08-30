<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Components extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data['bootstrapBrands'] = [
            'primary',
            'secondary',
            'success',
            'danger',
            'warning',
            'info',
            'light',
            'dark'
        ];

        return view('pages.components.index', compact(['data']));
    }
}
