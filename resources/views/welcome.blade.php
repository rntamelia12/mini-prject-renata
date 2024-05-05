@extends('layouts.app')

@section('content')
    <div class="biodata mt-5 justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5 text-center">
                    <img class="w-50 mb-4 rounded-circle" src="{{ Vite::asset('resources/images/DCIM20240401.jpeg') }}" alt="">
                    <p class="mb-0 fs-5">Renata Sava Amelia</p>
                    <p class="mb-0 fs-5">Telkom University Surabaya</p>
                    <p class="mb-0 fs-5">Prodi Sistem Informasi</p>
                </div>
                <div class="col-7">
                    <h1>KEMAMPUAN</h1>
                    <div class="kemampuan-content">
                        <p class="mb-1">Komunikasi</p>
                        <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 12px">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="kemampuan-content mt-3">
                        <p class="mb-1">Bahasa Inggris</p>
                        <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 12px">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="kemampuan-content mt-3">
                        <p class="mb-1">Bahasa Indonesia</p>
                        <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 12px">
                            <div class="progress-bar" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="kemampuan-content mt-3">
                        <p class="mb-1">Komputer</p>
                        <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100" style="height: 12px">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
