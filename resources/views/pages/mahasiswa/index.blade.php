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
    <p class="card-text">Berikut adalah kumpulan data mahasiswa yang bisa di: <span class="text-primary">Create, Read, Update, Delete</span>
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
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th>NIM</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Action</th>
              </tr>
          </tfoot>
          <tbody>
            @foreach($mahasiswa as $mhs)
              <tr>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->foto }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->email }}</td>
                <td>
                  <div class="d-flex px-1">
                    <a class="btn btn-sm btn-info" href=""><i class="fas fa-info"></i></a>
                    <a class="btn btn-sm btn-primary" href=""><i class="fas fa-pen"></i></a>
                    <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</div>
@endsection