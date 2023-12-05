<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostPesanController extends Controller
{
    public function view()
    {
        return view('user.detailPost');
    }
}
