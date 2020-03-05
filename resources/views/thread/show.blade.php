@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: #f5f5f5;">
                <div class="card-header">
                    Тема -
                    <span class="font-weight-bold">{{$thread->title}}</span>

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
                <div class="card-body">
                    <img
                        src="{{$thread->image}}"
                        class="rounded float-left"
                        style="margin-right: 15px; max-width: 400px;"
                    />
                    <div class="text-justify">{{$thread->text}}</div>
                </div>
            </div>

            @foreach ($messages as $message)
            <div class="card mt-2">
                <div class="card-body">
                    <h6 class="card-title text-muted">
                        <a href="/profile">{{$message->user_name}}</a>
                    </h6>
                    @if($message->image)
                    <img
                        src="{{$message->image}}"
                        class="rounded float-left"
                        style="margin-right: 15px; max-width: 400px;"
                    />
                    @endif

                    <div class="text-justify">{{$message->text}}</div>
                </div>
            </div>

            @endforeach @if($messages->total() > $messages->count())
            <div class="mt-3">
                {{$messages->links()}}
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
