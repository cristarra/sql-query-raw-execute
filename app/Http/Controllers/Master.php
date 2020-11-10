<?php

namespace App\Http\Controllers;

use App\Http\Models\Book;
use App\Http\Models\Customer;
use App\Http\Models\Employee;
use App\Http\Models\Order;
use App\Http\Models\OrderDetail;
use App\Http\Models\Shipper;
use App\Http\Models\Subject;
use App\Http\Models\Supplier;
use Illuminate\Http\Request;

class Master extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = array(
            "books" => Book::get(),
            "customers" => Customer::get(),
            "employees" => Employee::get(),
            "orders" => Order::get(),
            "order_details" => OrderDetail::get(),
            "shippers" => Shipper::get(),
            "subjects" => Subject::get(),
            "suppliers" => Supplier::get()
        );

        return view('master', $data);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Models\Book  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Models\Book  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Models\Book  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master $master)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Models\Book  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        //
    }
}
