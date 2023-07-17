<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;

class ReservationController extends Controller
{
    public function stepOne( Request $request)
    {
        $reservation=$request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('reservations.stepOne',compact('reservation','min_date','max_date'));
    }
    public function storeStepOne(Request $request)
    {
        $validated =$request->validate([
            'first_name'=>['required'],
            'last_name'=>['required'],
            'email'=>['required'],
            'tel_number'=>['required'],
            'res_date'=>['required','date',new DateBetween, new TimeBetween ],
            'guest_number'=>['required'],

        ]);
        if(empty($request->session()->get('reservation'))){
            $reservation= new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation',$reservation);
        }else{
            $reservation=$request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation',$reservation);

        }
        return to_route('reservation.step.tow');
    }
    public function stepTow( Request $request)
    {
        $reservation=$request->session()->get('reservation');
        $re_table_ids =Reservation::orderBy('res_date')->get()->filter(function($value)use($reservation){
            return $value->res_date->format('Y-m-d')==$reservation->res_date->format('Y-m-d');
        })->pluck('table_id');
       $tables = Table::where('status',TableStatus::Avaliable)
       ->where('guest_number','>=',$reservation->guest_number)
       ->whereNotIn('id',$re_table_ids)->get();

        return view('reservations.stepTow',compact('reservation','tables'));
    }
    public function storeStepTow(Request $request)
    {
       $validated = $request->validate([
        'table_id'=>['required']
       ]);
       $reservation=$request->session()->get('reservation');
       $reservation->fill($validated);
       $reservation->save();
       $request->session()->forget('reservation');

       return to_route('thankyou');
    }
}
