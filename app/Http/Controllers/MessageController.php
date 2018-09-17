<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Auth;
use App\User;

class MessageController extends Controller
{
    //Autenticación
    //public function _construct(){
      //  $this->middleware('auth');
    //}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();
        return view('messages.index')->with(['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::where('id','!=',Auth::user()->id)->get();
        return view('messages.create')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $mensaje = new Message();
        $mensaje->text = $request->get('texto');
        $mensaje->user_id = Auth::user()->id;
        $success = $mensaje->save();
        if($success){
            return redirect(route('messages.index'));
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
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return view('messages.edit')->with('message',$message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        $message->text = $request->get('texto');
        $success = $message->save();
        if($success){
            return redirect(route('messages.index'));
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
    public function destroy(Message $message)
    {
        $success = $message->delete();
        if($success){
            return redirect()->back()->with('succes',"Se ha eliminado");
        }else{
            return redirect()->back()->with('succes',"No vale we");
        }
    }
}
