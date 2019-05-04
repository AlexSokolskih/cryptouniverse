@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Товары<div class="float-right"><a class="btn btn-success" href="{{ route('newproduct') }}" role="button">новый товар</a></div></div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Название</th>
                            <th scope="col">Цена</th>
                            <th scope="col">Видимость</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">товар1</th>
                            <td>10000</td>
                            <td>видно</td>
                            <td><a href="/">удалить</a></td>
                            <td><a href="/">редактировать</a></td>
                        </tr>
                        <tr>
                            <th scope="row">йцву выас вввыаваыаыва</th>
                            <td>10000</td>
                            <td>невидно</td>
                            <td><a href="/">удалить</a></td>
                            <td><a href="/">редактировать</a></td>
                        </tr>
                        <tr>
                            <th scope="row">йф а</th>
                            <td>10000</td>
                            <td>видно</td>
                            <td><a href="/">удалить</a></td>
                            <td><a href="/">редактировать</a></td>
                        </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
