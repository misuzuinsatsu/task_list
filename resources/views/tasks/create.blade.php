@extends('layouts.app')

@section('content')

<h1>新規タスク作成ページ</h1>

<?php
$list = ['完了', '未達成', '作業中'];
?>


{!! Form::model($task, ['route' => 'tasks.store']) !!}


    {!! Form::label('status', 'ステータス:') !!}
    {!! Form::select('status',
    $list,
    null,
    [
      'placeholder' => '選択してください',
    ])
     !!}  

    {!! Form::label('content', 'タスク:') !!}
    {!! Form::text('content') !!}

    {!! Form::submit('投稿') !!}

{!! Form::close() !!}

@endsection