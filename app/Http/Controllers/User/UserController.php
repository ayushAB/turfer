<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\inertia;
use App\Models\Turf;
use App\Models\Booking;
use Carbon\Carbon;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Dashboard', [
            'turfs' => Turf::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $booking = new Booking();
        $booking->slot_id = $request['slot_id'];
        $booking->user_id = Auth()->user()->id;
        $booking->date = Carbon::now();
        $booking->save();
        return back()->with('flash.banner', __('booking successfull'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Turf $turf)
    {
        $turf->load(['slots']);

        $availableSlots = $turf->slots()
                                ->doesntHave('bookings')
                                ->get();
        
        return Inertia::render('Turf/Index', [
            'turf' => $turf,
            'available_slots' => $availableSlots
        ]);
    }
}
