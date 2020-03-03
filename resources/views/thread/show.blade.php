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
                        style="margin-right: 15px; max-width: 400px;"
                    />
                    <div class="text-justify">{{$thread->text}}</div>

                    <a
                        href="/message/{{$thread->id}}/create"
                        class="btn  btn-primary float-right "
                        role="button"
                        >Оставить комментарий</a
                    >
                    <a
                        href="/catalog"
                        class="btn  bg-light float-right mr-3"
                        role="button"
                        >В каталог</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
