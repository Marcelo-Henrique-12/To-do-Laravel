<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(Request $request){

        if($request->date){
            $filteredDate = $request->date;
        }else{
            $filteredDate =  date('Y-m-d');
        }

        $carbonDate = Carbon::createFromDate($filteredDate);
        $data['date_as_string'] =  $carbonDate->translatedFormat('d \d\e M');

        $data['date_prev_button'] =  $carbonDate->addDay(-1)->translatedFormat('Y-m-d');
        $data['date_next_button'] = $carbonDate->addDay(2)->translatedFormat('Y-m-d');

        $data['tasks'] = Task::whereDate('due_date', $filteredDate )->get();

        $data['AuthUser'] = Auth::user();


        return view('home', $data);
    }
}
