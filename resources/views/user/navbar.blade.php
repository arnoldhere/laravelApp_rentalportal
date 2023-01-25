    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="{{ route('user.index') }}">Rent<span class="color-b">Portal</span></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">

                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.index') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('user.about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('user.blog_grid') }}">Blog</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item " href="{{ route('user.property_single') }}">Property Single</a>
                            <a class="dropdown-item " href="{{ route('user.blog_single') }}">Blog Single</a>
                            <a class="dropdown-item " href="{{ route('user.agents_grid') }}">Agents Grid</a>
                            <a class="dropdown-item " href="{{ route('user.agent_single') }}">Agent Single</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('user.contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <li class="nav-item dropdown" style="list-style: none">
                <a href="" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                <div class="dropdown-menu">
                    <a href="" class="dropdown-item">Show Profile</a>
                    <a href="{{ route('logout') }}" class="dropdown-item">Log out</a>
                </div>
            </li>
        </div>
    </nav><!-- End Header/Navbar -->
