<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Chat;

class ChatApiController extends Controller
{

    public function index() {

        $messages = Auth::user()->chat()->get();
        return response()->json(['messages' => $messages], 200, [], JSON_NUMERIC_CHECK);

    }

    public function post(Request $request) {


        $id = Auth::user()->getAuthIdentifier();

        $this->validate($request, [
            'message' => 'required',
        ]);

        $chat = Chat::create([
            'from' => $id,
            'to' => 0,
            'user_id' => $id,
            'message' => request('message'),
        ]);

        return response()->json($chat, 201);
    }




}

