@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update member</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('institution.update', ['id' => $institution->id]) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="organisation_name" class="col-md-4 control-label">Name of Organisation</label>

                            <div class="col-md-6">
                                <input id="organization_name" type="text" class="form-control" name="organization_name" value="{{ $institution->organization_name }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organization_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('trading_name') ? ' has-error' : '' }}">
                            <label for="trading_name" class="col-md-4 control-label">Trading Name</label>

                            <div class="col-md-6">
                                <input id="trading_name" type="text" class="form-control" name="trading_name" value="{{ $institution->trading_name }}" required>

                                @if ($errors->has('trading_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('trading_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('business_type') ? ' has-error' : '' }}">
                            <label for="business_type" class="col-md-4 control-label">Type of Business</label>

                            <div class="col-md-6">
                                <input id="business_type" type="text" class="form-control" name="business_type" value="{{ $institution->business_type}}" required>

                                @if ($errors->has('business_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('business_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                            <label for="cell_phone" class="col-md-4 control-label">Cell Phone</label>

                            <div class="col-md-6">
                                <input id="cell_phone" type="text" class="form-control" name="cell_phone" value="{{ $institution->cell_phone }}" required autofocus>

                                @if ($errors->has('cell_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cell_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="others" class="col-md-4 control-label">Others (please specify)</label>

                            <div class="col-md-6">
                                <input id="others" type="text" class="form-control" name="others" value="{{ $institution->others }}" required>

                                @if ($errors->has('others'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ob_list_handlers') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                            <label for="business" class="col-md-4 control-label">Specify your industry and business</label>

                            <div class="col-md-6">
                                <input id="business" type="text" class="form-control" name="region" value="{{ $institution->business}}" required>

                                @if ($errors->has('business'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('business') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ $institution->country}}" required>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="tel" class="form-control" name="city" value="{{ $institution->city }}" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="district" class="col-md-4 control-label">District</label>

                            <div class="col-md-6">
                                <input id="district" type="text" class="form-control" name="district" value="{{ $institution->district}}" required>

                                @if ($errors->has('district'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="contact" class="col-md-4 control-label">Contact</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" value="{{ $institution->experience }}" required>

                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $institution->title }}" required>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Surname</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="cv" value="{{ $institution->cv}}" required>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="date" class="form-control" name="firstname" value="{{ $institution->firstname}}" required>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="other_name" class="col-md-4 control-label">Other Name</label>

                            <div class="col-md-6">
                                <input id="other_name" type="text" class="form-control" name="other_name" value="{{ $institution->other_name}}" required>

                                @if ($errors->has('other_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('other_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="job_title" class="col-md-4 control-label">Job Title</label>

                            <div class="col-md-6">
                                <input id="job_title" type="text" class="form-control" name="job_title" value="{{ $institution->job_title}}" required>

                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $institution->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                           
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="board_members" class="col-md-4 control-label">Number of Board Directors</label>

                            <div class="col-md-6">
                                <input id="board_members" type="int" class="form-control" name="board_members" value="{{ $institution->board_members}}" required>

                                @if ($errors->has('board_members'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('board_members') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="committees" class="col-md-4 control-label"> Number of Commitees</label>

                            <div class="col-md-6">
                                <input id="committees" type="int" class="form-control" name="committees" value="{{ $institution->committees}}" required>

                                @if ($errors->has('committees'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('committees') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="qualification" class="col-md-4 control-label">What would your organization like to benefit from LEAD membership? </label>

                            <div class="col-md-6">
                                <input id="bennefit" type="text" class="form-control" name="bennefit" value="{{ $institution->bennefit}}" required>

                                @if ($errors->has('bennefit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bennefit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="declaration" class="col-md-4 control-label">Declaration</label>

                            <div class="col-md-6">
                                <input id="declaration" type="text" class="form-control" name="declaration" value="{{ $institution->declaration}}" required>

                                @if ($errors->has('declaration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('declaration') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                            <select class="form-control" name="status">
                                  
                                  <option value="0">Pending</option>
                                  <option value="1">Approved</option>
                           
                          </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Picture</label>
                            <div class="col-md-6">
                                <img src="../../{{$institution->picture }}" width="50px" height="50px"/>
                                <input type="file" id="picture" name="picture" />
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
