@extends('layout')

@section('title', 'List of customer\'s data')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col">
                animals
            </div>
            <div class="col">
                workers
            </div>
            <div class="col">
                food
            </div>
        </div>
        @foreach($customerList as $customer)

        <div class="row">
            <div class="col">
                {{ $customer->animals }}
            </div>
            <div class="col">
                {{ $customer->workers }}
            </div>
            <div class="col">
                {{ $customer->food }}
            </div>
        </div>
        @endforeach
    </div>
@endsection
