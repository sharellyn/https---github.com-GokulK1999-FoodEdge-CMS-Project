@extends('layout.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Receipts</h1>
        <a href="{{ route('receipt.create') }}" class="btn btn-primary">Add Receipt</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Item</th>
                <th>Total Paid</th>
                <th>Description</th>
                <th>Paid</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($receipt->count() > 0)
                @foreach($receipt as $receipt)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $receipt->name }}</td>
                        <td class="align-middle">{{ $receipt->item }}</td>
                        <td class="align-middle">{{ $receipt->totalPaid }}</td>
                        <td class="align-middle">{{ $receipt->description }}</td>
                        <td class="align-middle">{{ $receipt->paid ? 'Yes' : 'No' }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('receipt.show', $receipt->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('receipt.edit', $receipt->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('receipt.destroy', $receipt->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">No receipts found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
