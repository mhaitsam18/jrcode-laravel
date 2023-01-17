@extends('admin.template')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="mb-2 text-dark">Master Lowongan</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span>{{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <strong>{{ session('success') }}</strong>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Lowongan</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal dibuka</th>
                                                <th>Tanggal ditutup</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $item->judul_lowongan }}</td>
                                                    <td>{!! $item->deskripsi !!}</td>
                                                    <td>{{ $item->tanggal_dibuka }}</td>
                                                    <td>{{ $item->tanggal_ditutup }}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                Aksi
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item"
                                                                    href="/dashboard/masterLowongan/edit/{{ $item->id }}">
                                                                    <i class="fas fa-pen"></i> Ubah
                                                                </a>
                                                                <a class="dropdown-item"
                                                                    href="/dashboard/masterLowongan/delete/{{ $item->id }}"
                                                                    onclick="return confirm('Apakah anda yakin akan menghapus Lowongan?')">
                                                                    <i class="fas fa-trash"></i> Hapus
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <a href="/dashboard/masterLowongan/{{ $tempatMagang->id }}/create"
                                        class="btn btn-secondary">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection