@extends('layouts.app')

@section('content')

<?php
$list = ['完了', '未達成', '作業中'];
?>

<h1>id: {{ $task->id }} のタスク編集ページ</h1>


{!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

    {!! Form::label('status', 'ステータス:') !!}
    {!! Form::select('status',
    $list,
    null,
    [
      'placeholder' => '選択してください',
    ])
     !!}    

    {!! Form::label('content', 'メッセージ:') !!}
    {!! Form::text('content') !!}

    {!! Form::submit('更新') !!}

{!! Form::close() !!}

@endsection