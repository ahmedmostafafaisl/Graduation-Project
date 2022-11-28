@extends('layouts.app')
@section('content')
    <div class="container m-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Paid Mony </th>
                    <th scope="col">Paid Description</th>
                    <th scope="col">Edit Method</th>
                    <th scope="col">Delete Method</th>
                </tr>
            </thead>
            @foreach ($payments as $payment)
                <tbody>
                    <tr>
                        <th scope="row">{{ $payment->id }}</th>
                        <td>{{ $payment->mony_out }}</td>
                        <td>{{ $payment->description }}</td>
                        <td><a href="{{ route('payment.edit', $payment->id) }}" class="btn btn-warning">Edit</a></td>
                        <form method="POST" action="{{ route('payment.destroy', $payment->id) }}">
                            @csrf
                            @method('DELETE')
                            <td><button class="btn btn-danger" name="">Delete</td>
                        </form>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <div class="container m-5">

        <div class="card">
            <h5 class="card-header"> Out Payments </h5>
            <div class="card-body">
                <p class="card-text">Total for out Payments {{ $pays }}</p>
                <a href="{{ route('payment.create') }}" class="btn btn-primary">Add Payment</a>
            </div>
        </div>
    </div>
@endsection
