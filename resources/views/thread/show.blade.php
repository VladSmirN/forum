@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Тема -
                    <span class="font-weight-bold">{{$thread->title}}</span>
                </div>
                <div class="card-body">
                    <img
                        src="{{$thread->image}}"
                        class="rounded float-left"
                        style="margin-right: 15px;"
                    />
                    <div class="text-justify">{{$thread->text}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
