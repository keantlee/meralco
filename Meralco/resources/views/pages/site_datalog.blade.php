@extends('layouts.template')

@section('contents')
<div class="container-fluid">
    <div class="row">

        @include('layouts.side_bar_content')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            @include('layouts.site_dashboard')

            @include('components.sensor_datasets')

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
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datalogs as $datalog)
                        <tr>
                            <td>{{$datalog->datalog_ip->ip_address}}</td>
                            <td>{{$datalog->temperature}}</td>
                            <td>{{$datalog->light}}</td>
                            <td>{{$datalog->battery}}</td>
                            <td>{{$datalog->EC}}</td>
                            <td>{{$datalog->PH}}</td>
                            <td>{{$datalog->water_level}}</td>
                            <td>{{$datalog->datalog_status->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection