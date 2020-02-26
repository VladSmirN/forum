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
                            <li class="list-group-item"><img src="{{$profile->avatar}}" class="rounded float-left"></li>
                            <li class="list-group-item">Имя : {{$profile->name}}</li>
                            <li class="list-group-item">Почта : {{$profile->email}} </li>
                            <li class="list-group-item">Описание : {{$profile->description}}</li>
                            <li class="list-group-item"> <a href="/profile/edit" class="btn  btn-primary float-right " role="button">Редактировать</a></li>         
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection