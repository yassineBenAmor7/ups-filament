<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nom</th>
            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Poste</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-100">
        @forelse ($juryMembers as $member)
            <tr>
                <td class="px-4 py-2 text-sm text-gray-900">
                    {{ $member->teacher?->name ?? 'N/A' }}
                </td>
                <td class="px-4 py-2 text-sm text-gray-900">
                    {{ ucfirst(str_replace('_', ' ', $member->poste)) }}
                </td>
                
        @empty
            <tr>
                <td colspan="3" class="px-4 py-4 text-center text-sm text-gray-500">
                    Aucun membre du jury assigné.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
