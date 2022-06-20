@extends('bs ')
@section('main')
    <main class="flex-shrink-0 mb-5" id="contacts">
        <div class="container">
            <h1 class="mt-5 mb-5 text-center">Data Pelanggan</h1>

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
            
            <div class="row">
                <div class="col-md-8 offset-sm-2">
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
            </div>
        </div>
    </main>
@endsection
