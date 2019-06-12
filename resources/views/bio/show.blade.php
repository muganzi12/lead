@extends('layouts.app')

@section('content')


     
     <div class="col-md-8 col-lg-6 col-md-offset-3  col-lg-offset-3 ">
      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <!-- Jumbotron -->
      <div class="jumbotron" >
        <h2>{{ $bio->name }}</h2>
        <p class="lead">{{ $bio->email }}</p>
        <p class="lead">{{ $bio->sex }}</p>
        <p class="lead">{{ $bio->sex }}</p>
        <p class="lead">{{ $bio->age}}</p>
        <p class="lead">{{ $bio->phone_number }}</p>
        <p class="lead">{{ $bio->address }}</p>
        <p class="lead">{{ $bio->summary}}</p>
        <p class="lead">{{ $bio->strengths}}</p>
        <p class="lead">{{ $bio->achievemnts}}</p>
        <p class="lead">{{ $bio->experience }}</p>
        <p class="lead">{{ $bio->education }}</p>
        <p class="lead">{{ $bio->references }}</p>
       <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
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
              <li><a href="/bio/{{ $bio->id }}/edit">Edit</a></li>
              <li><a href="/bio">Members</a></li>
              <li><a href="/bio/create">Add member</a></li>
            
            <br/>
            
            
              <li>

                  
              <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this Member?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>

              <form id="delete-form" action="{{ route('bio.destroy',[$bio->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>

 
              
              
              </li>

              <!-- <li><a href="#">Add new member</a></li> -->
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