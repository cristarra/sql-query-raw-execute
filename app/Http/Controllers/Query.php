<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Query extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result =  (object) array();
        $log = null;
        $sql = null;

        $data = array(
            "result" => $result,
            "log" => $log,
            "sql" => $sql
        );

        return view('query', $data);
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

        $param = $request->all();

        $result =  (object) array();
        $log = null;
        $sql = $param["sql"];

        if(!empty($sql)){
            if(stripos($sql, 'drop') === false){
                try{
                    $statement = DB::select(DB::raw($sql));
                    if(!empty($statement)){
                        $result = $statement;
                    }else{
                        $log = "Query: \"".$sql."\" executed successfully...";
                    }
                }catch (\Exception $e){
                    $log = $e->getMessage();
                }
            }else{
                $log = "DROP are not allowed...";
            }
        }else{
            $log = "Please enter sql query first...";
        }

        $data = array(
            "result" => $result,
            "log" => $log,
            "sql" => $sql
        );

        return view('query', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Models\Customer  $query
     * @return \Illuminate\Http\Response
     */
    public function show(Query $query)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Models\Customer  $query
     * @return \Illuminate\Http\Response
     */
    public function edit(Query $query)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Models\Customer  $query
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Query $query)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Models\Customer  $query
     * @return \Illuminate\Http\Response
     */
    public function destroy(Query $query)
    {
        //
    }
}
