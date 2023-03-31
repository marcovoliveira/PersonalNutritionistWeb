
@extends('admin.layout.admin')
@section('content')

    @php Carbon\Carbon::setLocale('pt') @endphp

    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin/home') }}">Inicio</a>
                </li>
                <li class="breadcrumb-item active">Chat</li>
            </ol>
            <div class="card mb-3">
                <div class="card-header">
                    Chat
                </div>

                <div class="card-body">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-white border-top">
                            <div class="panel-body chat">
                                <div class="row chat-wrapper">
                                    <div class="col-md-4">
                                        <div class="compose-area">
                                            <div class="form-inline" style="margin-left: 16px; ">
                                                <select id="nova" class="form-control" width="150" id="sel1" style="width: 150px">
                                                    @foreach($usersN as $userN)
                                                        <option value="{{$userN->id}}">{{$userN->name}}</option>
                                                    @endforeach
                                                </select>

                                                <button id="new" style="margin-left: 16px;" class="btn btn-primary"><i class="fa fa-edit"></i> Nova Conversa</button>
                                            </div>
                                            </div>

                                        <div>
                                        <div id="test" class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 550px;">
                                        <div class="chat-list-wrapper" style="margin-left: 5%;" style="overflow-y: auto; width: auto; height: auto;">
                                            <ul class="chat-list">
                                                @if($userE == null)

                                                    @if($users->first() != null)
                                                        @php $last = $users->first() @endphp
                                                    @else
                                                       @php $last = null; @endphp
                                                    @endif

                                                @else
                                                    @php $last = $userE @endphp
                                               @endif

                                                @foreach($users as $user)
                                                    @if($last->id == $user->id)
                                                    <li class="active" id="go" data-id="{{$user->id}}">
                                                    @else
                                                <li id="go" data-id="{{$user->id}}">
                                                        @endif
                                                    <div class="body">
                                                        <div class="header">
                                                            <span class="username">{{$user->name}}</span>
                                                            <small class="timestamp text-muted">
                                                                <i class="fa fa-clock-o"></i>
                                                                {{ Carbon\Carbon::parse($mensagens->where('user_id', $user->id)->first()->updated_at)->diffForHumans() }}

                                                            </small>
                                                        </div>
                                                        <p>
                                                            {{$mensagens->where('user_id', $user->id)->first()->message}}
                                                        </p>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                    </div>
                                        <div id="test" class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 478.639px; background: rgb(0, 0, 0);"></div>
                                        <div id="test" class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
                                    </div>

                                    </div>
                                    </div>
                                    <div class="col-lg-8">
                                    <div class="card mb-3" style="height: 95%;   margin-right: 1%; margin-top: 1%; margin-bottom: 1%">
                                        <div class="card-header">
                                            @if($last != null)
                                            {{$last->name}}
                                             @endif
                                        </div>

                                        <div class="card-body">
                                            <ul class="chat-list-wrapper2" id="test">
                                                @foreach($mensagens as $m)
                                                    @if($m->user_id == $last->id)
                                                        @if($m->from == $last->id)

                                                            <p align="right" id="button-wrapper_{{$m->id}}"
                                                               data-title="{{ Carbon\Carbon::parse($m->updated_at)->diffForHumans()}}"
                                                               class="speech-bubble-left">{{$m->message}}</p>

                                                        @elseif($m->from == 0)
                                                                <p align="left"
                                                                   id="button-wrapper_{{$m->id}}"
                                                                   data-title="{{ Carbon\Carbon::parse($m->updated_at)->diffForHumans()}}"
                                                                   class="speech-bubble-right">{{$m->message}}</p>

                                                        @endif
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="card-footer small text-muted" style="margin-bottom:2% ">
                                            <form class="form-inline" method="POST" action="{{  url('admin/chat/send') }}">
                                                {{ csrf_field() }}
                                                @if($last != null)
                                                <input type="hidden" name="user_id" value="{{$last->id}}">
                                                @endif
                                            <input name="message" style="width: 87%;" class="form-control input" id="inputsm" placeholder="Escreve uma mensagem..." type="text">
                                            <button style=" margin-left: 5%;" type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </form>
                                        </div>

                                    </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
            <div class="card-footer small text-muted"></div>
    </div>
        </div>
    </div>
    <script src="{{ asset('public/js/modal/chat.js')}}"></script>
@endsection

