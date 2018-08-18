@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    {!! Form::label('invoice_num', 'Invoice Number') !!}
    <div class="form-controls">
        <input class="form-control" name="invoice_num" type="text" value="{{ old('invoice_num', isset($invoice->invoice_num) ? $invoice->invoice_num : '') }}" id="invoice_num">
    </div>
</div>



<div class="form-group">
    {!! Form::label('date_of_sale', 'Date of Sale') !!}
    <div class="form-controls">
        {!! Form::text('date_of_sale', null, ['class' =>
        'form-control datepicker']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('good_id', 'Good') !!}
    <div class="form-controls">
        <select class="form-control" id="good_id" name="good_id">
            <option value="1">Iphone 5S</option>
            <option value="2">Galaxy S8</option>
            <option value="3">Nokia 76</option>
            <option value="4">Blackberry</option>
        </select>
    </div>
</div>

<div class="form-group">
    {!! Form::label('customer_id', 'Customer') !!}
    <div class="form-controls">
        <select class="form-control" id="customer_id" name="customer_id">
            <option value="1">Hải Vân</option>
            <option value="2">Bình Minh</option>
            <option value="3">Phong Vũ</option>
            <option value="4">Phi Long</option>
        </select>
    </div>




</div>

<div class="form-group">
    {!! Form::label('amount', 'Amount') !!}
    <div class="form-controls">
        {!! Form::text('amount', null, ['class' => 'form-control']) !!}
    </div>
</div>

{!! Form::submit('Save Invoice', ['class' => 'btn btn-primary']) !!}

