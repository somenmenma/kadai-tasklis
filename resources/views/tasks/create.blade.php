@extends('layouts.app')

@section('content')

  @if (count($errors) > 0)
        <ul class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li class="ml-4">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<h1>タスク新規作成ページ</h1>

<div class="row">
        <div class="col-6">
            {!!Form::model($task, ['route' => 'tasks.store']) !!}
                
                 <div class="form-group">
                    {!! Form::label('status', 'ステイタス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content', null , ['class' => 'form-control']) !!}
                
                {!! Form::submit('投稿') !!}
            {!! Form::close() !!}
        </div>
</div>
@endsection