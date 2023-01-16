<div>

        <h2 class="text-center text-2xl bg-blue-400 py-2 text-white">Invoice Details</h2>

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
            <tr>
                <td class="border px-2 py-2 text-center">{{ $invoice->id }}</td>
                <td class="border px-2 py-2 text-center">{{ $invoice->user->name }}</td>
                <td class="border px-2 py-2 text-center">{{ date('F j,Y', strtotime($invoice->created_at)) }}</td>
                <td class="border px-2 py-2 text-center">{{ $invoice->amount()['total']}}</td>
                <td class="border px-2 py-2 text-center">{{ $invoice->amount()['paid']}}</td>
                <td class="border px-2 py-2 text-center">{{ $invoice->amount()['due']}}</td>
                <td class="border px-2 py-2">
                    <div class="flex items-center justify-center">

                        <a class="px-2" href="{{ route('invoice.show',$invoice->id) }}">
                            @include('components.icons.pdf')
                        </a>

                    </div>
                </td>
            </tr>
         </table>
</div>
