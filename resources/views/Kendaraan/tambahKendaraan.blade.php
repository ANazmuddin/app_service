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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kendaraan</li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
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
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Masukkan Data Kendaraan</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            <form class="needs-validation" action="{{ route('Kendaraan.store') }}" method="post" novalidate>
                                <!--begin::Body-->
                                @csrf
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">No Pol</label>
                                            <input type="text" class="form-control" name="no_pol"
                                                placeholder="Masukkan Nomor Polisi" required
                                            />
                                            <div class="invalid-feedback">No Polisi</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Tahun Kendaraan</label>
                                            <input type="text" class="form-control" name="tahun_kendaraan"
                                                placeholder="Masukkan Tahun Kendaraan" required
                                            />
                                            <div class="invalid-feedback">Tahun Kendaraan</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">No Mesin</label>
                                            <input type="text" class="form-control" name="no_mesin"
                                                placeholder="Masukkan Nomor Mesin" required
                                            />
                                            <div class="invalid-feedback">No Mesin</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">No Rangka</label>
                                            <input type="text" class="form-control" name="no_rangka"
                                                placeholder="Masukkan Nomor Rangka" required
                                            />
                                            <div class="invalid-feedback">Isi No Rangka</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="pilihCC" class="form-label">Kapasitas Mesin</label>
                                            <select class="form-select" id="pilihCC" name="kapasitas_mesin" required>
                                                <option selected disabled value="">Pilih Kapasitas Mesin</option>
                                                <option>50</option>
                                                <option>110</option>
                                                <option>125</option>
                                                <option>150</option>
                                                <option>200</option>
                                                <option>250</option>
                                                <option>300</option>
                                                <option>400</option>
                                                <option>500</option>
                                                <option>600</option>
                                                <option>750</option>
                                                <option>1000</option>
                                                <option>1200</option>
                                                <option>1300</option>
                                                <option>1500</option>
                                                <option>1800</option>
                                                <option>2000</option>
                                                <option>2400</option>
                                                <option>2500</option>
                                                <option>3000</option>
                                                <option>3500</option>
                                                <option>4000</option>
                                                <option>5000</option>
                                                <option>7000</option>
                                                <option>10000</option>
                                            </select>
                                            <div class="invalid-feedback">Kapasitas Mesin</div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="row mb-3 w-100">
                                                <legend class="col-form-label col-sm-3 pt-0">Transmisi</legend>
                                                <div class="col-sm-10 d-flex align-items-center mt-2">
                                                    <div class="form-check me-3">
                                                        <input
                                                            class="form-check-input"
                                                            type="radio"
                                                            name="transmisi"
                                                            id="manual"
                                                            value="Manual"
                                                            required
                                                        />
                                                        <label class="form-check-label" for="manual">Manual</label>
                                                        <div class="invalid-feedback position-absolute">Pilih Data</div>
                                                    </div>
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input"
                                                            type="radio"
                                                            name="transmisi"
                                                            id="otomatis"
                                                            value="Otomatis"
                                                            required
                                                            />
                                                        <label class="form-check-label" for="otomatis">Matic</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                <!--end::Footer-->
                            </form>
                            <!--end::Form-->
                            <!--start::Script Validation-->
                            <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (() => {
                                    'use strict';

                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    const forms = document.querySelectorAll('.needs-validation');

                                    // Loop over them and prevent submission
                                    Array.from(forms).forEach((form) => {
                                        form.addEventListener(
                                            'submit',
                                            (event) => {
                                                if (!form.checkValidity()) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }

                                                form.classList.add('was-validated');
                                            },
                                            false,
                                        );
                                    });
                                })();
                            </script>
                            <!--end::Script Validation-->
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