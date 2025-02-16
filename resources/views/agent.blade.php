@extends('panel.layout.app')

@section('content')

    <div class="container d-flex justify-content-center">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset('assets/images/win_icon.png') }}" class="card-img-top img-fluid w-50 mx-auto d-block mt-3" alt="Windows Icon">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title">Windows</h5>
                        <p class="card-text flex-grow-1">Windows işletim sistemleri için bilgi toplama agent'ı</p>
                        <a href="{{ asset('agent/windows.zip') }}" download class="btn btn-primary mt-auto">Dosyayı İndir</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset('assets/images/linux_icon.png') }}" class="card-img-top img-fluid w-50 mx-auto d-block mt-3" alt="Linux Icon">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title">Ubuntu</h5>
                        <p class="card-text flex-grow-1">Linux işletim sistemleri için bilgi toplama agent'ı</p>
                        <a href="{{ asset('agent/Linux_Sistem_Bilgi.zip') }}" download class="btn btn-primary mt-auto">Dosyayı İndir</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ asset('assets/images/mac_icon.png') }}" class="card-img-top img-fluid w-50 mx-auto d-block mt-3" alt="MacOS Icon">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title">MacOS</h5>
                        <p class="card-text flex-grow-1">MacOS işletim sistemleri için bilgi toplama agent'ı.</p>
                        <div class="alert alert-danger mt-auto" role="alert">
                            Mevcut değil
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
