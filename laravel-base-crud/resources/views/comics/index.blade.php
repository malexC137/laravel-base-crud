@extends('layout.default')

@section('page_title', 'Creation new comic')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Thumb</th>
            <th>Price</th>
            <th>Series</th>
            <th>Sale_date</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td> {{ $comic->id }} </td>
            <td> {{ $comic->title }} </td>
            <td> {{ $comic->description }} </td>
            <td> {{ $comic->thumb }} </td>
            <td> {{ $comic->price }} </td>
            <td> {{ $comic->series }} </td>
            <td> {{ $comic->sale_date }} </td>
            <td> {{ $comic->type }} </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
