@extends('admin.index')
@section('subtitle')
    Dashboard
@endsection
@section('content')
    <div class="row d-flex justify-content-center">
        <!-- Total agents -->
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
        <!-- feedbacks-->
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
                                    ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- users --}}
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
    <div class="container bg-secondary">
        <h3 class="text-center text-dark p-2">
            Users Signed in
        </h3>
    </div>
    <div class="container mt-5">
        <table class=" mt-3 table table-striped table-hover table-bordered">
            <?php $cnt =1 ;?>
            <thead>
                <tr>
                    <th>#</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Avatar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )
                <tr>
                    <td>{{ $cnt++ }}</td>
                    <td>
                        {{ $user->firstname }}</td>
                    <td>
                        {{ $user->lastname }}</td>
                    <td>{{ $user->email }}
                    </td>
                    <td>
                        {{ $user->phone }}</td>
                    <td>
                        <img src="{{ asset('imgs//userAvatars/'.$user->avatar) }}" alt="" width="100px" height="80px">
                    </td>
                        <td>
                            <a href="{{ route('admin.deleteUser' , ['id'=>$user->id]) }}"
                            onclick="return confirm('Are you sure you want to remove?');"
                            class=" btn-danger btn-sm m-2"><i class="fas fa-trash"></i>
                        </a>
                    </td>
                    </tr>
                @endforeach
            </tbody>    
        </table>
        <div class="d-flex">
            {{ $users->links() }}
        </div>


    </div>



    <!-- Content Row -->
@endsection
