@extends('layouts.app')
@section('content')
    <div class="container m-5">

        <div class="card">
            <h5 class="card-header"> Mony in </h5>
            <div class="card-body">
                <p class="card-text">Total for incoms mony "اجمالي البيع " {{ $incoms }}</p>
                {{-- <a href="{{ route('payment.create') }}" class="btn btn-primary">Add Payment</a> --}}
            </div>
        </div>
    </div>
    <div class="container m-5">

        <div class="card">
            <h5 class="card-header"> Mony out </h5>
            <div class="card-body">
                <p class="card-text">Total for return mony "اجمالي ما تم دفعة في المرتجع " {{ $outcoms }}</p>
                {{-- <a href="{{ route('payment.create') }}" class="btn btn-primary">Add Payment</a> --}}
            </div>
        </div>
    </div>

    {{-- for net profit --}}
    <div class="container m-5">
        <div class="card">
            <h5 class="card-header"> Net profit </h5>
            <div class="card-body">
                <p class="card-text">Total For Net profit "صافي الربع بعد البيع والمرتجع " {{ $net }}</p>

            </div>
        </div>
    </div>
    {{-- for remainder --}}
    <div class="container m-5">
        <div class="card">
            <h5 class="card-header"> Remainder </h5>
            <div class="card-body">
                <p class="card-text">Total Remainder 'المتبقي بعد الدفع ' {{ $remainder }}</p>

            </div>
        </div>
    </div>
    <div class="container m-5">

        <div class="card">
            <h5 class="card-header"> Other Payments</h5>
            <div class="card-body">
                <p class="card-text">Total for Other Payments "المصاريف الخارجية" {{ $otherPayments }}</p>
                <a href="{{ route('payment.index') }}" class="btn btn-primary">Detailes for Other Payments</a>
            </div>
        </div>
    </div>
@endsection
