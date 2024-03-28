<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Http\Requests\StoreInputRequest;
use App\Http\Requests\UpdateInputRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInputRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Input $input)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Input $input)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInputRequest $request, Input $input)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Input $input)
    {
        //
    }

    public function getInputByDate(Request $request)
    {
        
        $request->validate([
            'date'=>'required',
        ]);
        $date = $request->date;


        $date1 = Carbon::create(substr($date,6,4), substr($date,3,2), substr($date,0,2),0,0,1);
        $date2 = Carbon::create(substr($date,6,4), substr($date,3,2), substr($date,0,2),23,59,59);

        $inputs = Input::where('created_at','>=', $date1)
            ->where('created_at','<=', $date2)
            ->get();

        return $inputs;
    }

}
