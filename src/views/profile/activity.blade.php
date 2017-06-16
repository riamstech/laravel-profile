@extends('profile::layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('profile::layouts.sidebar-profile')
            </div>

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Activitys</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>ip</td>
                                    <td>Action</td>
                                    <td>Resources name</td>
                                    <td>Resources id</td>
                                    <td>Action Time</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($activitys as $activity)
                                <tr>
                                    <td>{{ $activity->ip }}</td>
                                    <td>{{ $activity->action }}</td>
                                    <td>{{ $activity->record_name }}</td>
                                    <td>{{ $activity->trackable_id }}</td>
                                    <td>{{ $activity->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
