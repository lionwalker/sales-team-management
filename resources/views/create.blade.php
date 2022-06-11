<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Sales Representative:</title>

    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="content text-dark">
    <div class="container">
        <div class="row">
            <div class="col-9"><h2 class="mb-5 text-dark">Add Sales Representative:</h2></div>
            <div class="col-3">
                <a href="/" class="btn btn-primary float-right">Back</a>
            </div>
        </div>
        <form action="/" method="post">
            @csrf

            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>

            <div class="form-group text-right">
                <div class="row mb-1">
                    <div class="col-3">Full name</div>
                    <div class="col-9">
                        <input type="text" name="name" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Email</div>
                    <div class="col-9">
                        <input type="email" name="email" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Telephone</div>
                    <div class="col-9">
                        <input type="number" name="telephone" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Joined date</div>
                    <div class="col-9">
                        <input type="text" name="joined_date" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Current route</div>
                    <div class="col-9">
                        <input type="text" name="current_routes" value="" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Comments</div>
                    <div class="col-9">
                        <textarea name="comments" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="offset-3 col-9">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
