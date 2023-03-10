<?php

namespace App\Http\Livewire;

use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class InvoiceIndex extends Component
{
    public function render()
    {
        $invoices = Invoice::paginate(50);
        return view('livewire.invoice-index',[
            'invoices'  => $invoices,
        ]);
    }
    public function invoiceDelete($id){
        $invoice_id = Invoice::findOrFail($id);
        $invoice_id->delete();
        flash()->addInfo('Invoice Deleted succussfully');
        return to_route('invoice.index');
    }
}
