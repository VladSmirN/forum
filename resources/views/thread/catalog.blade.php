@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Каталог</div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($threads as $thread)
                        <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
                            <div class="card" style="width: 18rem;">
                                <img
                                    class="card-img-top"
                                    src="{{$thread->image}}"
                                    alt="Card image cap"
                                />
                                <div class="card-body">
                                    <p class="card-text">{{$thread->title}}</p>
                                </div>
                            </div>
                        </div>
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
