@extends('admin.layout.main')

@section('content')
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Tanggal Pengajuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($submissions as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->nik }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->user->email }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $submissions->links() }}
</div>
@endsection
