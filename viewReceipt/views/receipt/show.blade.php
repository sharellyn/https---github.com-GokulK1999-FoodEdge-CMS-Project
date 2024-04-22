@extends('layout.app')

@section('body')
    <h1 class="mb-0">Receipt Details</h1>
    <hr />

    <!-- Wrap the receipt details content with the div element -->
    <div id="receiptDetails">
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $receipt->name }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Item</label>
                <input type="text" name="item" class="form-control" placeholder="Item" value="{{ $receipt->item }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Total Paid</label>
                <input type="text" name="totalPaid" class="form-control" placeholder="Total Paid" value="{{ $receipt->totalPaid }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description" readonly>{{ $receipt->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Paid</label>
                <input type="text" name="paid" class="form-control" placeholder="Paid" value="{{ $receipt->paid ? 'Yes' : 'No' }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Created At</label>
                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $receipt->created_at }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $receipt->updated_at }}" readonly>
            </div>
        </div>
    </div>
    
    <!-- Print button -->
    <button id="printButton" class="btn btn-primary">Print Receipt</button>

    <!-- Include html2pdf library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <script>
        document.getElementById('printButton').addEventListener('click', function() {
            // Get the receipt details section
            const receiptDetails = document.getElementById('receiptDetails');

            // Use html2pdf to convert HTML to PDF
            html2pdf().from(receiptDetails).save();
        });
    </script>
@endsection
