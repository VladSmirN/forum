@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Редактировать профиль</div>

                <div class="card-body">

                    {!! Form::open(['action' => 'ProfileController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('name', 'Имя')}}
                            {{Form::text('name', $name, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('email', 'email')}}
                            {{Form::text('email', $email, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'Описание')}}
                            {{Form::textarea('description', $description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text' ])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('avatar', 'Загрузить новое фото')}}
                            <br/>
                            {{Form::file('avatar')}}
                        </div>
                         
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger ">{{ $error }}</div>
                            @endforeach
                        {{Form::submit('Сохранить', ['class'=>'btn btn-primary float-right'])}}
                        <a href="/profile" class="btn  bg-light float-right mr-3" role="button">Отмена</a>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
