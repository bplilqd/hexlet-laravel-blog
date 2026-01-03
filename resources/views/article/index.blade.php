@extends('layouts.app')

@section('content')

    @foreach ($articles as $article)
        <h2><a href="/articles/{{$article->id}}">{{$article->name}}</a></h2>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 150)}}</div>
        <div>Id: {{$article->id}} <a href="/articles/{{$article->id}}/edit">Редактировать сатью</a></div>
    @endforeach
    <div class="mt-4"> <!-- Добавить отступ сверху -->
        {{ $articles->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
