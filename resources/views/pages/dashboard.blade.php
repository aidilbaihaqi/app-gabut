@extends('layouts.main')

@section('container')
{{-- Navbar --}}
@include('partials.navbar')
{{-- Sidenav --}}
<div id="layoutSidenav">
    {{-- Sidebar --}}
    @include('partials.sidebar')
    {{-- Main Content --}}
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">ini halaman dashboard lah gaush banyak nnya</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-info me-1"></i>
                        Short Information
                    </div>
                    <div class="card-body">
                        <p class="card-text">Aplikasi ini adalah aplikasi gabutan doang yang tujuannya hanya ingin mempelajari beberapa fitur baru atau yang belum pernah digunakan pada <span class="text-danger"> Laravel</span> seperti <span class="text-info">Breeze, Spatie dan ekosistem lainnya, Tailwind CSS serta teknologi lainnya</span>. Semoga diberikan kemudahan oleh <span class="text-success">Allah SWT</span>. Allahhumma aamiin</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body d-flex justify-content-between">
                                Data Mahasiswa
                                <p>{{ $mhs_count }}</p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body d-flex justify-content-between">
                                Data Dummy
                                <p></p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body d-flex justify-content-between">
                                Data Dummy
                                <p></p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body d-flex justify-content-between">
                                Data Dummy
                                <p></p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Bar Chart Example
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
        {{-- Footer --}}
        @include('partials.footer')
    </div>
</div>

@endsection