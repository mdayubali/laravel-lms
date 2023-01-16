<div>
    <table class="w-full table-auto">
     <tr>
         <th class="border px-2 py-2">ID</th>
         <th class="border px-2 py-2">User</th>
         <th class="border px-2 py-2">Due Date</th>
         <th class="border px-2 py-2">Amount</th>
         <th class="border px-2 py-2">Paid</th>
         <th class="border px-2 py-2">Due</th>
         <th class="border px-2 py-2">Action</th>
     </tr>
    @foreach ($invoices as $invoice )
     <tr>
         <td class="border px-2 py-2">{{ $invoice->id }}</td>
         <td class="border px-2 py-2">{{ $invoice->user->name }}</td>
         <td class="border px-2 py-2 text-center">{{ date('F j,Y', strtotime($invoice->created_at)) }}</td>
         <td class="border px-2 py-2 text-center">{{ $invoice->amount()['total']}}</td>
         <td class="border px-2 py-2 text-center">{{ $invoice->amount()['paid']}}</td>
         <td class="border px-2 py-2 text-center">{{ $invoice->amount()['due']}}</td>
         <td class="border px-2 py-2">
             <div class="flex items-center justify-center">
                 <a href="{{ route('invoice.edit',$invoice->id) }}">
                     @include('components.icons.edit')
                 </a>
                 <a class="px-2" href="{{ route('invoice.show',$invoice->id) }}">
                     @include('components.icons.view')
                 </a>
                 <form onsubmit="return confirm('are you sure to delete?')"  wire:submit.prevent="invoiceDelete({{ $invoice->id }})">
                     <button type="submit">
                         @include('components.icons.delete')
                     </button>
                 </form>
             </div>
         </td>
     </tr>
    @endforeach
    </table>

    <div class="mt-4">
     {{ $invoices->links() }}
    </div>
 </div>
