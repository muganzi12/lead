@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update eventsregistration</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('registrations.update', ['id' => $registrations->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fsname" type="text" class="form-control" name="fsname" value="{{ $registrations->fsname }}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label"> Last Name</label>

                            <div class="col-md-6">
                                <input id="lsname" type="text" class="form-control" name="lsname" value="{{ $registrations->lsname }}" required autofocus>

                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label"> Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $registrations->email }}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label"> Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $registrations->phone }}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
