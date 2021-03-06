@extends('layouts.app')
@section('content')
    {{-- BEGIN --}}
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::model($article, ['url' => route('articles.create')]) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
    {{ Form::close() }}
    {{-- END --}}
@endsection
