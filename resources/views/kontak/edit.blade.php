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
                    <form action="{{ url("/contacts/{$contact->id}")}}" method="post">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label>FUll Name:</label>
                            <input type="text" value="{{$contact->name}}" name="name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" value="{{$contact->email}}" name="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <input type="text" value="{{$contact->phone}}" name="phone" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" value="{{$contact->address}}" name="address" class="form-control" >
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
