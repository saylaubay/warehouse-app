<?php

namespace App\Http\Controllers;

use App\Models\Measurement;
use App\Http\Requests\StoreMeasurementRequest;
use App\Http\Requests\UpdateMeasurementRequest;
use App\Repositories\Interfaces\MeasurementRepositoryInterface;

class MeasurementController extends Controller
{
    protected $measurementRepository;

    public function __construct(MeasurementRepositoryInterface $measurementRepository)
    {
        $this->measurementRepository = $measurementRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->measurementRepository->getAll();
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
    public function store(StoreMeasurementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Measurement $measurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Measurement $measurement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMeasurementRequest $request, Measurement $measurement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Measurement $measurement)
    {
        //
    }
}
