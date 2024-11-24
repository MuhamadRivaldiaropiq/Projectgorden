<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('form Tambah Data') }}
    </h2>
</x-slot>
    <form class="max-w-5xl mx-auto bg-white dark:bg-gray-800 shadow-xl p-5 mt-3 rounded-t-2xl" action="{{ route('datagorden.store') }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-between gap-3 mb-5">
            <div>
                <div class="w-32 h-32 rounded-full border-solid border-2 border-indigo-600 ">
                    <img src="{{ asset('storage/images', $data->image) }}" alt="">
                </div>
            </div>
            <div class="my-auto">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                    file</label>
                <input name="image" value="{{ old('image') }}"
                    class="block h-10 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file">
                @error('image')
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <span class="font-medium">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="w-[30.5rem]">
                <div>
                    <label for="theme"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Theme</label>
                    <input type="text" id="theme" name="theme"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                    @error('judul_footer')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="template"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Template</label>
                    <input type="text" id="template" name="template"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                    @error('judul_footer')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex gap-5 mb-5">
            <div class="w-full">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                    Utama</label>
                <input type="text" id="nama" value="{{ old('nama') }}" name="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('nama')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="judul_footer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                    Footer</label>
                <input type="text" id="judul_footer" name="judul_footer"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('judul_footer')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex gap-5">
            <div class="w-full">
                <label for="paragraf"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paragraf</label>
                <textarea id="paragraf" rows="4" name="paragraf"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                @error('paragraf1')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="paragraf2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paragraf
                    Footer</label>
                <textarea id="paragraf2" rows="4" name="paragraf2"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                @error('p2_footer')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex gap-5 mt-5">
            <div class="w-full">
                <label for="button_tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Button
                    Telepon</label>
                <input type="text" id="button_tel" name="button_tel"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('judul_footer')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="button_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Button
                    Whatsapp</label>
                <input type="text" id="button_wa" name="button_wa"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('judul_footer')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="text-white bg-blue-700 block mt-5 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</x-app-layout>
