<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Articles</title>
</head>
<body>
	<h1>Danh sách bài viết</h1>
    <table border="1">
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Author</td>
        </tr>
        @foreach ($articles as $key => $article)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{ $article->name }}</td>
            <td>{{ $article->author }}</td>
            <td><a href="{{URL::to('articles/'.$article->id.'/edit')}}">Sửa</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>