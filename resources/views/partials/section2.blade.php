<section>
    @foreach ($colors as $color)
        <h1>{{$color -> color}}</h1>
        @foreach ($color->car as $item)
            <p>{{$item -> brand}}</p>
            <p>{{$item -> year}}</p>
        @endforeach
    @endforeach
</section>