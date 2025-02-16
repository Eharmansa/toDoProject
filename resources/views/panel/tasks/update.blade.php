@extends('panel.layout.app')



@section('content')

    <div class="card">
        <div class="card-header">

            <h2>Görev Düzenleme</h2>

        </div>

        <div class="card-body">
            <form action="{{route('panel.TaskUpdate',$task->id)}}" method="POST">
                @csrf

                <input type="hidden"  name = "task_id" value={{$task->id}}>
                <input type="hidden"  name = "cat_id" value={{$task->category_id}}>

                <label for="defaultFormControlInput" class="form-label mt-3">Kategori Adı</label>
                <input type="text" class="form-control" name="task_title" value="{{$task->title}}" aria-describedby="defaultFormControlHelp">

                <label for="defaultFormControlInput" class="form-label mt-3">İçerik</label>
                <input type="text" class="form-control" name="task_content" value="{{$task->content}}" aria-describedby="defaultFormControlHelp">

                <label for="defaultFormControlInput" class="form-label mt-3">Kategori Durumu</label>
                <select class="form-select"  name="task_status" aria-label="Default select example">
                    <option value="0">Tamamlanmadı</option>
                    <option value="1">Yapılıyor</option>
                    <option value="2">Ertelendi</option>
                    <option value="3">İptal Edildi</option>
                </select>

                <label for="defaultFormControlInput" class="form-label mt-3">Deadline</label>
                <input type="datetime-local" class="form-control" name="task_datetime" value="{{$task->deadline}}" aria-describedby="defaultFormControlHelp">

                <button type="submit" class="btn btn-success mt-3">Güncelle</button>
            </form>
        </div>

    </div>

@endsection
