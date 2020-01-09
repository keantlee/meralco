@extends('layouts.template')

@section('contents')
<div class="container-fluid">
    <div class="row">
        
        @include('layouts.side_bar_content')

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

            <div>
                {{-- <form method="POST">
                    {{ csrf_field() }}
                    <input class="form-control input-lg" type="text" name="search_location" id="search_location" placeholder="Enter Site Name Location">
                    <input type="button" value="Submit">
                    <div id="siteList"></div>
                </form> --}}
            </div>

            <div id="map">

            </div>

        </main>
    </div>
</div>
	{{-- Fetch all location_markers using show_marker_controller.php from the database  --}}
	<script> var location_markers = {!! json_encode( $markers ) !!}; </script>
@endsection