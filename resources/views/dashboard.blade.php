<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <x-card>
                <h3 class="text-lg font-semibold mb-2">
                    Ringkasan Hari Ini
                </h3>

                <p class="text-gray-600">
                    Selamat datang, {{ auth()->user()->name }}.
                </p>
            </x-card>

            <x-card>
                <h3 class="text-lg font-semibold mb-4">
                    Status Stok Produk
                </h3>

                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-3 text-left border-b">
                                    Produk
                                </th>
                                <th class="px-4 py-3 text-left border-b">
                                    Stok
                                </th>
                                <th class="px-4 py-3 text-left border-b">
                                    Status
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="px-4 py-3 border-b">
                                    Indomie Goreng
                                </td>
                                <td class="px-4 py-3 border-b">
                                    25
                                </td>
                                <td class="px-4 py-3 border-b">
                                    <x-badge status="aman" />
                                </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-3 border-b">
                                    Teh Botol
                                </td>
                                <td class="px-4 py-3 border-b">
                                    7
                                </td>
                                <td class="px-4 py-3 border-b">
                                    <x-badge status="menipis" />
                                </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-3 border-b">
                                    Air Mineral
                                </td>
                                <td class="px-4 py-3 border-b">
                                    0
                                </td>
                                <td class="px-4 py-3 border-b">
                                    <x-badge status="habis" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </x-card>

        </div>
    </div>
</x-app-layout>