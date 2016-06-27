<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Article - Edit</title>
</head>
<body>
	<h1>Bài viết số {{ $article->id }}</h1>
	{!! Form::model($article,[ 'method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id] ]) !!}
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name') !!} <br />

        {!! Form::label('author','Author:') !!}
        {!! Form::text('author') !!} </br>

        {!! Form::label('created_at','Created Date:') !!}
        {!! Form::input('date', 'created_at', date("Y-m-d")) !!} <br />

        {!! Form::submit('Cap Nhat')!!}
    {!! Form::close() !!}
</body>
</html>