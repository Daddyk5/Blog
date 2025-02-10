<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        return view('media'); // Ensure `resources/views/media.blade.php` exists
    }
}
