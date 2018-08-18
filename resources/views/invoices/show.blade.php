@extends('layouts.master')

@section('header')
	<a href="{{ url('/invoices') }}">Back to overview</a>
	<h2>
		{{ $invoice->invoice_num }}
	</h2>
	<a href="{{ url('invoices/'.$invoice->id.'/edit') }}">
		<span class="glyphicon glyphicon-edit"></span> 
		Edit
	</a>
	<a href="{{ url('invoices/'.$invoice->id.'/delete') }}">
	<span class="glyphicon glyphicon-trash"></span> 
	Delete
	</a>
	<p>Last edited: {{ $invoice->updated_at->diffForHumans() }}</p>
@stop

@section('content')
	<p>Date of Sale: {{ $invoice->date_of_sale }}</p>
	<p>
	@if ($invoice->good)
		Good:
		{{ link_to('invoices/goods/'.$invoice->good->good_name, 
		$invoice->good->good_name) }}
	@endif
	</p>
@stop
