@extends('bs ')
@section('main')
    <main class="flex-shrink-0 mb-5" id="cars">
        <div class="container">
            <h1 class="mt-5 mb-5 text-center">Koleksi Mobil Kami</h1>
            <div class="row">
                <div class="col-md-4 col-6 d-flex mb-2" id="mobilio">
                    <div class="card">
                        <img src="/assets/upload/images/cars/mobillio.jpg" class="w-100">
                        <div class="card-body">
                            <h6>Mobilio</h6>
                        </div>
                        <div class="card-footer">Rp. 134.000.000</div>
                    </div>
                </div>
                <div class="col-md-4 col-6 d-flex" mb-2 id="avanza">
                    <div class="card">
                        <img src="/assets/upload/images/cars/avanza.jpg" class="w-100">
                        <div class="card-body">
                            <h6>Avanza</h6>
                        </div>
                        <div class="card-footer">Rp. 145.000.000</div>
                    </div>
                </div>
                <div class="col-md-4 col-6 d-flex mb-2" id="corolla">
                    <div class="card">
                        <img src="/assets/upload/images/cars/corolla.jpg" class="w-100">
                        <div class="card-body">
                            <h6>Corolla</h6>
                        </div>
                        <div class="card-footer">Rp. 167.000.000</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
