@extends('panel.layout.app')


@section('content')

    <h1>Create Blade Sayfasındasınız</h1>

    <div class="card-body">
        <form action="{{route('panel.addTask')}}" method="POST">
            @csrf
            <div>
                <label for="formControl" class="form-label">Başlık</label>
                <input type="text" class="form-control" name="title">

                <label for="formControl" class="form-label mt-3">İçerik</label>
                <input type="text" class="form-control" name="content">

                <label for="formControl" class="form-label mt-3">Kategori</label>
                <select class="form-control" name="category">
                    <option selected disabled>Lütfen bir seçim yapınız</option>
                    @foreach($categories as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>

                <label for="formControl" class="form-label mt-3">Durum</label>
                <select class="form-control" name="status">
                    <option disabled value="">Lütfen Seçim Yapınız</option>
                    <option value="0">Yapılmadı</option>
                    <option value="1">Yapılıyor</option>
                    <option value="2">Ertelendi</option>
                    <option value="3">İptal Edildi</option>
                </select>

                <label for="formControl" class="form-label mt-3">Son Tarih</label>
                <input type="datetime-local" class="form-control" name="deadline">

                <button type="submit" class="btn btn-success mt-3">Kaydet</button>

            </div>
        </form>
    </div>

@endsection
