<x-app-layout>
  <form class="max-w-lg mt-20 mx-auto bg-white dark:bg-gray-800 shadow-xl p-3" action="{{ route('card.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="text-center dark:text-white mb-8 mt-8">From card</div>
  <div class="mb-5">
    <label for="judul_card" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Card</label>
    <input type="text" id="judul_card" name="judul_card" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  @error('judul_card')
      <div class="text-red-600">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-5">
<label for="isi_card" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi Card</label>
<textarea id="isi_card" rows="4" name="isi_card" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
  @error('isi_card')
      <div class="text-red-600">{{ $message }}</div>
  @enderror
  </div>
  <div class="mb-5">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
    <select id="countries" name="pilih_judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option value="" disabled>Pilih</option>
      @foreach($data as $dt)
      <option value="{{ $dt->id }}">{{ $dt->judul }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
    <input name="image" value="{{ old('image') }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
    @error('image')
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
      <span class="font-medium">{{ $message }}</span> 
    </div>
    @enderror
        </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

</x-app-layout>