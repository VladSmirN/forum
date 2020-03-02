@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Каталог</div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($threads as $thread)
                        <thread-component
                            :thread="{{ json_encode($thread) }}"
                        ></thread-component>
                        @endforeach
                    </div>
                    @if($threads->total() > $threads->count())
                    <div class="mt-3">
                        {{$threads->links()}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
