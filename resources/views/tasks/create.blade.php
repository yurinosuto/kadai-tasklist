@extends('layouts.app')

@section('content')

    <h1>作成ページ</h1>

    


    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

   

<!-- ここにページ毎のコンテンツを書く -->

@endsection
