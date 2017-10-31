<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', ['recipes' => Recipe::get() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return("prikaz view-a sa web obrascem za unos");
    }
	
	public function save(Request $request) 
	{
		// $request->nameInput = vrijednostInputa
		return ("spremanje podataka iz webobrazca u bazu");
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        return "Prikaz recepta ID:" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Promjena recepta sa ID: " . $id; //prikaz web obrasca
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
        return "Spremanje promjena recepta ID: " . $id;
		// 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return "brisanje recepta ID: " . $id;
    }
}
