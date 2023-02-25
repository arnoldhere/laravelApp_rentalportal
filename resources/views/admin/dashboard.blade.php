@extends('admin.index')
@section('subtitle')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start border-danger border-5 shadow h-80 py-2">
                <div class="card-body ">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-center text-uppercase mb-2">
                                Total Agents </div>
                            <div class="container ">
                                <h1 class="p-2 font-weight-bold text-center text-danger text-800">
                                    <?php
                                    echo ' ' . DB::table('agents')->count();
                                    ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start border-success border-5 shadow h-80 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-center text-uppercase mb-2">
                                Feedbacks recieved </div>
                            <div class="container ">
                                <h1 class="p-2 font-weight-bold text-center text-danger text-800">
                                    <?php
                                    echo ' ' . DB::table('feedbacks')->count();
                                    ?>+
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start border-info border-5 shadow h-80 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-center text-uppercase mb-2">
                                Total Users </div>
                            <div class="container ">
                                <h1 class="p-2 font-weight-bold text-center text-danger text-800">
                                    <?php
                                    echo ' ' . DB::table('users')->count();
                                    ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Sr.no</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1; ?>
            @foreach ($users as $item)
                <tr>
                    <td>{{ $count++ }} </td>
                    <td>
                        {{ $item->firstname }}
                    </td>
                    <td>
                        {{ $item->lastname }}
                    </td>
                    <td>{{ $item->email }} </td>
                    <td>
                        {{ $item->phone }}
                    </td>
                    <td> null</td>
                    <td>
                        <a href="{{ route('admin.deleteUser', ['id' => $item->id]) }}"
                                onclick="return confirm('Are you sure you want to delete this ?');"
                                class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                            </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <!-- Content Row -->
@endsection
