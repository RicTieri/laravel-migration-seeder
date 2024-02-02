<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainPageController extends Controller
{
    public function index()
    {
        $trains = Train::where('travel_date', now()->format('Y-m-d'))->get();
        return view('pages.guest.trains.index', compact('trains'));
    }
}