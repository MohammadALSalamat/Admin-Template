<?php
// get the current url of the page
$url = url()->current(); ?>
<nav class="left-side-bar">
    <div class="open">
        <div class="logo mt-0 flex ">
            <img src="{{ url('images/logo-dark-abo.png') }}" alt="logo">
        </div>
        <div class="list-options">
            <ul class="group-options">
                <a href="{{ route('dashboard') }}">
                    <li class="single-option active-links">Dashborad</li>
                </a>
                <li class="single-option ">
                    <button class="dropdown-btn">Users
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="{{ route('view-user') }}">View Users</a>
                    </div>
                </li>
                <li class="single-option ">
                    <button class="dropdown-btn">Video
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="{{ route('uplode-video') }}">Uplode Video</a>
                    </div>
                </li>
                <li class="single-option ">Images</li>
                <a href="{{ route('show-sittings') }}">
                    <li class="single-option ">Sittings</li>
                </a>
                <li class="single-option ">Log out</li>
            </ul>
        </div>
    </div>
</nav>
<nav class="small-left-side-bar hide">
    <div class="logo mt-0 flex ">
        <i class="fas fa-home fa-2x"></i>
    </div>
    <div class="list-options">
        <ul class="group-options">
            <li class="single-option  active-links" title="Dashboard"><i class="fas fa-tachometer-alt fa-2x"></i>
                <b>Dashboard</b>
            </li>
            <li class="single-option " title="Users"> <i class="fas fa-users fa-2x"></i>
                <b>Users</b>
                <ul>
                    <li>
                        <a href="#">View Users</a>
                    </li>
                    <li>
                        <a href="#">Ban users</a>
                    </li>
                </ul>
            </li>
            <li class="single-option " title="Vedioes"><i class="fab fa-youtube fa-2x"></i>
                <b>Vedioes</b>
                <ul>
                    <li>
                        <a href="#">View Movies</a>
                    </li>
                    <li>
                        <a href="#">Uplode Movie</a>
                    </li>
                    <li>
                        <a href="#">Most Watched Movie</a>
                    </li>
                </ul>
            </li>
            <li class="single-option " title="Images"> <i class="fas fa-images fa-2x "></i>
                <b>Images</b>
            </li>
            <li class="single-option " title="Sittings"> <i class="fas fa-cogs fa-2x"></i>
                <b>Sittings</b>
                <ul>
                    <li>
                        <a href="#">Profile</a>
                    </li>
                    <li>
                        <a href="#">Change Password</a>
                    </li>
                    <li>
                        <a href="#">Gear Sittings</a>
                    </li>
                    <li>
                        <a href="#">How to use</a>
                    </li>
                </ul>
            </li>
            <li class="single-option " title="Log Out"> <i class="fas fa-power-off fa-2x"></i>
                <b>Log Out</b>
            </li>


        </ul>
    </div>

</nav>
