<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

use App\Whiteboard;
use App\Item;
use App\User;
use App\Specification;

use App\Http\Resources\LousaResource;

class LousaController extends Controller
{
    /**
     *   Listar todos os whiteboards
     */
    public function index()
    {
        $whiteboards = Whiteboard::all();
        return response($whiteboards);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'hash' => 'required',
            'data' => 'required',
            'name' => 'required'
        ]);

        $whiteboard = new Whiteboard;

        $whiteboard->user_id = $data['user_id'];
        $whiteboard->hash = $data['hash'];
        $whiteboard->data = $data['data'];
        $whiteboard->name = $data['name'];

        $whiteboard->save();

        return response(
            Response::HTTP_OK
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * find($id)
     */
    public function show($id)
    {
        return response(

            Response::HTTP_OK
        );
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
        $data = $request->validate([
            'user_id' => 'required',
            'location_id' => 'required',
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

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
