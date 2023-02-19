@extends('admin.index')
@section('subtitle')
    Our Agents
@endsection
@section('content')
    <div class="container-fluid">
        @include('layout.err')
        <div class="modal fade" id="modaladdform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('admin.addAgent') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Fill Agent Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-3">
                                <input type="name" id="defaultForm-email" name="name" class="form-control text-dark"
                                    placeholder="Enter Name" value="{{ old('name') }}">
                            </div>
                            <div class="md-form mb-3">
                                <input type="tel" id="defaultForm-phone" name="phone" class="form-control text-dark"
                                    placeholder="Enter Phone" value="{{ old('phone') }}">
                            </div>
                            <div class="md-form mb-3">
                                <input type="email" id="defaultForm-pass" name="email" class="form-control text-dark"
                                    placeholder="Enter Email" value="{{ old('email') }}">
                            </div>
                            <div class="md-form mb-3">
                                <textarea name="about" id="" class="form-control text-dark" placeholder="About Agent"></textarea>
                            </div>
                            <div class="md-form mb-3">
                                <input type="file" name="profilePhoto" class="form-control text-dark" id="">
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-default mx-5" type="submit">Add</button>
                            <button class="btn btn-default mx-5" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="text-center">
            <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modaladdform">Add
                Agent</a>
        </div>
    </div>



    <div class="container-fluid agent-list">
        <table class="table align-middle mb-0 table-stripped table-bordered text-center">
            <thead class="bg-secondary">
                <tr>
                    <td>No. </td>
                    <td>Profile</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>About</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody><?php $count = 1; ?>
                @foreach ($agents as $agent)
                    <tr>
                        <th> {{ $count++ }}</th>
                        <th>
                            <img src="{{ asset('admin/agents/' . $agent->profilePhoto) }}" alt="{{ $agent->name }}"
                                class="img-fluid img-thubnail" width="100px" height="100px">
                        </th>
                        <th>{{ $agent->name }}</th>
                        <th>{{ $agent->email }}</th>
                        <th>{{ $agent->phone }}</th>
                        <th>{{ $agent->about }}</th>
                        <th>
                            <a href="" class="btn btn-success btn-sm m-2" data-target="#modalupdateform"
                                data-toggle="modal">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('admin.deleteagent', ['id' => $agent->id]) }}"
                                onclick="return confirm('Are you sure you want to remove?');"
                                class="btn btn-danger btn-sm m-2"><i class="fas fa-trash"></i>
                            </a>
                        </th>
                    </tr>
                    <div class="container-fluid">
                        {{-- @include('layout.err') --}}
                        <div class="modal fade" id="modalupdateform" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('admin.editagent') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Update Agent Details</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <input type="hidden" name="id" value="{{ $agent->id }}" />
                                        <div class="modal-body mx-3">
                                            <div class="md-form mb-3">
                                                <input type="name" id="defaultForm-email" name="name"
                                                    class="form-control text-dark" placeholder="Enter Name"
                                                    value="{{ old('name') }}">
                                            </div>
                                            <div class="md-form mb-3">
                                                <input type="tel" id="defaultForm-phone" name="phone"
                                                    class="form-control text-dark" placeholder="Enter Phone"
                                                    value="{{ old('phone') }}">
                                            </div>
                                            <div class="md-form mb-3">
                                                <input type="email" id="defaultForm-pass" name="email"
                                                    class="form-control text-dark" placeholder="Enter Email"
                                                    value="{{ old('email') }}">
                                            </div>
                                            <div class="md-form mb-3">
                                                <textarea name="about" id="" class="form-control text-dark" placeholder="About Agent"></textarea>
                                            </div>
                                            <div class="md-form mb-3">
                                                <input type="file" name="profilePhoto" class="form-control text-dark"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button class="btn btn-default mx-5" type="submit">Update</button>
                                            <button class="btn btn-default mx-5" type="reset">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
