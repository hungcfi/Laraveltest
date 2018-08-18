<?php

namespace Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class InvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() 
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $invoiceID = Request::route('id');
        //dd($catId);
        return [
            'invoice_num' => 'required|max:255|unique:invoices,invoice_num,' . $invoiceID,
                'date_of_sale' => 'required|date:"YY-mm-dd"',
                'good_id' => 'required|numeric',
                'customer_id' => 'required|numeric',
                'amount' => 'required|numeric'

        ];
    }

    public function messages()
    {
        return [
            'required' => 'Cột :attribute là bắt buộc.'
        ];
    }
}
