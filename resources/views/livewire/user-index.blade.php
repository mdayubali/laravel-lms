<div>
    <table class="w-full table-auto">
     <tr>
         <th class="border px-2 py-2 text-left">Name</th>
         <th class="border px-2 py-2 text-left">Email</th>
     </tr>
    @foreach ($users as $user )
     <tr>
         <td class="border px-2 py-2">{{ $user->name }}</td>
         <td class="border px-2 py-2">{{ $user->email }}</td>
     </tr>
    @endforeach
    </table>

 </div>

