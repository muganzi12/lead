
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
            <h3><i class="fa fa-user-circle-o"></i> Personal Details</h3>
            <hr>
            <table class="table table-hover table-striped table-bordered mt-1">
            <tr>
                    <th>ID</th>
                    <td>{{ Auth::user()->id}}</td>
                    <td rowspan="6"><img src="{{ asset("/bower_components/AdminLTE/dist/img/robin.JPG") }}" alt=""
                                         class="img img-responsive"
                                         style="width: 80px; margin: 30px auto;"></td>
                </tr>

                <tr>
                    <th>Name</th>
                    <td>{{ Auth::user()->username}}</td>
                   
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ Auth::user()->email}}</td>
                </tr>

                
            </table>
            
        </div>
 

    </div>
@endsection
