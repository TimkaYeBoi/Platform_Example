@extends("admin.layouts.app")
@section("content")
    <div class="align-self-center">
        <h3>Вы уверены что хотите удалить данные?</h3>
        <div class="card-body">
        <span>
            <a class=" btn btn-primary btn-dark"  href = "{{route("index")}}">Назад</a>
        </span>
        <form action="{{ route("destroy" , $post->id)}}" method="post">
            @csrf
            @method("delete")
            <input type="submit" value="Удалить" class="btn btn-danger">
        </form>
        </div>
    </div>
@endsection
