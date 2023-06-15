<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    function HomePage()
    {
        return Inertia::render(component:'Home');
    }

    function ProductPage()
    {
        return Inertia::render(component:'Product');
    }
}
