<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Models\Table;
use App\Models\Reservation;
use Illuminate\Support\Carbon;

use App\Http\Requests\ReservationStoreRequest;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $Reservations=Reservation::all();
        return view('admin.reservations.index',compact('Reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tables=Table::where('status',TableStatus::Avaliable)->get();
        return view('admin.reservations.create',compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
            return back()->with('warning','Please choose the table base on guest number');
        }
        $request_date = Carbon::parse($request->res_date);
        foreach ($table->reservations as $res){
            if($res->res_date->format('Y-m-d')== $request_date->format('Y-m-d')){
                return back()->with('warning','This table is reservaion for this date');
            }
        }
        Reservation::create($request->validated());
        return to_route('admin.reservations.index')->with('success','reservaion created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $Reservation)
    {
        $tables=Table::where('status',TableStatus::Avaliable)->get();

        return view('admin.reservations.edit',compact('tables','Reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {

        $table = Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
            return back()->with('warning','Please choose the table base on guest number');
        }
        $request_date = Carbon::parse($request->res_date);
        foreach ($table->reservations as $res){
            if($res->res_date->format('Y-m-d')== $request_date->format('Y-m-d')){
                return back()->with('warning','This table is reservaion for this date');
            }
            $reservation->update($request->validated);
        return to_route('admin.reservations.index')->with('success','reservaion updated successfuly');

    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $Reservation)
    {
    $Reservation->delete();
    return to_route('admin.reservations.index');

    }
}
