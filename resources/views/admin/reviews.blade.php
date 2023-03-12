@extends('admin.index')
@section('subtitle')
    Feedback recived
@endsection
@section('content')
    <div class="container-fluid">
        @include('layout.err')



    <div class="container-fluid agent-list">
        <table class="table align-middle mb-0 table-stripped table-bordered text-center">
            <thead class="bg-secondary">
                <tr>
                    <td>No. </td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Subject</td>
                    <td>About</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody><?php $count = 1; ?>
                @foreach ($feedbacks as $item)
                    <tr>
                        <th> {{ $count++ }}</th>
                        <th>
                            {{ $item->name }}
                        </th>
                        <th>{{ $item->email }}</th>
                        <th>{{ $item->subject }}</th>
                        <th>{{ $item->message }}</th>
                        <th>
                            <a href="{{ route('admin.deleteReview', ['id' => $item->id]) }}"
                                onclick="return confirm('Are you sure you want to remove?');"
                                class=" btn-danger btn-sm m-2"><i class="fas fa-trash"></i>
                            </a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex m-3">
        {{ $feedbacks->links() }}
    </div>
@endsection
