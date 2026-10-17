<x-admin.layout>
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Students</h1>
            <p class="text-gray-600 dark:text-gray-400">Kelola data siswa</p>
        </div>
        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2.5">
            + Tambah Siswa
        </a>
    </div>

    <div class="relative overflow-x-auto bg-white shadow-md rounded-lg dark:bg-gray-800">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-black uppercase bg-yellow-200 dark:bg-yellow-500">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">NIS</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Classroom</th>
                    <th class="px-6 py-3">Addres</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $student->nis }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $student->name }}</td>
                        <td class="px-6 py-4">{{ $student->classroom}}</td>
                       <td class="px-6 py-4">{{ $student->addres }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
