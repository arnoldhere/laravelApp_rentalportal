<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-normal">
                RentPortal
            </a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <span class="text-white mx-auto">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.team')}}"><i class="fa-sharp fa-solid fa-user-group"></i>
                    <span class="text-white mx-auto"> Our Agents</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.listproperty')}}">
                    <i class="fa-solid fa-sign-hanging"></i>
                    <span class="text-white mx-auto">Properties</span>
                </a>
            </li>
        </ul>
    </div>
</div>