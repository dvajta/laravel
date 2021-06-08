@extends('admin.layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>+ статья</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Статьи</li>
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
                      <h3 class="card-title">Добавить статью</h3>
                    </div>
                    <form role="form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="title">Название</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Название">
                        </div>
                        <div class="form-group">
                          <label for="description">Краткое описание</label>
                          <textarea rows="3" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Краткое описание"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="content">Контент</label>
                          <textarea rows="6" class="form-control @error('description') is-invalid @enderror" id="content" name="content" placeholder="Контент"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="category_id">Категория</label>
                          <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $id => $category)
                            <option value="{{$id}}">{{$category}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="tags">Теги</label>
                          <select class="select2" multiple="multiple" data-placeholder="Выберите теги" name="tags[]" id="tags" style="width: 100%;">
                            @foreach($tags as $id => $tag)
                            <option value="{{$id}}">{{$tag}}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="thumbnail">Изображение</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                              <label class="custom-file-label" for="thumbnail">Выбрать файл</label>
                            </div>
                          </div>
                        </div>


                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                      </div>
                      </form>
                </div>

        </section>
        <!-- /.content -->

@endsection
