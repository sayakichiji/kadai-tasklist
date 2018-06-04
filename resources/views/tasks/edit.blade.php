@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-6">

    <h1>id: {{ $tasks->id }} のタスク編集ページ</h1>

    
    {!! Form::model($tasks, ['route' => ['tasks.update', $tasks->id], 'method' => 'put']) !!}
       
         <div class="form-group">
                    {!! Form::label('status', '種別:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>

           <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
       

        {!! Form::submit('更新'', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
       </div>
    </div>
@endsection