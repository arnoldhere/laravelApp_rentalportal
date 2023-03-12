@extends('admin.index')
@section('subtitle')
Properties
@endsection
@section('content')
<div class="container-fluid">
    @include('layout.err')
    <div class="modal fade" id="modaladdform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('admin.addProperty') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Add Property Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-3">
                                <select name="type" class="form-control text-dark">
                                    <option value="" disabled selected>-- Your property category</option>
                                    <option value="pent house">pent house</option>
                                    <option value="hotel">hotel</option>
                                    <option value="bunglow">bunglow</option>
                                    <option value="paying guest">Paying guest</option>
                                </select>
                        </div>
                        <div class="md-form mb-3">
                            <select name="status" class="form-control text-dark">
                                <option value="" disabled selected>-- Your property statis</option>
                                <option value="rent">rent</option>
                                <option value="sale">sale</option>
                            </select>
                        </div>
                        <div class="md-form mb-3">
                            <input type="number" class="text-dark form-control" name="area" placeholder="Area (ms)">
                        </div>
                        <div class="md-form mb-3">
                            <input type="number" name="currentPrice" class="text-dark form-control" placeholder="Price ($)">
                        </div>
                        <div class="md-form mb-3">
                            <select name="location" class="form-control text-dark">
                                <option value="" disabled selected>-- Your property location</option>
                                @foreach ($cities as  $city)
                                    <option value="{{ $city->name }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="md-form mb-3">
                            <textarea name="description" id="" class="form-control text-dark" placeholder="About Property"></textarea>
                        </div>
                        <div class="md-form mb-3">
                            <input type="file" name="image" class="form-control text-dark" id="">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn-md btn-default mx-5" type="submit">Add</button>
                        <button class="btn-md btn-default mx-5" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="text-center m-3">
        <a href="" class="btn-lg btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modaladdform">Add Property</a>
    </div>
</div>



<div class="container-fluid agent-list mt-5">
    <table class="table align-middle mb-0 table-stripped table-bordered text-center">
        <thead class="bg-secondary">
            <tr>
                <td>No. </td>
                <td>image</td>
                <td>Type</td>
                <td>Status</td>
                <td>Area</td>
                <td>Price</td>
                <td>Location</td>
                <td>Description</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody><?php $count = 1; ?>
            @foreach ($properties as $property)
                <tr>
                    <th> {{ $count++ }}</th>
                    <th>
                        <img src="{{ asset('imgs/propertyImgs/' . $property->image) }}" alt=""
                            class="img-fluid img-thubnail" width="100px" height="100px">
                    </th>
                    <th>{{ $property->type }}</th>
                    <th>{{ $property->status }}</th>
                    <th>{{ $property->area }}</th>
                    <th>{{ $property->currentPrice }}</th>
                    <th>{{ $property->location }}</th>
                    <th>{{ $property->description }}</th>
                    <th>
                        <a href="{{ route('admin.delProperty', ['id' => $property->id]) }}"
                            onclick="return confirm('Are you sure you want to remove?');"
                            class=" btn-danger btn-sm m-2"><i class="fas fa-trash"></i>
                        </a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection