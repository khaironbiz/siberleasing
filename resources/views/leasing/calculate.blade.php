@extends('bs ')
@section('main')
    <main class="flex-shrink-0 mb-5">
        <div class="container">
            <h3 class="mt-5 mb-3 text-center" id="respond_daftar">Data Permohonan Pembiayaan</h3>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <?php
                    if($data['usia'] > 19){
                    ?>
                    <table class="table table-sm table-striped">
                        <tr>
                            <td>Nomor Permohonan</td><td>:</td><td><?= $data['unique'] ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td><td>:</td><td><?= $data['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td><td>:</td><td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Usia</td><td>:</td><td><?= $data['usia'] ?></td>
                        </tr>
                        <tr>
                            <td>HP</td><td>:</td><td><?= $data['hp'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td><td>:</td><td><?= $data['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td><td>:</td><td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Kendaraan</td><td>:</td><td><?= number_format($data['harga_kendaraan']) ?></td>
                        </tr>
                        <tr>
                            <td>Uang Muka</td><td>:</td><td><?= number_format($data['uang_muka']) ?></td>
                        </tr>
                        <tr>
                            <td>Plafon</td><td>:</td><td><?= number_format($data['plafon']) ?></td>
                        </tr>
                        <tr>
                            <td>Lama Cicilan</td><td>:</td><td><?= $data['qty_cicilan'] ?> Bulan</td>
                        </tr>
                        <tr>
                            <td>Pokok</td><td>:</td><td><?= number_format($data['plafon']/$data['qty_cicilan']) ?></td>
                        </tr>
                        <tr>
                            <td>Bunga</td><td>:</td><td><?= number_format($data['bunga']) ?> (<?= $data['bunga_persen'] ?> %/tahun)</td>
                        </tr>
                        <tr>
                            <td>Cicilan Bulanan</td><td>:</td><td><?= number_format($data['cicilan']) ?></td>
                        </tr>
                        <tr>
                            <td>Minimal Gaji/Bulan</td><td>:</td><td><?= number_format($data['cicilan']*3) ?></td>
                        </tr>

                    </table>
                    <?php
                    }else{
                        echo "<h4 class='text-danger text-center'>Mohon Maaf Usia Anda Belum Cukup</h4>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
@endsection
