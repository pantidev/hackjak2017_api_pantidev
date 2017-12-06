<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Validator;
use App\Lapor;

class LaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lapor::all();
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
        $dilapor =  json_decode($request->getContent(),true);
        $rules = [
            'IdLokasi'=>'required|numeric',
            'Tentang'=>'required',
            'Pesan'=>'required',
            'Pengadu'=>'required',
            'Contact'=>'required'
        ];
    
        $validator = Validator::make($dilapor, $rules);
        if ($validator->passes()) {
            
            $post = new Lapor;
            
            $post->IdLokasi = $dilapor['IdLokasi'];
            $post->Tentang = $dilapor['Tentang'];
            $post->Pesan = $dilapor['Pesan'];
            $post->Pengadu = $dilapor['Pengadu'];
            $post->Contact = $dilapor['Contact'];
            $isStored = $post->save();
            
            return response()->json(['stored' => $isStored, 'status' => 'ok']);

        } else {
            //TODO Handle your error
            return response()->json(['stored' => false, 'status' => 'data_not_valid']);
        }
        
        
        
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
