<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = (new Parking())->where('user_id', auth()->id())->get();
        return view('dashboard', ['parkings' => $data->toArray()]);
    }
}
