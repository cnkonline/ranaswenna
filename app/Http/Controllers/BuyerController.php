<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{

    public function index()
    {
        return view('buyer.index');
    }

    public function create()
    {
        return view ('buyer.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'business'=> 'required|min:2|max:150',
            'registration_no'=> 'nullable|max:25',
            'type'=> 'required|max:25',
            'telephone'=> 'required|max:15',
            'description'=> 'nullable|max:250',
            'address'=> 'required|max:250',
            'title'=> 'required|max:12|in:mr,mrs,miss,dr,ms',
            'contacted_person'=> 'required|min:3||max:150',
            'mobile_1'=> 'required|min:15|numeric',
            'mobile_2'=> 'nullable|min:15|numeric',
            'fax'=> 'nullable',
            'email'=> 'nullable|email',

         ]);

        $buyer = Buyer::create($request->all());
        return redirect('/buyers');
    }


    public function show(Buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        //
    }
}
