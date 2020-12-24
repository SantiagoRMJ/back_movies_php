<?php

namespace App\Http\Controllers;
use App\Models\Citas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Citas::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'userId' => 'required',
            'title'=> 'required',
            'createdAt'=> 'required',
            'returnDate' => 'required',
        ]);
        if($validator->fails()){
            return [
                'created' => false,
                'errors' => $validator->errors()->all()
            ];
        }
        $data = $request->all();
        //dd($data);
        Citas::create($data);
        return $data;    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Citas::find($id);
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
        $cita = Citas::findOrFail($id);
        $cita->fill($request->all());
        $cita->save();

        return $cita;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Citas::findOrFail($id);
        $cita ->delete();

        return $cita;
    }
}
