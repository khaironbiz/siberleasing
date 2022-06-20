@extends('bs ')
@section('main')
    <main class="flex-shrink-0 mb-5" id="contacts">
        <div class="container">
            <h1 class="mt-5 mb-5 text-center">Data Pelanggan</h1>
            @if(session()->get('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session()->get('success')}}</strong> Berhasil Dong.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-8 offset-sm-2">
                    <form action="{{ url('/contacts') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">FUll Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea name="address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label> File Name</label>
                            <input type="file" name="filename" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
