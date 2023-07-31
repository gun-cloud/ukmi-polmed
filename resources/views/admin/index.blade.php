@extends('admin.layouts.app')

@section('content')
<div class="container-xxl flex-grwo-1 container-p-y">
    <div class="d-flex">
        <div class="card" style="width: 18rem; margin-right: 10px;">
            <div class="d-flex align-items-center">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Total Anggota Ikhwan</h5>
                        <p class="mb-4">1000</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Lihat Data</a>
                    </div>
                </div>
                <img src="../assets/img/illustrations/man-sitting.png" width="100" style="margin-left: 10px;" />
            </div>
        </div>

        <div class="card" style="width: 18rem; margin-right: 10px;">
            <div class="d-flex align-items-center">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Total Anggota Akwat</h5>
                        <p class="mb-4">2000</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Lihat Data</a>
                    </div>
                </div>
                <img src="../assets/img/illustrations/girl-sitting.png" width="100" style="margin-left: 10px;" />
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="d-flex align-items-center">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Total Tim Mentoring</h5>
                        <p class="mb-4">12</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Lihat Data</a>
                    </div>
                </div>
                <img src="../assets/img/illustrations/man-group.png" width="200" style="margin-left: -70px;" />
            </div>
        </div>
    </div>

</div>


</div>
@endsection
