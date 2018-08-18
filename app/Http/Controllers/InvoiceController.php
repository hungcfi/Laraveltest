<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;
use Shop\Http\Requests\InvoiceRequest;
use Shop\Invoice;
use Shop\Customer;
use Shop\Good;

use DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all Invoices
        $invoices=Invoice::all();
        return view('invoices/index')->with('hd', $invoices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // Create new Invoice
        $invoice = Invoice::create($data);
        return redirect()
            ->route('invoice.show', $invoice->id)
            ->withSuccess('Create invoice success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function show(Invoice $invoice)
    {
           return view('invoices.show')
            ->with('invoice', $invoice);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);
        return view('invoices.edit') 
            ->with('invoice', $invoice);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(InvoiceRequest $request, $id)
    {
        $data = $request->all();
        $invoice = Invoice::find($id);
        $invoice->update($data);
        return redirect()
            ->route('invoice.show', $invoice->id)
            ->withSuccess('Update invoice success');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        return redirect()
            ->route('invoice.index')
            ->withSuccess('Delete invoice success');
    }
}
