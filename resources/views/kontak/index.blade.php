@extends('bs ')
@section('main')
    <main class="flex-shrink-0 mb-5" id="contacts">
        <div class="container">
            <h1 class="mt-5 mb-5 text-center">Data Pelanggan</h1>
            
            <a href="{{ url('/contacts/create#contacts')}}" class="btn btn-danger mb-1">Add New</a>

            @if(session()->get('jenis'))
            <div class="alert alert-{{session()->get('type')}} alert-dismissible fade show" role="alert">
                <strong>{{session()->get('pesan')}}</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th text-align="center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $con)
                            <tr>
                                <td>{{$con->id}}</td>
                                <td>{{$con->name}}</td>
                                <td>{{$con->email}}</td>
                                <td>{{$con->phone}}</td>
                                <td>{{$con->address}}</td>
                                <td><a href="{{url("contacts/{$con->has_contact}/detail")}}#contacts" class="btn btn-info">Detail</a></td>
                                <td>
                                    <form action="{{url("contacts/{$con->id}")}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </main>
@endsection
