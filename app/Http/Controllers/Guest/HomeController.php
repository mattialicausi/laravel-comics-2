<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'comics' => Comic::all(),
        ];
        return view('home', $data);
    }
}
