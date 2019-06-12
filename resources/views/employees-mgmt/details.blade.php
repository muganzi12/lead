@extends('layouts.app')

@section('title')
    {{ $employee->name }} Detail
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">

            <h2><i class="fa fa-user"></i> Member Details</h2>
            <hr>

            <table class="table table-hover table-striped table-bordered mt-1">
                <tr>
                    <th>#Member ID</th>
                    <td>{{ $employee->id }}</td>
                    <th class="text-center">Photo</th>
                </tr>

                <tr>
                    <th>Name</th>
                    <td>{{ $employee->surname }}</td>
                    <td rowspan="6"><img src="{{url(''.$employee->picture) }}" alt=""
                                         class="img img-responsive"
                                         style="width: 150px; margin: 30px auto;"></td>
                </tr>

                <tr>
                    <th>Genda</th>
                    <td>@if($employee->genda == 1) Female @else Male @endif</td>
                </tr>

                <tr>
                    <th>Age</th>
                    <td>{{ $employee->age }}</td>
                </tr>

                <tr>
                    <th>Birthdate</th>
                    <td>{{ $employee->birthdate}}</td>
                </tr>

                <tr>
                    <th>Nationality</th>
                    <td>{{ $employee->nationality }}</td>
                </tr>
                <tr>
                    <th>Region</th>
                    <td>{{ $employee->region }}</td>
                </tr>

                <tr>
                    <th>Profession Qualification</th>
                    <td>{{ $employee->professional_qualification }}</td>
                </tr>
                <tr>
                    <th>Experience</th>
                    <td>{{ $employee->experience }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td> @if($employee->status == 1) Approved @else Pending @endif</td>
                </tr>

            </table>
            {!! Form::open(['route'=> ['employee-management.destroy', $employee->id], 'method' => 'DELETE']) !!}
            <a href="/employee-management" class="btn btn-success btn-sm">Back</a>
            {!! link_to_route('employee-management.edit', 'Edit', [$employee->id], ['class'=>'btn btn-info btn-sm']) !!}
            {{ Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm','onclick'=>'return confirm("Are you sure you want to delete this?")'] )  }}
         
           

            

    </div>
@endsection
