@extends('bs ')
@section('main')
    <main class="flex-shrink-0 mb-5">
        <div class="container">
            <h3 class="mt-5 mb-4 text-center">Permohonan Pendanaan Kendaraan</h3>
            <div class="row justify-content-center">
                <div class="col-md-6" id="pendanaan">
                    <form action="{{ url('/calculate#respond_daftar') }}" method="post">
                        @csrf
                        <div class="row mb-1">
                            <label class="col-sm-4 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="nik" placeholder="nomor KTP">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="Nama sesuai KTP">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Usia</label>
                            <div class="col-sm-8">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="usia" placeholder="Usia sesuai KTP">
                                    <span class="input-group-text" >Tahun</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label class="col-sm-4 col-form-label">HP</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="hp" placeholder="Nomor HP yang mudah dihubungi">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" placeholder="Email aktif">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8" >
                                <textarea class="form-control" name="alamat"></textarea>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label class="col-sm-4 col-form-label">Harga Kendaraan</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="harga_kendaraan" placeholder="harga kendaraan">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label class="col-sm-4 col-form-label">Uang Muka</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="uang_muka">
                                    <?php
                                    $x          = 2;
                                    $kelipatan  = 5;
                                    while($x<=12):
                                    ?>
                                    <option value="<?= $x*$kelipatan ?>"><?= $x*$kelipatan; ?> %</option>
                                    <?php
                                    $x++;
                                    endwhile;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label class="col-sm-4 col-form-label">Jangka Waktu</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="qty_cicilan">
                                    <?php
                                    $num    = 1;
                                    $bln    = 12;
                                    while($num<=5):
                                    ?>
                                    <option value="<?= $num*$bln ?>"><?= $num; ?> Tahun</option>
                                    <?php
                                        $num++;
                                        endwhile;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label class="col-sm-4 col-form-label">Suku Bunga / Tahun</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="bunga">
                            </div>
                        </div>
                        <div class="row mb-1">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary">Ajukan</button>
                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
