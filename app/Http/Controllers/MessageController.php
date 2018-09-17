<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\User;
use Illuminate\Http\Request;
use Auth;

class MessageController extends Controller
{

    /*public function __construct(){
        $this->middleware('auth');
    }*/



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
        $user = User::where('id', '!=', Auth::user()->id)->get();
        return view('messages.create')->with('users', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $mensaje = Message::create($data);
        $success = $mensaje != null;
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
        $user = User::where('id', '!=', Auth::user()->id)->get();
        return view('messages.edit')->with(['message'=>$message, 'users'=>$user]);
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
        $message->text=$request->get('texto');
        $message->to_user_id= $request->get('to_user_id');
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
            return redirect()->back()->with('success',"Se ha eliminado el texto");
        }else{
            return redirect()->back()->with('error',"No se ha eliminado el texto");
        }
    }
}
