
<x-admin.layout>
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Classroom</h1>
            <p class="text-gray-600 dark:text-gray-400">Kelola data classroom</p>
        </div>
    </div>

    <div class="relative overflow-x-auto bg-white shadow-md rounded-lg dark:bg-gray-800">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-purple-900 uppercase bg-purple-200 dark:bg-purple-300">

                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Major</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classroom as $item)
                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $item->name }}</td>
                      <td class="px-6 py-4 font-medium text-gray-900 dark:text-white"> {{ $item->major }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
