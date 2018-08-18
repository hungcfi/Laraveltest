@extends('layouts.master')
@section('header')
	@if(isset($good))
		<a href="{{url('/')}}" >Back to the overview</a>
	@endif
	<h2>
	  All @if (isset($good)) {{$good->good_name}} @endif Invoices
	  <a href="{{url('invoices/create')}}"class="btn btn-primary pull-right">
	  	Add a new Invoice
	  </a>
	</h2>
	  
@stop
@section('content')


 <table class="table table-border">
 	<thead>
 		<th>ID</th>
 		<th>Invoice Number</th>
 		<th>Date of Sale</th>
 		<th>Good name</th>
 		<th>Customer</th>
 		<th>Amount</th>
 		<th colspan="2">Action</th>
 	</thead>
 	<tbody>
 		@foreach ($hd as $invoice)
 		<tr>
 			<td>{{$invoice->id}}</td>
 			<td>{{$invoice->invoice_num}}</td>
 			<td>{{$invoice->date_of_sale}}</td>
 			<td><a href="/invoices/goods/{{$invoice->good->good_name}}">{{$invoice->good->good_name}}</a></td>
 			<td>{{$invoice->customer->cus_name}}</td>
 			<td>{{$invoice->amount}}</td>
 			<td><a class="btn btn-warning" href="{{route('invoice.edit', $invoice->id)}}">Edit</a></td>
 			
 			<td>
				<form action="{{route('invoice.destroy', $invoice->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
					<input type="hidden" name="_method" value="DELETE">
    				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button type="submit" class="btn btn-danger">Delete</a>
				</form>
			</td>

 		</tr>
 		@endforeach
 	</tbody>
 </table>
@endsection