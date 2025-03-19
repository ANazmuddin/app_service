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
              <div class="col-sm-6"><h3 class="mb-0">Jenis kendaraan</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                      <h3 class="card-title m-right">Data Keseluruhan Jenis Kendaraan</h3>
                      <a href="{{route('jnsKendaraan.create')}}" class="btn btn-primary">Tambah</a>
                  </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jenis Kendaraan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$row->nm_jns_kendaraan}}</td>
                                        <td>
                                            <a href="{{route('jnsKendaraan.edit',$row->id_jns_kendaraan)}}" class="btn btn-warning btn-sm">Update</a>
                                            <a href="{{route('jnsKendaraan.delete',$row->id_jns_kendaraan)}}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
              </div>
          </div>

          </div>
        </div>

        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">

          </div>
</section>
</main>
      <!--end::App Main-->
      <!--begin::Footer-->
      @include('layout.footers')
      

      <!--end::Footer-->
    </div>
    @include('layout.script')