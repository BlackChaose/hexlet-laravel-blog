@extends('layouts.app')
@section('header','добро пожаловать')
@section('content')
    <div class="links">
        <a href="/about">About</a>
        <a href="/articles">Articles</a>
        <a href="/rating">Rating</a>
        <a href="/contacts">Contacts</a>
        <a href="https://hexlet.io">Hexlet</a>
        <a href="{{route('article_categories.index')}}">Категории статей</a>
    </div>
    @endsection
