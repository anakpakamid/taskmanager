<div>
    <table class="min-w-full border-collapse block md:table">
        <thead class="bg-gray-200 text-left">
            <tr scope="col" class="border-b px-6 py-4">
            @foreach($columns as $column)
                <th>{{$column["label"]}}</th>
            @endforeach
            <th class="py-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
                <tr scope="row" class="border-b">
                    @foreach($columns as $col)
                        <td>{{ $row[$col['field']] }}</td>
                    @endforeach
                    <td>
                        <a wire:navigate href="/{{$route}}/{{\Crypt::encrypt($row['id'])}}" class="button">Edit</a>
                        <a wire:navigate href="/{{$route}}/{{\Crypt::encrypt($row['id'])}}" class="button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4 flex justify-center space-x-2" x-data="{ currentPage: @entangle('currentPage'), totalPages: @entangle('totalPages') }">
        <button wire:click="onPreviousPage" x-show="currentPage > 1" x-transition class="px-4 py-2 bg-gray-300 text-gray-700 rounded-l">
            <- Previous
        </button>
        <button wire:click="onNextPage" x-show="currentPage < totalPages" x-transition
            class="px-4 py-2 bg-gray-300 text-gray-700 rounded">
            Next ->
        </button>
    </div>

</div>
