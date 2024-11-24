<x-app-layout>
    <div class="bg-white p-5 max-w-5xl mx-auto shadow-xl mt-3 rounded-t-2xl">
        <form class="dark:bg-gray-800" action="{{ route('datagorden.update', $data->id) }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <div class="font-semibold text-lg">Form Update Data</div>
            <hr class="bg-slate-800 h-1 mb-8 mt-3">
          </div>
        <div class="flex justify-center gap-3 mb-5">
            <div>
                <div>
                  <img src="{{ asset('/storage/images/' . $data->image) }}" alt="" class="w-32 h-32 object-contain rounded-lg border-solid border-2 border-indigo-600">
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
        </div>
        <div class="flex gap-5 mb-5">
            <div class="w-full">
                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                    Utama</label>
                <input type="text" id="judul" value="{{ $data->judul }}" name="judul"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('nama')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="judul_footer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                    Footer</label>
                <input type="text" id="judul_footer" value="{{ $data->judul_footer }}" name="judul_footer"
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
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $data->paragraf }}</textarea>
                @error('paragraf1')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="paragraf2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paragraf
                    Footer</label>
                <textarea id="paragraf2" rows="4" name="paragraf2"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $data->paragraf_footer }}</textarea>
                @error('p2_footer')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex gap-5 mt-5">
            <div class="w-full">
                <label for="button_tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Button
                    Telepon</label>
                <input type="text" value="{{ $data->button_tel }}" id="button_tel" name="button_tel"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('judul_footer')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full">
                <label for="button_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Button
                    Whatsapp</label>
                <input type="text" id="button_wa" value="{{ $data->button_wa }}" name="button_wa"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
                @error('judul_footer')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="text-white bg-blue-700 block mt-5 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</x-app-layout>
    