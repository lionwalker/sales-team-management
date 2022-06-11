<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sales Team Manager</title>

    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-9"><h2 class="mb-5 text-dark">Sales Team</h2></div>
            <div class="col-3">
                <a href="/create" class="btn btn-primary float-right">Add New</a>
            </div>
        </div>

        @if(Session::has('message'))
            <div class="row">
                <div class="col-12">
                    <div class="alert {{ (Session::get('success')) ? 'alert-success' : 'alert-danger' }}">
                        {{ Session::get('message') }}
                    </div>
                </div>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Current Route</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($salesPeople as $person)
                    <tr scope="row">
                        <td>{{$person->id}}</td>
                        <td>{{$person->name}}</td>
                        <td>{{$person->email}}</td>
                        <td>{{$person->telephone}}</td>
                        <td>{{$person->current_routes}}</td>
                        <td>
                            <a
                                href="#"
                                onclick="showData(this)"
                                data-id="{{$person->id}}"
                                data-name="{{$person->name}}"
                                data-email="{{$person->email}}"
                                data-telephone="{{$person->telephone}}"
                                data-current_routes="{{$person->current_routes}}"
                                data-joined_date="{{$person->joined_date}}"
                                data-comments="{{$person->comments}}"
                            >View</a>
                        </td>
                        <td><a href="/{{$person->id}}">Edit</a></td>
                        <td>
                            <form action="/{{$person->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {!! $salesPeople->links() !!}
    </div>
</div>

<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalForms"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header p-3">
                <h5 class="modal-title" id="person-name"></h5>
            </div>
            <div class="modal-body mt-3 mb-3">
                <div class="row mb-1">
                    <div class="col-3">ID</div>
                    <div class="col-9" id="person-id"></div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Full name</div>
                    <div class="col-9" id="person-full-name"></div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Email</div>
                    <div class="col-9" id="person-email"></div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Telephone</div>
                    <div class="col-9" id="person-telephone"></div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Joined date</div>
                    <div class="col-9" id="person-date"></div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Current route</div>
                    <div class="col-9" id="person-current-route"></div>
                </div>
                <div class="row mb-1">
                    <div class="col-3">Comments</div>
                    <div class="col-9" id="person-comment"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
    function showData(person) {
        $("#person-name").html(person.dataset.name);
        $("#person-id").html(person.dataset.id);
        $("#person-full-name").html(person.dataset.name);
        $("#person-email").html(person.dataset.email);
        $("#person-telephone").html(person.dataset.telephone);
        $("#person-current-route").html(person.dataset.current_routes);
        $("#person-date").html(person.dataset.joined_date);
        $("#person-comment").html(person.dataset.comments);
        $("#detailsModal").modal('toggle');
    }
</script>
</body>
</html>
