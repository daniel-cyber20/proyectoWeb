<?php

namespace App\Http\Controllers;

use App\cine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['cines']= cine::paginate(5);
        return view('cines.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cines.create');
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
       $datosCine = request() -> except('_token');

       if ($request ->hasFile('Foto'))
       {
        $datosCine['Foto'] = $request ->file('Foto')->store('uploads','public');        
       }

       cine::insert($datosCine);    

        //return response()->json($datosCine);
    return Redirect('cines')->with('mensaje','Agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cine  $cine
     * @return \Illuminate\Http\Response
     */
    public function show(cine $cine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cine  $cine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cine = cine::findOrFail($id);

        return view ('cines.edit',compact('cine'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cine  $cine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCine = request() -> except(['_token','_method']);


        if ($request ->hasFile('Foto'))
        {
            $cine = cine::findOrFail($id);
            Storage::delete('public/'.$cine ->Foto);

         $datosCine['Foto'] = $request ->file('Foto')->store('uploads','public');        
         
        }
  
        cine::where('id','=',$id)->update($datosCine);

      //  $cine = cine::findOrFail($id);
       // return view('cines.edit', compact('cine'));
       return Redirect('cines')->with('mensaje','modificado con exito');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cine  $cine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cine = cine::findOrFail($id);
        if(  Storage::delete('public/'.$cine ->Foto))
       {
        cine::destroy($id);

       }
       // return Redirect('cines');
       return Redirect('cines')->with('mensaje','Eliminado con exito');



    }
}
