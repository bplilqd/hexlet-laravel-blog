@extends('layouts.app')

@section('content')
    {{ html()->form('GET', route('articles.search'))->open() }}
        {{ html()->text('q', $q) }}
        {{ html()->submit('Search') }}
    {{ html()->form()->close() }}
<h1>Список статей</h1>
@foreach($articles as $article)
<h2>{{$article->name}}</h2>
<div>{{Str::limit($article->body, 200)}}</div>
@endforeach
<div>{{$articles->links()}}</div>
@endsection