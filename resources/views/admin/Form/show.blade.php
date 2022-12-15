@extends("admin.layouts.app")
@section("content")
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tbody>

                <tr>
                    <th scope="col">Логотип</th>
                    <td>
                    <img src="{{ URL::asset('/Image/'.trim($post->logo, '"'))}}" class="img-thumbnail" width="100" alt="{{$post->logo}}">
                    </td>
                </tr>

                <tr>
                    <th scope="col">Название компаний</th>
                    <td>{{ $post->company_name }}</td>
                </tr>
                <tr>
                    <th scope="col">Ф.И.О директора</th>
                    <td>{{ $post->director_name }}</td>

                </tr>
                <tr>
                    <th scope="col">email</th>
                    <td>{{ $post->email }}</td>
                </tr>
                <tr>
                    <th scope="col">адресс</th>
                    <td>{{ $post->address }}</td>
                </tr>
                <tr>
                    <th scope="col">номер телефона</th>
                    <td>{{ $post->phone_number }}</td>
                </tr>
                <tr>
                    <th scope="col">вебсайт</th>
                    <td>{{ $post->website }}</td>
                </tr>

                </tbody>
            </table>
            <div class="d-flex justify-content-between ">
                <span>
                    <a class=" btn btn-primary btn-dark"  href = "{{route("index")}}">Назад</a>
                    <a class=" btn btn-primary btn-success"  href = "{{ route("form.edit" , $post->id)}}">Изменить</a>
                </span>
                <form action="{{ route("destroy" , $post->id)}}" method="post">
                    @csrf
                    @method("delete")
                    <input type="submit" value="Удалить" class="btn btn-danger">
                </form>
            </div>
        </div>


@endsection
