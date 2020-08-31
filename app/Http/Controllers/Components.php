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
        //
    }

    public function playground(Request $request)
    {
        $data = [
            'breadcrumb' => [
                [
                'label' => 'Home',
                'url'   => url('/'),
                ],
                [
                'label' => 'Library',
                'url'   => url('library'),
                ],
                [
                'label'  => 'Data',
                'url'    => url('data'),
                'active' => true,
                ],
            ]
        ];

        return view('pages.components.playground', compact('data'));
    }
}
