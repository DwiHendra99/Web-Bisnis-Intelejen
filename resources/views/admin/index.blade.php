<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link to Custom CSS -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

<body>
    <div class="row">
        <h1> Data Content
        </h1>
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
                <td>{{ $content->id }}</td>
                <td>{{ $content->content }}</td>
                <td>
                    <a href="{{ route('content.edit', $content->id) }}" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M11.646 0.146a1 1 0 0 1 1.32 1.32l-9 9a1 1 0 0 1-.854.354H2a1 1 0 0 0-1 1v2.793a1 1 0 0 0 1 1h2.793a1 1 0 0 1 .707.293l9 9a1 1 0 0 1-1.32 1.497l-9-5.5a1 1 0 0 0-.707 0l-6.5 3.75a1 1 0 0 1-1.32-1.497l6.5-3.75a1 1 0 0 0 0-1.664l-6.5-3.75a1 1 0 0 1 .354-1.664l9-5.5z" />
                        </svg>
                        Edit
                    </a>
                </td>
            @endforeach

        </tbody>
    </table>
    <div class="row">
        <h1>
            <form action="/">
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
