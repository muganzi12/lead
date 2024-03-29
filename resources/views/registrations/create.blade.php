@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register for an event</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('registrations.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="fsname" class="col-md-4 control-label"> First Name</label>

                            <div class="col-md-6">
                                <input id="fsname" type="text" class="form-control" name="fsname"  required autofocus>

                             
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fsname" class="col-md-4 control-label"> Last Name</label>

                            <div class="col-md-6">
                                <input id="lsname" type="text" class="form-control" name="lsname" required autofocus>

                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label"> Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" required autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label"> Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required autofocus>

                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Complete Registration
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
