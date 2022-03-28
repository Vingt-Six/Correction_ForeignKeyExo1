<section>
    @foreach ($cars as $car)
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                {{$car -> brand}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$car -> year}}</li>
                <li class="list-group-item">{{$car->color->color}}</li>
            </ul>
        </div>
    @endforeach
</section>
