@extends('layout.default')

@section('page_title', 'Creation new comic')

@section('content')

<a href=" {{ route('comics.index') }} ">Torna alla home</a>
@include('comics/components.deleteBtn', ["comic"=>$comic])
<ul>
    <li>ID: {{ $comic->id }} </li>
    <li>Title: {{ $comic->title }} </li>
    <li>Description: {{ $comic->description }} </li>
    <li>Thumb: {{ $comic->thumb }} </li>
    <li>Price: {{ $comic->price }} </li>
    <li>Series: {{ $comic->series }} </li>
    <li>Sale date: {{ $comic->sale_date }} </li>
    <li>Type: {{ $comic->type }} </li>
    <li>Created at: {{ $comic->created_at }} </li>
    <li>Updated at: {{ $comic->updated_at }} </li>
    {{-- <li>DATA VER. EMAIL: {{ $comic->email_verified_at }}</li> --}}
</ul>
@endsection
