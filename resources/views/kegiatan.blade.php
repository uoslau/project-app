<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="overflow-auto rounded-lg shadow hidden md:block">
        @foreach ($kegiatan as $k)
            <ul>
                <li>
                    <h2 class="p-3 text-sm text-gray-700 text-left whitespace-nowrap"><a
                            href="/kegiatan/{{ $k->slug }}">{{ $k->nama_kegiatan }}</a></h2>
                </li>
            </ul>
        @endforeach
    </div>

</x-layout>
