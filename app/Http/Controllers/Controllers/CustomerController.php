<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer as RequestsCustomer;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsCustomer $request)
    {
        // $validated = \Validator::make($request->all(), [
        //     'nama' => 'required',
        //     'email' => 'required|unique:customers',
        //     'nomor' => 'required|unique:customers',
        //     'alamat' => 'required',
        // ]);

        // $validated = $request->all();

        // if ($validated->fails()) {
        //     return response()->json(['status' => $validated->errors()->all()]);
        // }else{
        //     $customer = new Customer();
        //     $customer->nama = $request->nama;
        //     $customer->email = $request->email;
        //     $customer->nomor = $request->nomor;
        //     $customer->alamat = $request->alamat;
        //     $customer->save();
        //     return response()->json(['status' => 'Sukses']);
        // }

        // if ($validated->passes()) {
        //     return response()->json(['success' => 'Added new records.']);
        // }else {
        //     return response()->json($validated->messages(), 200);
        // }
        Customer::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'alamat' => $request->alamat,
        ]);
        return response()->json(['success' => true]);
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
