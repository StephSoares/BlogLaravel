@extends('layouts.app')

@section('content')


Ma liste de catégories :

@foreach ($categories as $category)
    <p>C'est la catégorie : {{ $category->label }}</p>
@endforeach

@endsection