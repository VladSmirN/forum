@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Профиль</div>

                <div class="card-bodyFF">
                    <div class="col-md-12">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><img src="{{$avatar}}" class="rounded float-left"></li>
                            <li class="list-group-item">Имя : {{$name}}</li>
                            <li class="list-group-item">Почта : {{$email}} </li>
                            <li class="list-group-item">Описание : {{$description}}</li>
                            <li class="list-group-item"><a class="col-md-12" href="{{ route('profile.edit') }}">
                                    {{ __('Редактировать') }}
                                </a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection