<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Recibe los datos actualizados y los envia a la vista donde se muestra los usuarios
        $forms = Form::all();
         return view('Form.formList', ['formas'=>$forms]);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = new Form();
        $form->nombre = $request->nombre;
        $form->apellido = $request->apellido;
        $form->email = $request->email;
        $form->contraseña = $request->contraseña;
        $form->save();
        
        // Recibe los datos actualizados y los envia a la vista donde se muestra los usuarios
        $forms = Form::all();
        return view('Form.formList', ['formas'=>$forms]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        $form->nombre = $request->nombre;
        $form->apellido = $request->apellido;
        $form->email = $request->email;
        $form->contraseña = $request->contraseña;
        $form->save();
        return "Actualizado en la base";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form, $id)
    {
        $form = Form::find($id);
        $form->delete();
        return "Se ha borrado del registro";
    }
}