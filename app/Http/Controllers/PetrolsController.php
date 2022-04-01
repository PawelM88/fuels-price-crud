<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\petrols;
use App\Models\constant_costs;
use App\Http\Requests\ValidationRequest;


class PetrolsController extends Controller
{
    public function index()
    {
        $petrols = petrols::all();
        $constantCosts = constant_costs::all();

        return view('petrol.index', compact('petrols', 'constantCosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petrol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationRequest $request)
    {
        $request->validated();

        $petrols = petrols::create([
            'oil_value' => $request->input('oil'),
            'pln_value' => $request->input('pln'),
            'vat_value' => $request->input('vat')
        ]);

        return redirect('/petrol/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $petrols = petrols::find($id);

        // return view('petrol.show')->with('petrols', $petrols);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petrols = petrols::find($id);

        return view('petrol.edit')->with('petrols', $petrols);
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
