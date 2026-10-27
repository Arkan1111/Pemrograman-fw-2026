<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <x-card>
                <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
                        <input type="text" name="name" value="{{ old('name', $product->name) }}"
                            class="mt-1 block w-full rounded-md border-gray-300">

                        @error('name')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Field lain mengikuti pola yang sama -->

                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md">
                        Simpan Perubahan
                    </button>
                </form>
            </x-card>
        </div>
    </div>
</x-app-layout>