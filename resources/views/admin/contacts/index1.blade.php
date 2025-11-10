
@section('contentpesan')
<div class="container mt-4">
    <h3 class="mb-4">Pesan Masuk</h3>

    @if($contacts->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Pesan</th>
                        <th>Dikirim Pada</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $index => $contact)
                        <tr>
                            <td>{{ $contacts->firstItem() + $index }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at->format('d M Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $contacts->links() }} {{-- pagination --}}
    @else
        <div class="alert alert-info text-center">
            Belum ada pesan yang masuk.
        </div>
    @endif
</div>
@endsection
