@extends('layout.app')

@section('body')
    <h1 class="mb-0">Add Receipt</h1>
    <hr />
    <form action="{{ route('receipt.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="item" class="form-control" placeholder="Item">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="totalPaid" class="form-control" placeholder="Total Paid">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
