<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function kos()
    {
        return view('kos');
    }

    public function kontrakan()
    {
        return view('kontrakan');
    }

    public function bookingSaya()
    {
        return view('booking-saya');
    }
    public function book()
    {
        return view('book');
    }


}
