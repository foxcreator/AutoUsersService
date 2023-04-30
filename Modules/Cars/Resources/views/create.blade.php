@extends('layouts.app')

@section('content')
<form action="" method="POST">
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="Марка">
        <label for="floatingInput">Марка</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Модель">
        <label for="floatingPassword">Модель</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Год выпуска">
        <label for="floatingPassword">Год выпуска</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="VIN код">
        <label for="floatingPassword">VIN код</label>
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile01">Фото авто</label>
        <input type="file" class="form-control" id="inputGroupFile01">
    </div>
    <button class="btn btn-outline-dark">Добавить</button>
</form>
@endsection
