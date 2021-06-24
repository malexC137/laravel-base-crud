@extends('layout.default')

@section('page_title', 'Creation new comic')
@section('content')

<form action=" {{ route('comics.store') }} " method="post">
@csrf
    <label for="title">Title</label>
    <input type="text" name="title">

    <label for="description">Description</label>
    <input type="text" name="description">

    <label for="thumb">Thumb</label>
    <input type="text" name="thumb">

    <label for="price">Price</label>
    <input type="text" name="price">

    <label for="series">Series</label>
    <input type="text" name="series">

    <label for="sale_date">Sale date</label>
    <input type="text" name="sale_date">

    <label for="type">Type</label>
    <input type="text" name="type">

    <input type="submit" value="invia">
</form>

@endsection