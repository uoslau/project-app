<x-layout>
    <x-slot:title>{{ $title }}: {{ $penugasan->nama_mitra }}</x-slot:title>

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
                <tr>
                    {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $penugasan->sktnp }}</td> --}}
                    <td class="p-3 text-sm text-gray-700 text-left whitespace-nowrap">{{ $penugasan->nama_mitra }}</td>
                    <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $penugasan->wilayah_tugas }}
                    </td>
                    <td class="p-3 text-sm text-gray-700 text-left whitespace-nowrap"><a
                            href="/kegiatan/{{ $penugasan->kegiatan->slug }}">{{ $penugasan->nama_kegiatan }}</a></td>
                    <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">
                        {{ $penugasan->bertugas_sebagai }}</td>
                    {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $penugasan->beban }}</td> --}}
                    {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $penugasan->honor }}</td> --}}
                    <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $penugasan->fungsi }}</td>
                    {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $penugasan->tanggal_mulai }}</td> --}}
                    {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $penugasan->tanggal_selesai }}</td> --}}
                    {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $penugasan->alamat }}</td> --}}
                    {{-- <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">{{ $penugasan->pekerjaan }}</td> --}}
                    <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">
                        <span
                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">{{ $penugasan->mata_anggaran }}</span>
                    </td>
                    <td class="p-3 text-sm text-gray-700 text-center whitespace-nowrap">
                        <span
                            class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">{{ $penugasan->nomor_bast }}</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="grid grid-cols-1 gap-4 md:hidden">
        <div class="bg-white space-y-3 p-4 rounded-lg shadow">
            <div class="flex items-center space-x-2 text-sm">
                <div>{{ $penugasan->nama_mitra }}</div>
                <div>{{ $penugasan->bertugas_sebagai }}</div>
                <div>{{ $penugasan->wilayah_tugas }}</div>
            </div>
            <div class="text-sm font-medium text-black"><a
                    href="/kegiatan/{{ $penugasan->kegiatan->slug }}">{{ $penugasan->nama_kegiatan }}</a></div>
            <div class="flex items-center space-x-2 text-sm">
                <div>
                    <span
                        class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">{{ $penugasan->mata_anggaran }}</span>
                </div>
                <div>
                    <span
                        class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">{{ $penugasan->nomor_bast }}</span>
                </div>
            </div>
        </div>
    </div>

</x-layout>
