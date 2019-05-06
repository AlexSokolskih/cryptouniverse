@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Список заявок</div>
                <div class="card-body">

                    @foreach($bids as $index=>$bid)
                        <div style="border-bottom: 2px solid darkred;">
                            <div>{{ $bid->title }}</div>
                            <div>{{ $bid->message }}</div>
                            <div>{{ $bid->product->name }}</div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
