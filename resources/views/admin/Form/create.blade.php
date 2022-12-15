@extends("admin.layouts.app")
@section("content")
    <div class="container">
        <div class="row g-5">
            <form action="{{ route("form.store") }}" method="post" class="card p-2" enctype="multipart/form-data">
                @csrf
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Данные компании</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                            <div class="col-6">
                                <label for="logo" class="form-label">Логотип компании</label>
                                <input type="file" name="logo" id="logo" required>
                            </div>

                            <div class="col-12">
                                <label for="company_name" class="form-label">Название компании</label>
                                <input type="text" class="form-control" name="company_name" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="director_name" class="form-label">Имя руководителя</label>
                                <input type="text" class="form-control" name="director_name" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="address" class="form-label">Адресс</label>
                                <input type="text" class="form-control" name="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label  class="form-label">Номер телефона</label>
                                <input type="text" class="form-control" name="phone_number" value="+998" required>
                                <div class="invalid-feedback">
                                    Введите номер телефона
                                </div>
                            </div>

                            <div class="col-12">
                                <label  class="form-label">Вебсайт</label>
                                <input type="text" class="form-control" name="website" placeholder="example.com"  required>
                                <div class="invalid-feedback">
                                    Введите вебсайт
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
