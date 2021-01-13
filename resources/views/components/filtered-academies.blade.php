<x-layout>
    <div class="content-wrapper">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Country</th>
                <th>Tags</th>
            </tr>
            </thead>
            <tbody>
            @foreach($academies as $academy)
                <tr style="cursor: pointer;" onclick="location.href = '{{ route('academies.show', ['academy' => $academy->id]) }}'">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $academy->id }}</td>
                    <td>{{ $academy->name }}</td>
                    <td>{{ $academy->country }}</td>
                    <td>@foreach($academy->tags as $tag) #{{ $tag->name }} <br/> @endforeach</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
