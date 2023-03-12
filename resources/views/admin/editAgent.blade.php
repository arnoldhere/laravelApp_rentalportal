@extends('admin.index')
@section('subtitle')
    Our Agents
@endsection
@section('content')
<div class="container-fluid">
    @include('layout.err')
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
                                value="{{ $agent->name}}">
                        </div>
                        <div class="md-form mb-3">
                            <input type="tel" id="defaultForm-phone" name="phone"
                                class="form-control text-dark" placeholder="Enter Phone"
                                value="{{ $agent->phone }}">
                        </div>
                        <div class="md-form mb-3">
                            <input type="email" id="defaultForm-pass" name="email"
                                class="form-control text-dark" placeholder="Enter Email"
                                value="{{ $agent->email}}">
                        </div>
                        <div class="md-form mb-3">
                            <textarea name="about" id="" class="form-control text-dark" placeholder="About Agent"> {{ $agent->about }} </textarea>
                        </div>
                        <div class="md-form mb-3">
                            <input type="file" name="profilePhoto" class="form-control text-dark"
                                id="">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn-md btn-default mx-5" type="submit">Update</button>
                        <button class="btn-md btn-default mx-5" type="reset">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
</div>
@endsection