@extends("admin.layouts.app")
@section("content")
    <div class="container">
        <div class="row auto">
            <form action="{{ route("user.edit" , $employee->id)}}" method="post" class="card p-2">
                @csrf
                @method("post")
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Данные сотрудника</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="Last_Name" class="form-label">Фамилия</label>
                                <input type="text" class="form-control" name="Last_Name" required value="{{$employee->Last_Name}}">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="First_name" class="form-label">Имя</label>
                                <input type="text" class="form-control" name="First_name" required  value="{{$employee->First_Name}}">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="Patronymic" class="form-label">Отчество</label>
                                <input type="text" class="form-control" name="Patronymic" required  value="{{$employee->Patronymic}}">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="Passport_id" class="form-label">Данные паспорта</label>
                                <input type="text" class="form-control" name="Passport_id" required  value="{{$employee->Passport_id}}">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="Job_title" class="form-label">Должность работы</label>
                                <input type="Job_title" class="form-control" name="Job_title" required  value="{{$employee->Job_title}}">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="Address" class="form-label">Адресс проживания</label>
                                <input type="text" class="form-control" name="Address" placeholder="1234 Main St" required  value="{{$employee->Address}}">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label  class="form-label">Номер телефона</label>
                                <input type="text" class="form-control" name="phone_number" value="{{$employee->Phone_number}}" required>
                                <div class="invalid-feedback">
                                    Введите номер телефона
                                </div>
                            </div>
                            <hr class="my-4">
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Обновить данные
                                <span class="glyphicon glyphicon-left" aria-hidden="true"></span></button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
@endsection
