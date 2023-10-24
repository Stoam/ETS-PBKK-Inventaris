<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Barang') }}
        </h2>
    </x-slot>

    <div class="flex flex-col min-h-screen items-center justify-start py-10">

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">

                <header class="my-2">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Create a Barang') }}
                    </h2>
            
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("Fill  all the forms below") }}
                    </p>
                </header>
               
    
        <div class=" flex-col justify-center items-center">
           <form method="POST" action="{{ route('barang.store') }}"  enctype="multipart/form-data">
    
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="jenis">Jenis:</label>
                    <input type="text" id="jenis" name="jenis" value="{{ old('jenis') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
    
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="kondisi">Kondisi:</label>
                    <input type="text" id="kondisi" name="kondisi" value="{{ old('kondisi') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="keterangan">Keterangan:</label>
                    <textarea type="text" id="keterangan" name="keterangan" value="{{ old('keterangan') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="5" required></textarea>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="kecacatan">Kecacatan:</label>
                    <textarea type="text" id="kecacatan" name="kecacatan" value="{{ old('kecacatan') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="5" required></textarea>
                </div>
    
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="jumlah">Jumlah:</label>
                    <input type="text" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="gambar">Gambar:</label>
                    <input type="file" name="gambar" id="gambar" class="form-control-file p-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG or JPEG (MAX. 20MB).</p>
                </div>
                
                <div class="mb-6 flex justify-center">
                    {{-- <a href="{{ route('guest.index') }}" class="rounded-l-full  bg-neutral-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60 hover:bg-slate-50 hover:text-neutral-900">Guest List</a> --}}
                    <button type="submit" class="rounded-lg group flex justify-center items-center bg-gray-800 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60 hover:bg-slate-50 hover:text-gray-800" >Add</button>
                </div>
                 </form>
            </div>
        </div>

            </div>
        </div>
</x-app-layout>
