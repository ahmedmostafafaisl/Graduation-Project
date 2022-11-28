@extends('layouts.app')
@section('content')
    <div class="container m-4">
        <form action="{{ route('payment.update', $single->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label">Pay Amount</label>
                <input type="number" value="{{ $single->mony_out }}" name="mony_out" class="form-control">

            </div>
            <div class="mb-3">
                <label class="form-label">Discreption</label>
                <input type="text" value="{{ $single->description }}" name="description" class="form-control">
            </div>
            <div class="mb-3 form-check">


            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
@endsection
