<?php

namespace App\Http\Controllers;
use App\models\galeri;
use Illuminate\Http\Request;

class GaleriAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri=galeri::all();

        return $galeri;
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
      
        $galeri=galeri::create($input);

        return $galeri;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeri=galeri::find($id);

        return $galeri;
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
        $input=$request->all();


        $galeri=galeri::find($id);

        if(empty($galeri)){
            return response()->json(['message' => 'Data miss. ntap'], 404);
        }

        $galeri->update($input);

        return response()->json($galeri);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Galeris=galeri::find($id);

        if(empty($Galeris)){
            return response()->json(['message' => 'Data Hilang :V.'], 404);
        }
        $Galeris->delete();

       return response()->json(['message' => 'Data Di hapus.']);
    }
}
