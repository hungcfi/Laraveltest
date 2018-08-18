@extends('layouts.master')

@section('header')
	<h2>Edit a Invoice</h2>
@stop
@section('content')
	{!! Form::model($invoice, ['url' => '/invoices/'.$invoice->id, 'method' => 'put']) !!} 
	@include('partials.forms.invoice')  
	{!! Form::close() !!}
@stop

