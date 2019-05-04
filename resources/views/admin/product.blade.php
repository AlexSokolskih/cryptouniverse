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
                        @foreach($products  as $index=>$product)
                            <tr>
                                <th scope="row">{{ $product->name }}</th>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->hidden }}</td>
                                <td><a href="{{ route('deleteproduct', $product) }}">удалить</a></td>
                                <td><a href="{{ route('editproduct', $product) }}">редактировать</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
