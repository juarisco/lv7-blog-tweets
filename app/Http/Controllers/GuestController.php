<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'entries' => Entry::with('author')->latest()->paginate(10)
        ]);
    }
}
