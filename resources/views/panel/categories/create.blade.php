@extends('panel.layout.app')


@section('content')

        <div class="card">
            <div class="card-header">

                <h2>Kategori Oluşturma</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif





            </div>

            <div class="card-body">
                    <form action="{{ route('panel.categoryAdd') }}" method="POST">
                        @csrf

                        <label for="defaultFormControlInput" class="form-label mt-3">Kategori Adı</label>
                        <input type="text" class="form-control" name="category_name" placeholder="Kategori için başlık giriniz" aria-describedby="defaultFormControlHelp">

                        <label for="defaultFormControlInput" class="form-label mt-3">Kategori Durumu</label>
                        <select class="form-select"  name="category_status" aria-label="Default select example">
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                        </select>

                        <button type="submit" class="btn btn-success mt-3">Kaydet</button>
                    </form>
            </div>

        </div>

@endsection
<div class="mb-3">

</div>
