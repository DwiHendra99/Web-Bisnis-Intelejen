<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <h1> Data Content </h1>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table id="example1" class="table table-hover">
        <thead>
            <tr>
                <th class="col-sm-1">Id</th>
                <th class="col-sm-2">Description</th>
                <th class="col-sm-1">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contents as $content)
                <td>{{$content->id}}</td>
                <td>{{$content->content}}</td>
                <td>
                    <a href="{{ route('content.edit', $content->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>