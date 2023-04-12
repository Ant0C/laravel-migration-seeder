<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index() 
    {
        $date = Carbon::today()->toDateTimeString();
        //dd($date);

        $cur_date = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        //dd($cur_date);

        $trains = Train::whereDate('departure_time','=', $cur_date)->get();
        //dd($trains);
        $data = [
            'trains'=> $trains
        ];
        return view ('welcome',$data);
    }

}
