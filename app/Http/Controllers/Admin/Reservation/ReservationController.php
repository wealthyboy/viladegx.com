<?php

namespace App\Http\Controllers\Admin\Reservation;



use App\Models\User;

use App\Models\Image;
use App\Models\Reservation;
use App\Models\Activity;
use App\Models\Http\Helper;
use App\Models\SystemSetting;
use App\Models\Service;
use App\Models\Facility;
use App\Models\Requirement;


use Illuminate\Support\Str;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    protected $settings;

    public function __construct()
    {	  
	  $this->settings =  SystemSetting::first();
    }

    /**
     * Display a listing of the resource.
     *
     * return \Illuminate\Http\Response
     */
    public function index()
    {   
        $reservations = Reservation::orderBy('created_at','desc')->paginate(30);
        return view('admin.reservations.index',compact('reservations'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * return \Illuminate\Http\Response
     */
    public function create()
    {
        User::canTakeAction(2);
        $services = Service::orderBy('name','asc')->get();
        $facilities = Facility::orderBy('name','asc')->get();
        $requirements = Requirement::orderBy('name','asc')->get();
        return view('admin.reservations.create',compact('services','facilities','requirements'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
