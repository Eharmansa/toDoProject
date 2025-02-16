@extends('panel.layout.app')

@section('content')

    <div class="card">
        <div class="card-header">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
                <!--
            @if(session('errors'))
                <div class="alert alert-success" role="alert">
                    {{session('errors')}}
                </div>
            @endif
                -->

            <h3 class="ms-2">KATEGORİLER</h3>
                <a href="{{route('panel.CreateCategoryPage')}}" class="btn btn-info">Yeni Kategori Oluştur</a>
                <a href="{{route('panel.CreateTaskPage')}}" class="btn btn-info">Yeni Görev Oluştur</a>

        </div>

        <div class="card-body">
            <div class="card">
                <h5 class="card-header">Kategori listesi</h5>

                @if($kategori->first())

                    <div class="table-responsive text-nowrap">
                        <table class="table table">
                            <thead>

                            <tr>
                                <th>Kategori Adı</th>
                                <th>Durum</th>
                                <th>Oluşturulma Tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">

                            @foreach($kategori as $k)

                                <tr>
                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>{{$k->name}}</strong>
                                    </td>
                                    <td >
                                        @if($k->is_active == 1)
                                            Aktif
                                        @else
                                            Pasif
                                        @endif

                                    </td>

                                    <td>{{$k->created_at->diffForHumans()}}</td>

                                    <td>
                                        <a href="{{route('panel.updatePage',$k->id)}}" class="btn btn-warning">Güncelle</a>
                                        <a href="{{route('panel.deleteCategory',$k->id)}}" class="btn btn-danger">Sil</a>
                                        <a href="{{route('panel.TaskIndex',$k->id)}}" class="btn btn-info">Görevler</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-primary m-4" role="alert">
                        Kategori eklemeniz gerekmektedir
                    </div>
                @endif


            </div>
        </div>
    </div>

@endsection
