<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\ClassesCollection;
use App\Filters\ClassesFilter;
use Illuminate\Http\Request;
use App\Models\Classes;


class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // return response()->json(Classes::all());
        //  $clases = Classes::all();
        // return new ClassesCollection($clases);
        $filter = new ClassesFilter();
        $queryfilters = $filter->transform($request);
        if(count($queryfilters) == 0){
            return new ClassesCollection(Classes::paginate());
        }else{
            $classes = Classes::where($queryfilters);
            return new ClassesCollection($classes->paginate()->appends($request->query()));
        }
        //http://127.0.0.1:8000/api/v1/clases?class_name[eq]=Movimiento
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
    public function store(StoreClassesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Classes $classes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classes $classes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassesRequest $request, Classes $classes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $classes)
    {
        //
    }
}
