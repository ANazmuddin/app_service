@include('layout.header')
<!--begin::App Wrapper-->
<div class="app-wrapper">
    <!--begin::Header-->
    @include('layout.navbar')
    <!--end::Header-->
    <!--begin::Sidebar-->
    @include('layout.sidebar')    
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Kendaraan</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jenis Kendaraan</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="card-title mt-1">Data Kendaraan</h3>
                                <a href="{{ route('Kendaraan.create') }}" class="btn btn-success btn-sm ms-auto">Add</a>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Pol</th>
                                            <th>Tahun Kendaraan</th>
                                            <th>No Mesin</th>
                                            <th>No Rangka</th>
                                            <th>Kapasitas Mesin</th>
                                            <th>Transmisi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $row)
                                            <tr class="align-items-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->no_pol }}</td>
                                                <td>{{ $row->tahun_kendaraan }}</td>
                                                <td>{{ $row->no_mesin}}</td>
                                                <td>{{ $row->no_rangka }}</td>
                                                <td>{{ $row->kapasitas_mesin }}</td>
                                                <td>{{ $row->transmisi }}</td>
                                                <td>
                                                    <a href="{{ route('Kendaraan.edit', $row->id_kendaraan) }}" class="btn btn-warning">Edit</a>
                                                    <a href="{{ route('Kendaraan.delete', $row->id_kendaraan) }}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    @include('layout.content')
    <!--end::Footer-->
</div>
@include('layout.footer')