<div class="p-6">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @foreach ($columns as $column)
                        <th scope="col" class="px-6 py-3">
                            {{ $column }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        @foreach ($row($item) as $cell)
                            <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">
                                {{ $cell }}
                            </td>
                        @endforeach
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($columns) }}" class="px-6 py-4 text-center text-sm text-gray-500 dark:text-gray-400">
                            Aucun élément à afficher.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

   
</div>
