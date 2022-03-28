<section>
    <form action="/colors" method="POST">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="color">
        </div>
        <button type="submit" class="btn btn-primary">Add Color</button>
    </form>
</section>
