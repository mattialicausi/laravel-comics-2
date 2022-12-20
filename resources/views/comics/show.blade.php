<section>

    @include('partials.header')

    <section>

        <div class="container-img">
            <a href="{{route('comics.show', $comic->id)}}"><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></a>
        </div>

        <div class="text-white py-2">{{$comic->series}}</div>

    </section>

    @include('partials.footer')

</section>
