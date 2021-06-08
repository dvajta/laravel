@extends('admin.layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование клиента</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">{{ $user->name }}</li>
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
                      <h3 class="card-title">Клиент "{{ $user->name }}"</h3>
                    </div>
                    <form role="form" method="post" action="{{ route('users.update', ['user' => $user->id]) }}">
                      @csrf
                      @method('PUT')
                      <div class="card-body">
                        <div class="form-group">
                          <label for="name">Имя</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                          <label for="middle_name">Отчество</label>
                          <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="middle_name" name="middle_name" value="{{ $user->middle_name }}">
                        </div>
                        <div class="form-group">
                          <label for="surname">Фамилия</label>
                          <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" value="{{ $user->surname }}">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                          <label for="phone">Телефон</label>
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $user->phone }}">
                        </div>


                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                      </div>
                      </form>
                </div>

        </section>
        <!-- /.content -->

@endsection
