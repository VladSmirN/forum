@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создать тему</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'ThreadController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('title', 'Заголовок')}}
                            {{Form::text('title', '', ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('text', 'Текст')}}
                            {{Form::textarea('text', '', ['id' => 'article-ckeditor', 'class' => 'form-control' ])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('image', 'Загрузить  фото')}}
                            <br/>
                            {{Form::file('image')}}
                        </div>
                         
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger ">{{ $error }}</div>
                            @endforeach
                        {{Form::submit('Сохранить', ['class'=>'btn btn-primary float-right'])}}
                        <a href="/catalog" class="btn  bg-light float-right mr-3" role="button">Отмена</a>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
