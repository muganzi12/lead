@extends('layouts.app')

@section('content')



<div class="col-md-6 col-lg-6 col-md-offset-3  col-lg-offset-3" style="background: white;">
<h1>Update Member </h1>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" >

      <form method="post" action="{{ route('bio.update',[$bio->id]) }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="put">

                            <div class="form-group">
                                <label for="bio-name">Name<span class="required">*</span></label>
                                <input   placeholder="Enter name"  
                                          id="bio-name"
                                          required
                                          name="name"
                                          spellcheck="false"
                                          class="form-control"
                                          value="{{ $bio->name }}"
                                           />
                            </div>
                            <div class="form-group">
                                <label for="bio-email">Email<span class="required">*</span></label>
                                <input   placeholder="Enter Email"  
                                          id="bio-name"
                                          required
                                          name="email"
                                          spellcheck="false"
                                          class="form-control"
                                          value="{{ $bio->email }}"
                                           />
                            </div>
                            <div class="form-group">
                                <label for="bio-sex">Sex<span class="required">*</span></label>
                                <input   placeholder="Enter Sex"  
                                          id="bio-name"
                                          required
                                          name="sex"
                                          spellcheck="false"
                                          class="form-control"
                                          value="{{ $bio->sex }}"
                                           />
                            </div>
                            <div class="form-group">
                                <label for="bio-age">Age<span class="required">*</span></label>
                                <input   placeholder="Enter Sex"  
                                          id="bio-name"
                                          required
                                          name="age"
                                          spellcheck="false"
                                          class="form-control"
                                          value="{{ $bio->age }}"
                                           />
                            </div>
                            <div class="form-group">
                                <label for="bio-phone_number">Phone Number<span class="required">*</span></label>
                                <input   placeholder="Enter Phone Number"  
                                          id="bio-phone_number"
                                          required
                                          name="phone_number"
                                          spellcheck="false"
                                          class="form-control"
                                          value="{{ $bio->phone_number}}"
                                           />
                            </div>
                            <div class="form-group">
                                <label for="bio-address">Address<span class="required">*</span></label>
                                <input   placeholder="Enter Address"  
                                          id="bio-address"
                                          required
                                          name="address"
                                          spellcheck="false"
                                          class="form-control"
                                          value="{{ $bio->address}}"
                                           />
                            </div>
                         
                            <div class="form-group">
                                <label for="bio-content">Excutive Summarry</label>
                                <textarea placeholder="Enter excutive summarry" 
                                          style="resize: vertical" 
                                          id="bio-content"
                                          name="summarry"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                          {{ $bio->summarry }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="bio-content">Core strengths</label>
                                <textarea placeholder="Enter core strengths" 
                                          style="resize: vertical" 
                                          id="bio-content"
                                          name="strengths"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                          {{ $bio->strengths }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="bio-content">Achievements</label>
                                <textarea placeholder="Enter achievements" 
                                          style="resize: vertical" 
                                          id="bio-content"
                                          name="achievements"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                          {{ $bio->achievements }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="bio-content">Experience</label>
                                <textarea placeholder="Enter experience" 
                                          style="resize: vertical" 
                                          id="bio-content"
                                          name="experience"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                          {{ $bio->experience }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="bio-content">Education</label>
                                <textarea placeholder="Enter education" 
                                          style="resize: vertical" 
                                          id="bio-content"
                                          name="education"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                          {{ $bio->education }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="bio-content">References</label>
                                <textarea placeholder="Enter references" 
                                          style="resize: vertical" 
                                          id="bio-content"
                                          name="references"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                          {{ $bio->references }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </div>
                        </form>
   

      </div>
</div>


<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <!--<div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/bio/{{ $bio->id }}"><i class="fa fa-building-o" aria-hidden="true"></i>
               View members</a></li>
              <li><a href="/bio"><i class="fa fa-building" aria-hidden="true"></i> All members</a></li>
              
            </ol>
          </div>

          <!--<div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
            </ol>
          </div> -->
        </div>


    @endsection