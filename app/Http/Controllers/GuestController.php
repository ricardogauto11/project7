<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class GuestController extends Controller
{
    public function index()
    {
        $entries = Entry::all();

        return view('welcome', compact('entries'));
    }
}
