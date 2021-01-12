<x-layout>
    <div class="content-wrapper">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr style="cursor: pointer;" onclick="location.href = '{{ route('users.show', ['user' => $user]) }}'">
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
