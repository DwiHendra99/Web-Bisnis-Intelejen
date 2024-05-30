<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/update.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h1>Update Content</h1>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ url('/contents', $content->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="contentId" class="form-label">ID</label>
                        <input type="text" class="form-control" id="contentId" name="id"
                            value="{{ $content->id }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="contentDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="contentDescription" name="content" rows="3">{{ $content->content }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success d-block mx-auto">Update</button>
                    <a href="/contents" type="button" class="btn btn-secondary d-block mx-auto">Back</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
