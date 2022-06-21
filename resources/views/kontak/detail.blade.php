@extends('bs ')
@section('main')
    <main class="flex-shrink-0 mb-5" id="contacts">
        <div class="container">


            @if(session()->get('success'))
            <div class="alert alert-success" role="alert">
                <strong>{{session()->get('success')}}</strong> Berhasil Dong.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <?php
            $contact = $data['contact'];
            ?>
            <div class="card mt-5">
                <div class="card-header bg-success text-white">
                    <h1 class="text-center">Data Pelanggan</h1>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-hover">
                        <tr>
                            <td>Nama</td><td>:</td><td>{{$contact->name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td><td>:</td><td>{{$contact->email}}</td>
                        </tr>
                        <tr>
                            <td>Phone</td><td>:</td><td>{{$contact->phone}}</td>
                        </tr>
                        <tr>
                            <td>Address</td><td>:</td><td>{{$contact->address}}</td>
                        </tr>
                        <tr>
                            <td>Foto</td><td>:</td><td><img src="{{ url('/assets/upload/images/users/'.$contact->foto) }}"></td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{url("contacts/{$contact->has_contact}/edit")}}#contacts" class="btn btn-success">Edit</a>
                        </div>
                        <div class="col-md-6">
                            <form action="{{url("contacts/{$contact->id}")}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
