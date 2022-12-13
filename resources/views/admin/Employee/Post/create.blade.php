@extends("admin.layouts.app")
@section("content")
    <div class="container">
        <div class="row auto">
            <form action="{{ route("user.store") }}" method="post" class="card p-2">
                @csrf
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Данные сотрудника</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="Last_Name" class="form-label">Фамилия</label>
                                <input type="text" class="form-control" name="Last_Name" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="First_Name" class="form-label">Имя</label>
                                <input type="text" class="form-control" name="First_Name" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="Patronymic" class="form-label">Отчество</label>
                                <input type="text" class="form-control" name="Patronymic" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="Passport_id" class="form-label">Данные паспорта</label>
                                <input type="text" class="form-control" name="Passport_id" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div>
                                <label  class="form-label">Место работы</label>
                                <select name = "company_name" class="form-select" aria-label="Default select example" required>
                                    <option value="">---Please select---</option>
                                    @foreach($companies as $company)
                                        <option name="company_id" value="{{$company->id}}">{{$company->company_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="Job_title" class="form-label">Должность работы</label>
                                <input type="Job_title" class="form-control" name="Job_title" required>

                            </div>

                            <div class="col-sm-6">
                                <label for="Address" class="form-label">Адресс проживания</label>
                                <input type="text" class="form-control" name="Address" placeholder="1234 Main St" required>

                            </div>
                            <div class="col-sm-6">
                                <label  class="form-label">Номер телефона</label>
                                <input type="text" class="form-control" name="phone_number" value="+998" required>
                                <div class="invalid-feedback">
                                    Введите номер телефона
                                </div>
                            </div>
                            <hr class="my-4">
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Создать
                                <span class="glyphicon glyphicon-left" aria-hidden="true"></span></button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
@endsection

