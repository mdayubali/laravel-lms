<div>
    <table class="w-full table-auto">
     <tr>
         <th class="border px-2 py-2 text-left">Name</th>
         <th class="border px-2 py-2 text-left">Permission</th>
         <th class="border px-2 py-2">Action</th>
     </tr>
    @foreach ($roles as $role )
     <tr>
         <td class="border px-2 py-2">{{ $role->name }}</td>
         <td class="border px-2 py-2">
            @foreach ($role->permissions as $permission )
                <span class="bg-blue-700 px-2 py-2 rounded-full text-sm">{{ $permission->name }}</span>
            @endforeach
         </td>
         <td class="border px-2 py-2">
             <div class="flex items-center justify-center">
                 <a class="mr-1" href="{{ route('role.edit',$role->id) }}">
                     @include('components.icons.edit')
                 </a>

                 <form class="ml-1"  onsubmit="return confirm('are you sure to delete?')"  wire:submit.prevent="roleDelete({{ $role->id }})">
                     <button type="submit">
                         @include('components.icons.delete')
                     </button>
                 </form>
             </div>
         </td>
     </tr>
    @endforeach
    </table>
 </div>
