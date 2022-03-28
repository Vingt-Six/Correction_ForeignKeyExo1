<section>
    <form action="/cars" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="brand">
            </div>
            <div class="col">
                <input type="number" class="form-control" name="year">
            </div>
        </div>
        <select class="form-select" aria-label="Default select example" name="color_id">
            <option selected>Select color</option>
            @foreach ($colors as $color)
                <option value="{{$color -> id}}">{{$color -> color}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Add Car</button>
    </form>
</section>
