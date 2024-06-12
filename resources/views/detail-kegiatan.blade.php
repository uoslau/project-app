<x-layout>
    <x-slot:title>Kegiatan: {{ $kegiatan }}</x-slot:title>

    <div class="overflow-auto rounded-lg shadow hidden md:block">
        <table class="w-full">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    {{-- <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">SKTNP</th> --}}
                    <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Nama Mitra</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Wilayah Tugas</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Kegiatan</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Bertugas Sebagai
                    </th>
                    {{-- <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Beban</th> --}}
                    {{-- <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Honor</th> --}}
                    <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Fungsi</th>
                    {{-- <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Tanggal Mulai</th> --}}
                    {{-- <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Tanggal Selesai</th> --}}
                    {{-- <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Alamat</th> --}}
                    {{-- <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Pekerjaan</th> --}}
                    <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Mata Anggaran</th>
                    <th class="p-3 text-sm font-semibold tracking-wide text-center whitespace-nowrap">Nomor BAST</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($penugasans as $p)
                    <tr>
                        {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $p->sktnp }}</td> --}}
                        <td class="p-3 text-sm text-gray-700 text-left whitespace-nowrap">
                            <a href="/penugasan/{{ $p->slug }}">{{ $p->nama_mitra }}</a>
                        </td>
                        <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $p->wilayah_tugas }}
                        </td>
                        <td class="p-3 text-sm text-gray-700 text-left whitespace-nowrap">{{ $p->nama_kegiatan }}
                        </td>
                        <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">
                            {{ $p->bertugas_sebagai }}</td>
                        {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $p->beban }}</td> --}}
                        {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $p->honor }}</td> --}}
                        <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $p->fungsi }}</td>
                        {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $p->tanggal_mulai }}</td> --}}
                        {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $p->tanggal_selesai }}</td> --}}
                        {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $p->alamat }}</td> --}}
                        {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $p->pekerjaan }}</td> --}}
                        <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">
                            <span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">{{ $p->mata_anggaran }}</span>
                        </td>
                        <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">
                            <span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">{{ $p->nomor_bast }}</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="grid grid-cols-1 gap-4 md:hidden">
        @foreach ($penugasans as $p)
            <div class="bg-white space-y-3 p-4 rounded-lg shadow">
                <div class="flex items-center space-x-2 text-sm">
                    <div><a href="/penugasan/{{ $p->slug }}">{{ $p->nama_mitra }}</a></div>
                    <div>{{ $p->bertugas_sebagai }}</div>
                    <div>{{ $p->wilayah_tugas }}</div>
                </div>
                <div class="text-sm font-medium text-black">{{ $p->nama_kegiatan }}</div>
                <div class="flex items-center space-x-2 text-sm">
                    <div>
                        <span
                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">{{ $p->mata_anggaran }}</span>
                    </div>
                    <div>
                        <span
                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">{{ $p->nomor_bast }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
