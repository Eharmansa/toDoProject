@extends('panel.layout.app')


@section('content')

    <div class="card-body">
        <div class="card">

            <h5 class="card-header">Görevler</h5>

                <div class="table-responsive text-nowrap">
                    @if($kategori->first())
                        <table class="table table">
                            <thead>

                            <tr>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>Durum</th>
                                <th>Bitiş Tarihi</th>
                                <th>#</th>
                            </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">

                            @foreach($kategori as $k)
                                <tr>

                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>{{$k->title}}</strong>
                                    </td>
                                    <td>{{$k->content}}</td>

                                    <td>
                                        @if($k->status == 0)
                                            Tamamlanmadı
                                        @elseif($k->status == 1)
                                            Yapılıyor
                                        @elseif($k->status == 2)
                                            Ertelendi
                                        @elseif($k->status == 3)
                                            İptal edildi
                                        @endif
                                    </td>

                                    <td>{{$k->deadline}}</td>
                                    <td>
                                        <a href="{{route('panel.TaskEdit',$k->id)}}" class="btn rounded-pill btn-warning">Güncelle</a>
                                        <a href="{{route('panel.TaskDelete',$k->id)}}" class="btn rounded-pill btn-danger" >Sil</a>
                                    </td>
                                </tr>
                            @endforeach



                            </tbody>
                        </table>
                    @else

                        <div class="alert alert-primary" role="alert">
                            Bu kategoride bir görev kayıtlı değil
                        </div>

                    @endif

                </div>
        </div>
    </div>
@endsection
