<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $works = 
        [
            [
                'id' => 23,
                'title' => 'Need somebody to wash',
                'duration' => '5 Hrs',
                'location' => 'Kabwata',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae aperiam eligendi eos aliquid fugiat recusandae. Provident deleniti asperiores, beatae, quaerat dolore voluptatem culpa, sapiente laborum molestiae harum id et nesciunt.',
                'contact' => '0976249140'
            ],
            [
            'id' => 3,
            'title' => 'Plumber wanted',
            'duration' => '6 days',
            'location' => 'Chawama',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae aperiam eligendi eos aliquid fugiat recusandae. Provident deleniti asperiores, beatae, quaerat dolore voluptatem culpa, sapiente laborum molestiae harum id et nesciunt.',
            'contact' => '0976249140'
            ]

        ];
        return view('home', ['works' => $works]);
    }
}
