<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Automovil;
use Illuminate\Http\Request;
use Auth;

class AutomovilController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automoviles = Automovil::all();
        return view('automovil.index')->with(['automoviles' => $automoviles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id','!=',Auth::user()->id)->get();
        return view('automovil.create')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $automovil = new Automovil();
        $automovil->marca = $request->get('marca');
        $automovil->precio = $request->get('precio');
        $success = $automovil->save();
        if($success){
            return redirect(route('automovil.index'));
        }else{
            return redirect()->back()->with('error',"no se pudo ingresar");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function edit(Automovil $automovil)
    {
        //$automovil = Automovil::find($id);
        return view('automovil.edit')->with('automovil',$automovil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Automovil $automovil)
    {
        $automovil->marca = $request->get('marca');
        $automovil->precio = $request->get('precio');
        $success = $automovil->save();
        if($success){
            return redirect(route('automovil.index'));
        }else{
            return redirect()->back()->with('error',"no se pudo ingresar");
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Automovil $automovil)
    {
        $success = $automovil->delete();
        if($success){
            return redirect()->back()->with('success',"Se ha eliminado");
        }else{
            return redirect()->back()->with('error',"no se pudo ingresar");
        }
    }
}
