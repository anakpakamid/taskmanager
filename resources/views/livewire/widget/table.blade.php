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
                        <a wire:navigate href="/{{$route}}/" class="button">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
