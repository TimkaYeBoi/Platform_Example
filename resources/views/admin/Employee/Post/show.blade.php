@extends("admin.layouts.app")
@section("content")
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <tbody>
            <tr>
                <th scope="col">Фамилия</th>
                <td>{{ $employee->Last_Name }}</td>
            </tr>
            <tr>
                <th scope="col">Имя</th>
                <td>{{ $employee->First_Name }}</td>
            </tr>
            <tr>
                <th scope="col">Отчество</th>
                <td>{{ $employee->Patronymic }}</td>
            </tr>
            <tr>
                <th scope="col">Паспорт номер</th>
                <td>{{ $employee->Passport_id }}</td>
            </tr>
            <tr>
                <th scope="col">Место работы</th>
                <td>{{ $employee->company->company_name}}</td>
            </tr>
            <tr>
                <th scope="col">Должность</th>
                <td>{{ $employee->Job_title}}</td>
            </tr>
            <tr>
                <th scope="col">Номер телефона</th>
                <td>{{ $employee->Phone_number}}</td>
            </tr>
            <tr>
                <th scope="col">Адресс проживания</th>
                <td>{{ $employee->Address}}</td>
            </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-between ">
                <span>
                    <a class=" btn btn-primary btn-dark"  href = "{{route("index")}}">Назад</a>
                    <a class=" btn btn-primary btn-success"  href = "{{ route("form.edit" , $employee->id)}}">Изменить</a>
                </span>
            <form action="{{ route("destroy" , $employee->id)}}" method="post">
                @csrf
                @method("delete")
                <input type="submit" value="Удалить" class="btn btn-danger">
            </form>
        </div>
    </div>


@endsection
