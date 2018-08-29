<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userE = null;
        $users = User::whereHas('chat')->with('chat')->get()
            ->sortByDesc(function($users) {
                return $users->chat->last()->created_at;
            });

        $usersN = User::doesntHave('chat')->get();

        $mensagens = Chat::all()->sortByDesc('created_at');

        return view('admin.chat.chat', compact('users', 'mensagens', 'userE', 'usersN'));
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


        $this->validate($request, [
            'user_id' => 'required',
            'message' => 'required'
        ]);

        $chat = Chat::create([
            'from' => 0,
            'to' => $request['user_id'],
            'user_id' => $request['user_id'],
            'message' => $request['message']
        ]);


        return redirect('admin/chat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $usersN = User::doesntHave('chat')->get();

        $users = User::whereHas('chat')->with('chat')->get()
            ->sortByDesc(function($users) {
                return $users->chat->last()->created_at;
            });

        $mensagens = Chat::all()->sortByDesc('created_at');

        $userE = User::findOrFail($id);



        return view('admin.chat.chat', compact('users', 'mensagens', 'userE', 'usersN'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
