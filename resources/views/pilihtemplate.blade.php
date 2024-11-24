<x-app-layout>
    <form action="{{ route('template.change') }}" method="POST">
        @csrf
        {{-- @method('POST') --}}
    <div class="flex gap-5">
            <div class="bg-white p-3 shadow-xl rounded-xl">
                <div>
                    <img src="{{ 'storage/images/1721651769.png' }}" alt="" class="w-40 border-solid border-2 border-indigo-600">
                </div>
                <div class="p-2">
                    <input type="radio" {{ $data->template == 'template 1'? 'checked' : '' }} name="template" value="template 1" class="text-center">Template 1</input>
                </div>
            </div>
            <div class="bg-white p-3 shadow-xl rounded-xl">
                <div>
                    <img src="{{ 'storage/images/1721651769.png' }}" alt="" class="w-40 border-solid border-2 border-indigo-600">
                </div>
                <div class="p-2">
                    <input type="radio" {{ $data->template == 'template 2'? 'checked' : '' }} name="template" value="template 2" class="text-cente">Template 2</input>
                </div>
            </div>
        </div>
        <button class="px-5 py-2 rounded-xl mt-5 bg-blue-600">save</button>
    </form>
</x-app-layout>