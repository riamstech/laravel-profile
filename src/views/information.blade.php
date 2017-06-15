@extends('profile::layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('profile::sidebar')
            </div>
            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading">İnformation</div>
                    <div class="panel-body">
                        <div class="alert alert-info">Your personal information</div>

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('profile/set-information') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4">About / Biografiy</label>

                                <div class="col-md-12">
                                    <textarea name="about" class="form-control" id="" cols="30" rows="10">{{ $user->about }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-primary">
                                        update
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
