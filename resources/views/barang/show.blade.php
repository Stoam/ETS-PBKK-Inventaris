<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Barang') }}
        </h2>
    </x-slot>

  
    <div class="flex flex-col min-h-screen items-center justify-start">
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 mt-5">
             @foreach ($barangs as $barang)
                
                <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                    <div class="h-96 w-72">
                        <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="{{ asset('storage/' . $barang->gambar) }}" alt="" />
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 ">
                    </div>
                    <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                        <h1 class="font-dmserif text-3xl font-bold text-white">{{ $barang->jenis }}</h1>
                        <h5 class="font-dmserif text-3xl font-bold text-white">{{ $barang->kondisi }}</h5>
                        <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">{{ $barang->keterangan }} <br> {{ $barang->kecacatan }} </p>
                        <h5 class="font-dmserif text-3xl font-bold text-white">{{ $barang->jumlah }}</h5>
                        <a href="{{ route('barang.details', ['id' => $barang->id]) }}" class="rounded-full mt-10 bg-gray-900 px-3.5 py-2 font-com text-sm capitalize text-white shadow shadow-black/60 hover:bg-slate-50 hover:text-neutral-900">See More</a>
                    </div>
                </div>
             @endforeach
        </div>
        <div class="my-10 flex flex-col">
             {{ $barangs->links() }} 
        </div>
       
    </div>
    
    
</x-app-layout>