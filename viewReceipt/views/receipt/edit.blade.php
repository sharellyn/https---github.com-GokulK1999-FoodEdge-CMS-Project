@extends('layout.app')

@section('body')
    <h1 class="mb-0">Edit Receipt</h1>
    <hr />
    <form action="{{ route('receipt.update', $receipt->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $receipt->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Item</label>
                <input type="text" name="item" class="form-control" placeholder="Item" value="{{ $receipt->item }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Total Paid</label>
                <input type="text" name="totalPaid" class="form-control" placeholder="Total Paid" value="{{ $receipt->totalPaid }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description" >{{ $receipt->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Paid</label>
                <select class="form-select" name="paid">
                    <option value="1" @if($receipt->paid) selected @endif>Yes</option>
                    <option value="0" @if(!$receipt->paid) selected @endif>No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
