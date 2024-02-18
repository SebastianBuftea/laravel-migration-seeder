<?php


namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {

        $today = now()->format('Y-m-d');
        $trains = Train::where('departure_time', 'LIKE', $today . '%')->get();

        return view('welcome', compact('trains'));
    }
}
