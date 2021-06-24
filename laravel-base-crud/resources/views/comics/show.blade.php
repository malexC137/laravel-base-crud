@extends('layout.default')

@section('page_title', 'Creation new comic')

@section('content')
    <ul>
    <li>ID: {{ $name->id }} </li>
    <li>Title: {{ $name->title }} </li>
    <li>Description: {{ $name->description }} </li>
    <li>Thumb: {{ $name->thumb }} </li>
    <li>Price: {{ $name->price }} </li>
    <li>Sale date: {{ $name->sale_date }} </li>
    <li>Type: {{ $name->type }} </li>
    <li>Created at: {{ $name->created_at }} </li>
    <li>Updated at: {{ $name->updated_at }} </li>
    </ul>
@endsection
