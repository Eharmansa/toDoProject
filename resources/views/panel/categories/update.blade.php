@extends('panel.layout.app')


@section('content')

    <div class="card">
        <div class="card-header">
            Başlık
        </div>

        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card-body">
            <form action="{{ route('panel.updateCategory') }}" method="POST">
            @csrf
                <input type="hidden"  name = "catId" value={{$ci->id}} >

                <label for="name" class="form-label">Kategori Adı :</label>
                <input type="text" class="form-control" name="cat_name" value="{{$ci->name}}">

                <label for="name" class="form-label mt-3">Kategori Durumu :</label>
                <select class="form-control" name="cat_status">
                    <option value="1" {{ $ci->is_active == 1 ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ $ci->is_active == 0 ? 'selected' : '' }}>Pasif</option>
                </select>

                <button type="submit" class="btn btn-success mt-3">Kaydet</button>
            </form>

        </div>
    </div>




@endsection()
