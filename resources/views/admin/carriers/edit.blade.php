@extends('admin.layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование водителя</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">{{ $carrier->name }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Водитель "{{ $carrier->name }}"</h3>
                    </div>
                    <form role="form" method="post" action="{{ route('carriers.update', ['carrier' => $carrier->id]) }}">
                      @csrf
                      @method('PUT')
                      <div class="card-body">
                        <div class="form-group">
                          <label for="name">Имя</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="name" name="name" value="{{ $carrier->name }}">
                        </div>
                        <div class="form-group">
                          <label for="middle_name">Отчество</label>
                          <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="middle_name" name="middle_name" value="{{ $carrier->middle_name }}">
                        </div>
                        <div class="form-group">
                          <label for="surname">Фамилия</label>
                          <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" value="{{ $carrier->surname }}">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $carrier->email }}">
                        </div>
                        <div class="form-group">
                          <label for="phone">Телефон</label>
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $carrier->phone }}">
                        </div>
                        <div class="form-group">
                          <label for="city">Город</label>
                          <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ $carrier->city }}">
                        </div>
                        <div class="form-group">
                          <label for="birthday">Дата рождения</label>
                          <input type="text" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ $carrier->birthday }}">
                        </div>
                        <div class="form-group">
                          <label for="driver_license">Водительское удостоверение</label>
                          <input type="text" class="form-control @error('driver_license') is-invalid @enderror" id="driver_license" name="driver_license" value="{{ $carrier->driver_license }}">
                        </div>
                        <div class="form-group">
                          <label for="reg_certificate">Регистрационный номер</label>
                          <input type="text" class="form-control @error('reg_certificate') is-invalid @enderror" id="reg_certificate" name="reg_certificate" value="{{ $carrier->reg_certificate }}">
                        </div>
                        <div class="form-group">
                          <label for="insurance">Страховка</label>
                          <input type="text" class="form-control @error('insurance') is-invalid @enderror" id="insurance" name="insurance" value="{{ $carrier->insurance }}">
                        </div>

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                      </div>
                      </form>
                </div>

        </section>
        <!-- /.content -->

@endsection
