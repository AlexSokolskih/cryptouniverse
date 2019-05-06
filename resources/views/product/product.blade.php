@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Товары</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Название</th>
                            <th scope="col">Цена</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products  as $index=>$product)
                        <tr>
                            <th scope="row">{{ $product->name }}</th>
                            <td>{{ $product->price }}</td>
                            <td><a href="{{ route('bid', $product->id) }}">Отправить заявку</a></td>
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
