@extends('layout.app')

@section('content')

    <section>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <label for="title">Title</label>
            <input type="text" name="title" id="title">

            <label for="description">Description</label>
            <input type="text" name="description" id="description">

            <label for="thumb">Thumb url</label>
            <input type="text" name="thumb" id="thumb">

            <label for="price">Price</label>
            <input type="text" name="price" id="price">

            <label for="series">Series</label>
            <input type="text" name="series" id="series">

            <label for="sale_date">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date">

            <label for="type">Type</label>
            <input type="text" name="type" id="type">

            <input type="submit" value="Invia">
        </form>
    </section>

@endsection
