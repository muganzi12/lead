@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update member</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('employee-management.update', ['id' => $employee->id]) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $employee->title }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Surname</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ $employee->surname }}" required>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('othername') ? ' has-error' : '' }}">
                            <label for="othername" class="col-md-4 control-label">Othername</label>

                            <div class="col-md-6">
                                <input id="othername" type="text" class="form-control" name="othername" value="{{ $employee->othername }}" required>

                                @if ($errors->has('othername'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('othername') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                            <label for="genda" class="col-md-4 control-label">Genda</label>

                            <div class="col-md-6">
                                <input id="genda" type="text" class="form-control" name="genda" value="{{ $employee->genda }}" required autofocus>

                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="nationality" class="col-md-4 control-label">Nationality</label>

                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control" name="nationality" value="{{ $employee->nationality }}" required>

                                @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                            <label for="region" class="col-md-4 control-label">Region</label>

                            <div class="col-md-6">
                                <input id="region" type="text" class="form-control" name="region" value="{{ $employee->region}}" required>

                                @if ($errors->has('region'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                            <label for="nationality" class="col-md-4 control-label">Nationality</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control" name="birthdate" value="{{ $employee->birthdate }}" required>

                                @if ($errors->has('birthdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="contact" class="col-md-4 control-label">Contact</label>

                            <div class="col-md-6">
                                <input id="contact" type="tel" class="form-control" name="contact" value="{{ $employee->contact }}" required>

                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="professional_qualification" class="col-md-4 control-label">Profession Qualification</label>

                            <div class="col-md-6">
                                <input id="professional_qualification" type="text" class="form-control" name="professional_qualification" value="{{ $employee->professional_qualification }}" required>

                                @if ($errors->has('professional_qualification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('professional_qualification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="experience" class="col-md-4 control-label">Experience</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control" name="experience" value="{{ $employee->experience }}" required>

                                @if ($errors->has('experience'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="critical_skills" class="col-md-4 control-label">Critical Skills</label>

                            <div class="col-md-6">
                                <input id="critical-skills" type="text" class="form-control" name="critical_skills" value="{{ $employee->critical_skills }}" required>

                                @if ($errors->has('critical_skills'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('critical_skills') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="cv" class="col-md-4 control-label">Cv</label>

                            <div class="col-md-6">
                                <input id="cv" type="text" class="form-control" name="cv" value="{{ $employee->cv}}" required>

                                @if ($errors->has('cv'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cv') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="availability" class="col-md-4 control-label">Availability</label>

                            <div class="col-md-6">
                                <input id="availability" type="date" class="form-control" name="availability" value="{{ $employee->avaibility}}" required>

                                @if ($errors->has('availability'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('availability') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="personal_circumstances" class="col-md-4 control-label">Personal Circumstances</label>

                            <div class="col-md-6">
                                <input id="personal_circumstances" type="text" class="form-control" name="personal_circumstances" value="{{ $employee->personal_circumstances}}" required>

                                @if ($errors->has('personal_circumstances'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('personal_circumstances') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="adverse_circumstances" class="col-md-4 control-label">Adverse Circumstances</label>

                            <div class="col-md-6">
                                <input id="adverse_circumstances" type="text" class="form-control" name="adverse_circumstances" value="{{ $employee->adverse_circumstances}}" required>

                                @if ($errors->has('adverse_circumstances'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adverse_circumstances') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="profession" class="col-md-4 control-label">Profession</label>

                            <div class="col-md-6">
                                <input id="profession" type="text" class="form-control" name="profession" value="{{ $employee->profession}}" required>

                                @if ($errors->has('profession'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profession') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                           
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="occupation" class="col-md-4 control-label">Occupation</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control" name="occupation" value="{{ $employee->occupation}}" required>

                                @if ($errors->has('occupation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="qualification" class="col-md-4 control-label">Qualification</label>

                            <div class="col-md-6">
                                <input id="qualification" type="text" class="form-control" name="qualification" value="{{ $employee->qualification}}" required>

                                @if ($errors->has('occupation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="qualification" class="col-md-4 control-label">Qualification</label>

                            <div class="col-md-6">
                                <input id="qualification" type="text" class="form-control" name="qualification" value="{{ $employee->qualification}}" required>

                                @if ($errors->has('qualification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('qualification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="current_directorship" class="col-md-4 control-label">Current Directorship</label>

                            <div class="col-md-6">
                                <input id="current_directorship" type="text" class="form-control" name="current_directorship" value="{{ $employee->current_directorship}}" required>

                                @if ($errors->has('current_directorship'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_directorship') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="trainings" class="col-md-4 control-label">Trainings</label>

                            <div class="col-md-6">
                                <input id="trainings" type="text" class="form-control" name="trainings" value="{{ $employee->trainings}}" required>

                                @if ($errors->has('trainings'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('trainings') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="current_position" class="col-md-4 control-label">Current Position</label>

                            <div class="col-md-6">
                                <input id="current_position" type="text" class="form-control" name="current_position" value="{{ $employee->current_position}}" required>

                                @if ($errors->has('trainings'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="sector" class="col-md-4 control-label">Sector</label>

                            <div class="col-md-6">
                                <input id="sector" type="text" class="form-control" name="sector" value="{{ $employee->sector}}" required>

                                @if ($errors->has('sector'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sector') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="industry" class="col-md-4 control-label">Industry</label>

                            <div class="col-md-6">
                                <input id="industry" type="text" class="form-control" name="industry" value="{{ $employee->industry}}" required>

                                @if ($errors->has('industry'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('industry') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="int" class="form-control" name="age" value="{{ $employee->age}}" required>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
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
                                <img src="../../{{$employee->picture }}" width="50px" height="50px"/>
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
