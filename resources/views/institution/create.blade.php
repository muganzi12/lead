@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@if(Auth::check())Add new Member @else Fill in Your Details @endif</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('institution.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="organization_name" class="col-md-4 control-label">Full name of organisation</label>

                            <div class="col-md-6">
                                <input id="organization_name" type="text" class="form-control" name="organization_name" value="{{ old('organization_name') }}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="trading_name" class="col-md-4 control-label">Trading Name (if different from the one above):</label>

                            <div class="col-md-6">
                                <input id="trading_name" type="text" class="form-control" name="trading_name" value="{{ old('trading_name') }}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="business_type" class="col-md-4 control-label"> Business Type</label>

                            <div class="col-md-6">
                                <input id="business_type" type="text" class="form-control" name="business_type" value="{{ old('business_type') }}" required>

                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Type of Business</label>
                            <div class="col-md-6">
                                <select class="form-control" name="business_type">
                                  
                                        <option value="0">Corporate</option>
                                        <option value="1">Government</option>
                                        <option value="2">NGO</option>

                                 
                                </select>
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cell_phone" class="col-md-4 control-label">Contact</label>

                            <div class="col-md-6">
                                <input id="cell_phone" type="tel" class="form-control" name="cell_phone" value="{{ old('cell_phone') }}" required>

                            </div>
                        </div>
         
                        <div class="form-group">
                            <label for="others" class="col-md-4 control-label">Others (please specify)</label>

                            <div class="col-md-6">
                                <input id="others" type="text" class="form-control" name="others" value="{{ old('others') }}" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Specify your industry and business</label>
                            <div class="col-md-6">
                                <input id="business" type="text" class="form-control" name="business" value="{{ old('business') }}" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="district" class="col-md-4 control-label">District</label>

                            <div class="col-md-6">
                                <input id="district" type="text" class="form-control" name="district" value="{{ old('district') }}" required>

                            </div>
                        </div>
  
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>
                            
                           <label class="radio-inline">
                           <input type="radio" name="title" checked>Prof
                           </label>
                          <label class="radio-inline">
                          <input type="radio" name="title">Dr. (PhD)
                          </label>
                         <label class="radio-inline">
                          <input type="radio" name="title">Dr
                          </label>
                          <label class="radio-inline">
                          <input type="radio" name="title">Eng
                          </label>

                          <label class="radio-inline">
                          <input type="radio" name="title">Mr
                          </label>
                          
                          <label class="radio-inline">
                          <input type="radio" name="title">Mrs
                          </label>
                          
                          
                          <label class="radio-inline">
                          <input type="radio" name="title">Ms
                          </label>
                        </div>
            
                          <div class="form-group">
                             <label for="surname" class="col-md-4 control-label">Surname</label>

                              <div class="col-md-6">
                               <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required>

  
                                </div>
                            </div>
                        <div class="form-group">
                        <label for="firstname" class="col-md-4 control-label">First Name</label>

                               <div class="col-md-6">
                               <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required>


                               </div>
                        </div>
                        <div class="form-group">
                        <label for="other_name" class="col-md-4 control-label">Other Name</label>

                               <div class="col-md-6">
                               <input id="other_name" type="text" class="form-control" name="other_name" value="{{ old('other_name') }}" required>


                               </div>
                        </div>
                        <div class="form-group">
                        <label for="job_title" class="col-md-4 control-label">Job Title </label>

                               <div class="col-md-6">
                               <input id="job_title" type="text" class="form-control" name="job_title" value="{{ old('job_title') }}" required>


                               </div>
                        </div>
                        <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Email Address</label>

                               <div class="col-md-6">
                               <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required>


                               </div>
                        </div>
                        <div class="form-group">
                        <label for="board_members" class="col-md-4 control-label">Numbers of Board Members</label>

                               <div class="col-md-6">
                               <input id="board_members" type="int" class="form-control" name="board_members" value="{{ old('board_members') }}" required>


                               </div>
                        </div>
                        <div class="form-group">
                        <label for="committees" class="col-md-4 control-label">Numbers of commitees</label>

                               <div class="col-md-6">
                               <input id="committees" type="int" class="form-control" name="commitees" value="{{ old('commitees') }}" required>


                               </div>
                        </div>

                        <div class="form-group">
                            <label for="benefit" class="col-md-4 control-label">What would your organization like to benefit from LEAD membership? </label>
                            
                           <label class="radio-inline">
                           <input type="radio" name="benefit" checked>Board education
                           </label>
                          <label class="radio-inline">
                          <input type="radio" name="benefit">Board coaching
                          </label>
                         <label class="radio-inline">
                          <input type="radio" name="benefit">Business growth
                          </label>
                          <label class="radio-inline">
                          <input type="radio" name="benefit">Board assessment
                          </label>

                          <label class="radio-inline">
                          <input type="radio" name="benefit">Networking
                          </label>
                          
                          <label class="radio-inline">
                          <input type="radio" name="benefit">Board trend,insights and perspective
                          </label>
                          
                          
                          <label class="radio-inline">
                          <input type="radio" name="benefit">Forum
                          </label>
                        </div>
                    
                        <div class="form-group">
                        <label for="support" class="col-md-4 control-label">Declaration</label>

                               <div class="col-md-6">
                               <input id="declaration" type="text" class="form-control" name="declaration" value="{{ old('declaration') }}" required>


                               </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Picture</label>
                            <div class="col-md-6">
                                <input type="file" id="picture" name="picture" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
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
