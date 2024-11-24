<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Data Gorden') }}
                </h2>
            </div>
            <div>
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
    
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
    </div>
        </div>
    </x-slot>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-full mx-auto">
        <table id="myTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <a href="{{ route('datagorden.create') }}"
                class="bg-slate-800 p-2 inline-block ml-7 mb-7 rounded-lg text-white">Tambah Data</a>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Paragraf
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        judul Footer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Paragraf Footer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Button Telepon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Button Whatsapp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Theme
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Template
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $dt->id }}
                        </th>
                        <td class="px-10 py-4">
                            {{ Str::limit($dt->judul, 10) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ Str::limit($dt->paragraf, 10) }}
                        </td>
                        <td class="px-6 py-4 w-40">
                            {{-- <img src="{{ ('images/' . $dt->image) }}" alt=""> --}}
                            <img src="{{ asset('/storage/images/' . $dt->image) }}" alt="">
                        </td>
                        <td class="px-6 py-4">
                            {{ Str::limit($dt->judul_footer, 10) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ Str::limit($dt->paragraf_footer, 10) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ Str::limit($dt->button_tel, 10) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ Str::limit($dt->button_wa, 10) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $dt->theme }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $dt->template }}
                        </td>
                        <td class="px-6 py-3 flex gap-2">
                            <a href="{{ route('datagorden.edit', $dt->id) }}"
                                class="font-medium p-1 rounded-md bg-yellow-400 text-white dark:text-blue-500">Edit</a>
                            <form action="{{ route('datagorden.destroy', $dt->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="font-medium p-1 rounded-md bg-red-600 text-white dark:text-blue-500">Delete</button>
                            </form>
                            {{-- <a href="post/{{ $dt->id }}" class="font-medium p-2 rounded-md bg-red-600 text-white dark:text-blue-500">Hapus</a> --}}
                            <a href="{{ route('datagorden.show', $dt->id) }}"
                                class="font-medium p-1 rounded-md bg-slate-700 text-white dark:text-blue-500">Detail</a>
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
