@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1>Список сотрудников</h1>
            <h2>
                <a  class="btn btn-warning" href="{{route("user.create")}}">Create</a>
            </h2>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Отчество</th>
                    <th scope="col">Место работы</th>
                    <th scope="col">Должность</th>
                    <th scope="col">Номер телефона</th>
                    <th scope="col">Адресс</th>
                    <th scope="col">Данные пасспорта</th>
                    <th scope="col">действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employee as $employee)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $employee->Last_Name}}</td>
                        <td>{{ $employee->First_Name }}</td>
                        <td>{{ $employee->Patronymic }}</td>
                        <td>{{ $employee->company->company_name}}</td>
                        <td>{{ $employee->Job_title }}</td>
                        <td>{{ $employee->Phone_number }}</td>
                        <td>{{ $employee->Address }}</td>
                        <td>{{ $employee->Passport_id }}</td>
                        <td>
                            <div>
                                <a  href="{{route("user.show" , ['employee'=>$employee->id])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="dark" class="bi bi-eye-fill"  viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </a>
                                <a  href="{{route("user.edit" , ['employee'=>$employee->id])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                    </svg>
                                </a>
                                <a href="{{route("user.delete" , ['employee'=>$employee->id])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
