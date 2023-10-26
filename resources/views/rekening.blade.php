@extends('layouts.admin')

@section('content-1')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Rekening</h5>
                    <a href="" class="btn btn-sm btn-outline-primary mb-2">Rekam</a>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Nomor</th>
                                    <th>Uraian</th>
                                    <th>Jenis</th>
                                    <th>Bank</th>
                                    <th>Surat</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>537827</td>
                                    <td>KPKNL Banda Aceh</td>
                                    <td>3701000303304</td>
                                    <td>RPL 001 KPKNL BANDA ACEH</td>
                                    <td>RPL Lelang</td>
                                    <td>BRI</td>
                                    <td>S-3901/MK.5/2015</td>
                                    <td>12/05/2015</td>
                                    <td>Aktif</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="" class="btn btn-sm btn-outline-primary">Ubah</a>
                                            <a href="" class="btn btn-sm btn-outline-primary">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
