@extends('layouts.template')

@section('contents')
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="#"><span data-feather="home"></span>Dashboard
                            <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span data-feather="file"></span>User
                            Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span
                                data-feather="shopping-cart"></span>Course</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span data-feather="users"></span>Sites</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>IP ADDRESS</th>
                            <th>TEMPERATURE</th>
                            <th>LIGHT</th>
                            <th>BATTERY</th>
                            <th>EC</th>
                            <th>PH</th>
                            <th>WATER LEVEL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$ip_address}}</td>
                            <td>{{$temperature}}</td>
                            <td>{{$light}}</td>
                            <td>{{$battery}}</td>
                            <td>{{$EC}}</td>
                            <td>{{$PH}}</td>
                            <td>{{$water}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection