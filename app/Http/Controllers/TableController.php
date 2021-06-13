<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;
use Inertia\Inertia;
use \Illuminate\Http\Response;

class TableController extends Controller
{
    /**
     * Display a view of the resource.
     *
     * @return Inertia\Inertia Admin/Tables
     */
    public function index()
    {
        return Inertia::render('Admin/Tables');
    }

    /**
     * Return all records in BD object Table
     *
     * @return \Illuminate\Http\Response $mesa
     */
    public function getTables(){

        return $mesa = Table::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response $table
     */
    public function getTable($id)
    {
        return Table::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        //
    }
}