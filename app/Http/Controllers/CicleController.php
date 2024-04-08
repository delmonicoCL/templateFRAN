<?php

namespace App\Http\Controllers;

use App\Models\Cicle;
use Illuminate\Http\Request;

class CicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $actiu = $request->input('actiuBuscar');

        if ($actiu == 'actiu') {
            // $cicles = Cicle::where('actiu', '=', true)
            //     ->get();
                $cicles = Cicle::where('actiu', '=', true)
                                ->paginate(5)
                                ->withQueryString();

        } else {
            // $cicles = Cicle::all();
            $cicles = Cicle::paginate(5);

        }

        $request->session()->flashInput($request->input());


        return view("cicles.index", compact("cicles"));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cicle $cicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cicle $cicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cicle $cicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cicle $cicle)
    {
        //
    }
}
