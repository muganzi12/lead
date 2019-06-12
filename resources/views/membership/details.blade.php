@extends('layouts.app')

@section('title')
    {{ $membership->organisation_name }} Detail
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">

            <h2><i class="fa fa-user"></i> Organisation  Details</h2>
            <hr>

            <table class="table table-hover table-striped table-bordered mt-1">
                <tr>
                    <th>Organisation Name</th>
                    <td>{{ $membership->organization_name }}</td>
                    <th class="text-center">Photo</th>
                </tr>

                <tr>
                    <th>Trading name</th>
                    <td>{{ $membership->trading_name }}</td>
                    <td rowspan="6"><img src="{{url(''.$membership->picture) }}" alt=""
                                         class="img img-responsive"
                                         style="width: 150px; margin: 30px auto;"></td>
                </tr>

                <tr>
                    <th>Business Type</th>
                    <td>@if($membership->business_type == 1) Goverment @else Co-operate @endif</td>
                </tr>

                

                <tr>
                    <th>Contact</th>
                    <td>{{ $membership->cell_phone}}</td>
                </tr>

                <tr>
                    <th>District</th>
                    <td>{{ $membership->district }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td> @if($membership->status == 1) Approved @else Pending @endif</td>
                </tr>

            </table>
            {!! Form::open(['route'=> ['membership.destroy', $membership->id], 'method' => 'DELETE']) !!}
            <a href="/membership" class="btn btn-success btn-sm">Back</a>
            {!! link_to_route('membership.edit', 'Edit', [$membership->id], ['class'=>'btn btn-info btn-sm']) !!}
            {{ Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm','onclick'=>'return confirm("Are you sure you want to delete this?")'] )  }}
         
           

            

    </div>
@endsection
