<?php

namespace App\Http\Controllers;

use App\Models\Past;
use Illuminate\Http\Request;

class PastController extends Controller
{
    public function show($id)
    {
        $past = Past::with('photos')->findOrFail($id);
        return view('past_event_detail', compact('past'));
    }
}
