@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Заявка администраторам</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('savebid') }}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Товар</label>
                            <div class="col-md-6">
                                <label class="col-form-label text-md-right">{{  $product->name }}</label>
                                <input type="hidden" value="{{ $product->id }}" name="product">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Заголовок</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">Текст заявки</label>
                            <div class="col-md-6">
                                <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" autofocus>aa</textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Отправить
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
