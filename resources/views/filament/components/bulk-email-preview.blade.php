<ul class="list-disc pl-5 space-y-1 text-sm text-gray-700 dark:text-gray-300">
    @foreach ($emails as $email)
        <li>{{ $email }}</li>
    @endforeach
</ul>