@extends('admin.layouts.layout')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Клиенты(грузы)</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Главная</a></li>
                    <li class="breadcrumb-item active">Клиенты(грузы)</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

@php
$gridData = [
    'dataProvider' => $dataProvider,
    'paginatorOptions' => [
        'pageName' => 'p'
    ],
    'rowsPerPage' => 10,
    'searchButtonLabel' => 'Найти',
    'resetButtonLabel' => 'Сбросить',
    //'title' => '<a href="'.route('users.create').'" class="btn btn-primary mb-3">Добавить пользователя</a>',
    'useFilters' => true,
    'columnFields' => [
        'id',
        [
            'attribute' => 'name',
            'label' => 'Имя'
        ],
        'email',
        [
            'attribute' => 'created_at',
            'label' => 'Дата создания'
        ],
        [
            'label' => 'Действия', // Optional
            'class' => Itstructure\GridView\Columns\ActionColumn::class, // Required
            'actionTypes' => [
                'edit' => function ($data) {
                    return route('users.edit', ['user' => $data->id]);
                },
                //[
                //    'class' => Itstructure\GridView\Actions\Delete::class, // REQUIRED
                //    'url' => function ($data) {
                //        return route('carriers.destroy', ['carrier' => $data->id]);
                //    },
                //    'htmlAttributes' => [
                //        'target' => '_blank',
                //        'onclick' => 'return window.confirm("Sure to delete?");'
                //    ]
                //]
            ]
        ],

    ]
];
@endphp
@gridView($gridData)

@endsection
