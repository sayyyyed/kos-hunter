<a href="{{ route('properti.show', $properti->id) }}"
    class="card block max-w-full rounded overflow-hidden shadow-lg mx-auto bg-white shadow no-underline">
    <div class="relative w-full h-48 overflow-hidden">
        <img class="w-full h-full object-cover"
            src="{{ asset($properti->images->first()->image_url ?? 'https://upload.wikimedia.org/wikipedia/commons/c/cb/Salman_Rushdie%2C_2024.jpg') }}"
            alt="{{ $properti->nama }}">
        <div class="absolute inset-0 bg-gradient-to-t from-black opacity-50"></div>
        <button
            class="absolute bottom-4 left-4 bg-blue-700 text-white px-2 py-2 text-sm rounded">Book</button>
    </div>

    <div class="px-6 pt-4">
        <div class="font-black text-xl text-gray-800">{{ $properti->nama }}</div>
        <p class="text-gray-700 text-base mb-2 font-black">
            {{ $properti->alamat }}
        </p>
        <p class="text-gray-700 text-base">
            Rp{{ number_format($properti->harga, 2) }}/bulan
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <span
            class="inline-block bg-blue-200 text-blue-900 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $properti->tipe }}</span>
        <span id="room-status-{{ $properti->id }}"
            class="inline-block rounded-full px-3 py-1 text-sm font-semibold mr-2 mb-2"
            data-properti-id="{{ $properti->id }}"
            data-initial-rooms="{{ $properti->jumlah_kamar }}">
            Loading...
        </span>
    </div>
</a>
