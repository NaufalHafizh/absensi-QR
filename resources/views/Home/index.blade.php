@extends('Templating.layout')
@section('container')
    <div class="text-center">
        <div class="row d-flex justify-content-center">
            <div class="col-7">
                <h1>Silahkan Scan QR</h1>
                @if (session()->has('berhasil'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span>
                            {{ session('berhasil') }}
                        </span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('store') }}" method="POST" id="form">
                    @csrf
                    <input hidden type="text" id="id_pegawai" name="id_pegawai">
                </form>
                <video id="preview" class="rounded-2"></video>
            </div>
        </div>
    </div>
@endsection
