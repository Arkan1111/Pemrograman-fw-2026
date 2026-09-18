@php
    $colors = [
        'aman' => 'bg-green-100 text-green-800',
        'menipis' => 'bg-yellow-100 text-yellow-800',
        'habis' => 'bg-red-100 text-red-800',
    ];

    $labels = [
        'aman' => 'Aman',
        'menipis' => 'Menipis',
        'habis' => 'Habis',
    ];
@endphp

<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
    {{ $colors[$status] ?? 'bg-gray-100 text-gray-800' }}">

    {{ $labels[$status] ?? 'Tidak diketahui' }}

</span>