<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Galery') }}
        </h2>
    </x-slot>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-full mx-auto">
        <table id="myTable" class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
            <a href="{{ route('galery.create') }}" class="bg-slate-800 p-2 inline-block ml-7 mb-7 rounded-lg text-white">Tambah Data</a>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Datagorden_id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                 <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $dt->id }}
                    </th>
                    <td class="px-10 py-4">
                        {{ $dt->datagorden->judul }}
                    </td>
                    <td class="py-4 px-">
                        <img src="{{ asset('/storage/images/'.$dt->image) }}" alt="" class="w-20">
    
                    </td>
                    <td class="px-2 py-4 flex justify-center">
                        <a href="{{ route('galery.edit', $dt->id) }}" class="font-medium p-2 rounded-md bg-yellow-400 text-white dark:text-blue-500">Edit</a>
                        <form action="{{ route('galery.destroy', $dt->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="font-medium p-2 ml-1 mr-1 rounded-md bg-red-600 text-white dark:text-blue-500">Delete</button>
                        </form>
                        {{-- <a href="post/{{ $dt->id }}" class="font-medium p-2 rounded-md bg-red-600 text-white dark:text-blue-500">Hapus</a> --}}
                        <a href="{{ route('galery.show', $dt->id) }}" class="font-medium p-2 rounded-md bg-slate-700 text-white dark:text-blue-500">Detail</a>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
<script>
    let table = new DataTable('#myTable');
</script>