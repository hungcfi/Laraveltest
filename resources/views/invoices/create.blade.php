@extends('layouts.master')

@section('header')
	<h2>Add a new invoice</h2>
@stop
@section('content')
	{!! Form::open(['url' => '/invoices']) !!}
		@include('partials.forms.invoice')
	{!! Form::close() !!}
@stop   
