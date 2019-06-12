@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@if(Auth::check())Add new Member @else Fill in Your Details @endif</div>
                <table class="table">
                  
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('employee-management.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <tr>
                        <td>
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <label for="surname" class="col-md-4 control-label">Surname</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                            </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            </div>
                        </div>
                        </td>
                         <td>
                        <div class="form-group">
                            <label for="othername" class="col-md-4 control-label">Othername</label>

                            <div class="col-md-6">
                                <input id="othername" type="text" class="form-control" name="othername" value="{{ old('othername') }}" required>

                               
                            </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Genda</label>
                            <div class="col-md-6">
                                <select class="form-control" name="genda">
                                  
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                 
                                </select>
                               
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <label for="nationality" class="col-md-4 control-label">Nationality</label>

                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" required>

                            </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <label for="contact" class="col-md-4 control-label">Contact</label>

                            <div class="col-md-6">
                                <input id="contact" type="tel" class="form-control" name="contact" value="{{ old('contact') }}" required>

                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <label for="age" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}" required>

                            </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <label for="region" class="col-md-4 control-label">Region</label>

                            <div class="col-md-6">
                                <input id="region" type="text" class="form-control" name="region" value="{{ old('region') }}" required autofocus>

                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Religion</label>
                            <div class="col-md-6">
                                <select class="form-control" name="religion">
                                  
                                        <option value="0">Catholic</option>
                                        <option value="1">Anglican</option>
                                        <option value="2">Islam</option>
                                        <option value="3">Pentecostal</option>
                                        <option value="3"> Seventh-day Adventist</option>
                                        <option value="3"> Eastern Orthodox</option>
                                        
                                 
                                 
                                </select>
                               
                            </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <label for="professional_qualification" class="col-md-4 control-label">Professional Qualification</label>

                            <div class="col-md-6">
                                <input id="professional_qualification" type="text" class="form-control" name="professional_qualification" value="{{ old('professional_qualification') }}" required>

                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Experience</label>
                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control" name="experience" value="{{ old('experience') }}" required>

                            </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Critical Skills</label>
                            <div class="col-md-6">
                                <input id="critical_skills" type="text" class="form-control" name="critical_skills" value="{{ old('critical_skills') }}" required>

                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Cv</label>
                            <div class="col-md-6">
                                <input id="cv" type="file" class="form-control" name="cv" value="{{ old('cv') }}" required>

                            </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <label for="availability" class="col-md-4 control-label">Availability</label>

                            <div class="col-md-6">
                                <input id="availabity" type="date" class="form-control" name="availability" value="{{ old('availabilty') }}" required>

                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                            <label for="marital_status" class="col-md-4 control-label">Marital Status</label>
                            
                           <label class="radio-inline">
                           <input type="radio" name="marital_status" checked>Single
                           </label>
                          <label class="radio-inline">
                          <input type="radio" name="marital_status">Married
                          </label>
                         <label class="radio-inline">
                          <input type="radio" name="marital_status">Divorsed
                          </label>
  
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of Birth</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" value="{{ old('birthdate') }}" name="birthdate" class="form-control pull-right" id="birthDate" required>
                                </div>
                            </div>
                        </div>
                        </td>
                        <td>
                          <div class="form-group">
                             <label for="adverse_circumstances" class="col-md-4 control-label">Adverse Cirmustances</label>

                              <div class="col-md-6">
                               <input id="adverse_circumstances" type="text" class="form-control" name="adverse_circumstances" value="{{ old('adverse_circumstances') }}" required>

  
                                </div>
                            </div>
                         </td>
                         </tr>
                         <tr>
                         <td>
                        <div class="form-group">
                        <label class="col-md-4 control-label">Do you have children</label>
                            <div class="col-md-6">
                                <select class="form-control" name="children">
                                  
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                 
                                </select>
                               
                            
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                        <label for="profession" class="col-md-4 control-label">Profession</label>

                               <div class="col-md-6">
                               <input id="profession" type="text" class="form-control" name="profession" value="{{ old('profession') }}" required>


                               </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                        <label for="occupation" class="col-md-4 control-label">Occupation</label>

                               <div class="col-md-6">
                               <input id="occupation" type="text" class="form-control" name="occupation" value="{{ old('occupation') }}" required>


                               </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                        <label for="qualification" class="col-md-4 control-label">Qualification</label>

                               <div class="col-md-6">
                               <input id="qualification" type="text" class="form-control" name="qualification" value="{{ old('qualification') }}" required>


                               </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                        <label for="current_directorship" class="col-md-4 control-label">Current Directorship</label>

                               <div class="col-md-6">
                               <input id="current_directorship" type="text" class="form-control" name="current_directorship" value="{{ old('current_directorship') }}" required>


                               </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                        <label for="trainings" class="col-md-4 control-label">Trainings</label>

                               <div class="col-md-6">
                               <input id="trainings" type="text" class="form-control" name="trainings" value="{{ old('trainings') }}" required>


                               </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                        <label for="current_position" class="col-md-4 control-label">Current Position</label>

                               <div class="col-md-6">
                               <input id="current_position" type="text" class="form-control" name="current_position" value="{{ old('current_position') }}" required>


                               </div>
                        </div>
                         </td>
                         <td>
                        <div class="form-group">
                        <label for="sector" class="col-md-4 control-label">Sector</label>

                               <div class="col-md-6">
                               <input id="sector" type="text" class="form-control" name="sector" value="{{ old('sector') }}" required>


                               </div>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                        <label for="industry" class="col-md-4 control-label">Industry</label>

                               <div class="col-md-6">
                               <input id="industry" type="text" class="form-control" name="industry" value="{{ old('industry') }}" required>


                               </div>
                        </div>

                        </td>
                        <td>
                     
                       <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                <select class="form-control" name="status">
                                  
                                        <option value="0">Pending</option>
                                        <option value="1">Approved</option>
                                 
                                </select>
                               
                            </div>
                        </div>
                        </td>
                       
                        </tr>
                        <tr>
                        <td>
                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Picture</label>
                            <div class="col-md-6">
                                <input type="file" id="picture" name="picture" required >
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="form-group">
                        <label for="declaration" class="col-md-4 control-label">Declaration</label>

                               <div class="col-md-6">
                               <input type="checkbox" name="declaration" value="{{ old('declaration') }}">declare that the particulars stated in this application and the documents attached are true and authentic, and to the best of my knowledge and belief, I have not withheld any material fact. I undertake to settle registration fees before my application is accepted. I accept and acknowledge the terms and conditions; and agree to abide by them.
                                <br>


                               </div>
                        </div>
                        </td>
                        </tr>
                        <td>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                          </td>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
