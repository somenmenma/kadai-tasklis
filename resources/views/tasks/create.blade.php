@extends('layouts.app')

@section('content')

<h1>タスク新規作成ページ</h1>

<div class="row">
        <div class="col-6">
            {!!Form::model($task, ['route' => 'tasks.store']) !!}
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content', null , ['class' => 'form-control']) !!}
                
                {!! Form::submit('投稿') !!}
            {!! Form::close() !!}
        </div>
</div>
@endsection