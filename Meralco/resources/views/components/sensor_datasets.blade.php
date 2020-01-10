<div class="container">
    <div class="row mt-5 mb-5 ml-0 mr-0">
        <div>
            <div class="card first_sensor_card" style="width: 18rem;">
                <img class="card-img-top" src="/images/300x150.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Temperature</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$latest_datalogs->temperature}} &#8451; | <b>Status:</b> {{$latest_datalogs->datalog_status->name}}</li>
                    </ul>
                </div>
            </div>
            <div class="card second_sensor_card" style="width: 18rem;">
                <img class="card-img-top" src="/images/300x150.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">EC</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$latest_datalogs->EC}} | <b>Status:</b> {{$latest_datalogs->datalog_status->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="card first_sensor_card" style="width: 18rem;">
                <img class="card-img-top" src="/images/300x150.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Light</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$latest_datalogs->light}} | <b>Status:</b> {{$latest_datalogs->datalog_status->name}}</li>
                    </ul>
                </div>
            </div>
            <div class="card second_sensor_card" style="width: 18rem;">
                <img class="card-img-top" src="/images/300x150.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">PH</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$latest_datalogs->PH}} | <b>Status:</b> {{$latest_datalogs->datalog_status->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="card first_sensor_card" style="width: 18rem;">
                <img class="card-img-top" src="/images/300x150.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Battery</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$latest_datalogs->battery}} | <b>Status:</b> {{$latest_datalogs->datalog_status->name}}</li>
                    </ul>
                </div>
            </div>
            <div class="card second_sensor_card" style="width: 18rem;">
                <img class="card-img-top" src="/images/300x150.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Water-Level</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$latest_datalogs->water_level}} | <b>Status:</b> {{$latest_datalogs->datalog_status->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>