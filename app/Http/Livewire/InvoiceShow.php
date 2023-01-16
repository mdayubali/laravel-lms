<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class InvoiceShow extends Component
{
    public $invoice_id;
    public function render()
    {

        // dd($this->invoice_id);
        $invoice = Invoice::findOrFail($this->invoice_id);
        return view('livewire.invoice-show',[
            'invoice'=> $invoice
        ]);

    }
    public function invoiceDelete($id){
        $invoice_id = Invoice::findOrFail($id);
        $invoice_id->delete();
        flash()->addInfo('Invoice Deleted succussfully');
        return to_route('invoice.index');
    }
}
