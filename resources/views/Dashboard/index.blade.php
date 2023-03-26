@extends('Dashboard.layout')
@section('content')
    @for ($i = 0; $i < 1; $i++)
        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col">
                            <span>Pegawai</span>
                            <h3 class="card-title text-nowrap mb-1 mt-3">120</h3>
                        </div>
                        <div class="col align-self-center">
                            <i class='bx bxs-user bx-lg'></i>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    @endfor
@endsection
