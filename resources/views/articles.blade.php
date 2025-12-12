@extends('layouts.app')

@section('title', 'Мои статьи=)')

@section('content')
@foreach ($test as $value)
    <h3>{{ $value }}</h3>
@endforeach
    <h2>{{ $first->name }} </h2>{{-- Комментарий --}}
    <div>{{ $first->body }}</div>
    <h2>{{ $two->name }}</h2>
    <div>{{ $two->body }}</div>
@foreach ($articles as $article)
    <h2>{{ $article->name }}</h2>
    <div>{{ $article->body }}</div>
@endforeach
@endsection