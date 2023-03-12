<div class="sidebar mx-2 my-3" style="height:100vh !important;">
    <div class="sidebar-wrapper">
        <div class="logo">
                <h3 class="text-center mb-0 text-dark" >RentPortal</h3>
            </a>
        </div>
        <ul class="nav" >
            <li class="bg-info my-4">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <span class="text-dark mx-auto">Dashboard</span>
                </a>
            </li>
            <li class="bg-danger my-4">
                <a href="{{route('admin.team')}}"><i class="fa-sharp fa-solid fa-user-group"></i>
                    <span class="text-dark mx-auto"> Our Agents</span>
                </a>
            </li>
            <li class="bg-info my-4">
                <a href="{{route('admin.listproperty')}}">
                    <i class="fa-solid fa-sign-hanging"></i>
                    <span class="text-dark mx-auto">Properties</span>
                </a>
            </li>
            <li class="bg-warning my-4">
                <a href="{{route('admin.reviews')}}">
                    <i class="fa-solid fa-sign-hanging"></i>
                    <span class="text-dark mx-auto">Reviews</span>
                </a>
            </li>
        </ul>
    </div>
</div>