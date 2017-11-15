<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $customers = Customer::all();

        return $customers;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $customer = new Customer();
        $customer->name = $data['name'];
        $customer->username = $data['username'];
        $customer->email = $data['email'];
        $customer->save();
        return response()->json($customer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $customer = Customer::find($id);
        $customer['name'] = $data['name'];
        $customer['username'] = $data['username'];
        $customer['email'] = $data['email'];
        $customer->save();

        if ($customer) {
            return response($customer, 200);
        }
        else {
            return response([
                "status" => "error",
                "message" => "failed"
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id)->delete();

        if ($customer) {
            return response([
                "status" => "success",
                "message" => "Customer successfuly deleted"
            ], 200);
        }
        else {
            return response([
                "status" => "error",
                "message" => "failed"
            ], 401);
        }
    }
}
