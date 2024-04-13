@extends('layouts.main')

@section('container')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route("dashboard") }}">Dashboard</a></li>
    <li class="breadcrumb-item active">{{ $mainHeader }}</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-info me-1"></i>
        Short Information
    </div>
    <div class="card-body">
        <p class="card-text">Berikut adalah kumpulan data mahasiswa yang bisa di: <span class="text-primary">Create,
                Read, Update, Delete</span>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between">
        <div>
            <i class="fas fa-table me-1"></i>
            DataTable
        </div>
        <a class="btn btn-sm btn-primary" href="">Tambah Data</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($mahasiswa as $mhs)
                <tr data-bs-toggle="modal" data-bs-target="#modalId">
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>
                        <div class="d-flex px-1">
                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                data-bs-target="#modalId">
                                <i class="fas fa-info"></i>
                            </button>
                            <a class="btn btn-sm btn-primary" data-id="" href=""><i class="fas fa-pen"></i></a>
                            <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

            {{-- Tinggal buat popup modal buat per row --}}
        </table>
    </div>
</div>

<!-- Modal trigger button -->


<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Detail Data
                </h5>
            </div>
            <div class="modal-body">
              <div class="row mx-2">
                <table class="col-sm-8">
                  <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>2301020006</td>
                  </tr>
                  <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>Aidil Baihaqi</td>
                  </tr>
                  <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>Laki-laki</td>
                  </tr>
                  <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>Kijang Kota</td>
                  </tr>
                  <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>21 November 2004</td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>Kp Jati III No 5</td>
                  </tr>
                  <tr>
                    <th>Nomor Telepon</th>
                    <th>:</th>
                    <td>081268335349</td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <th>:</th>
                    <td>abaihaqi@umrah.ac.id</td>
                  </tr>
                </table>
                <div class="col-sm-4">
                  <img class="img-thumbnail" src="{{ asset('assets/aidil.jpg') }}" alt="" width="200">
                </div>
              </div>
              

            </div>
        </div>
    </div>
</div>

<!-- Optional: Place to the bottom of scripts -->
<script>
    /*const myModal = new bootstrap.Modal(
    document.getElementById("modalId"),
    options,
  );*/
</script>

@endsection