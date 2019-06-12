@extends('layouts.app')

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">List of members</h3>
        </div>
        <div class="col-sm-4">
          <a class="btn btn-primary" href="{{ route('employee-management.create') }}">Add new member</a>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <form method="POST" action="{{ route('employee-management.search') }}">
         {{ csrf_field() }}
         @component('layouts.search', ['title' => 'Search'])
          @component('layouts.two-cols-search-row', ['items' => ['First Name'], 
          'oldVals' => [isset($searchingVals) ? $searchingVals['surname'] : '']])
          @endcomponent
        @endcomponent
      </form>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th width="8%" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Picture: activate to sort column descending" aria-sort="ascending">Picture</th>
                <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Title: activate to sort column descending" aria-sort="ascending">Title</th>
                <th width="12%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Surname: activate to sort column ascending">Surname</th>
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nationality: activate to sort column ascending">Nationality</th>
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Region: activate to sort column ascending">Region</th>
                <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Contact: activate to sort column descending" aria-sort="ascending">Contact</th>
                <th width="12%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Profession Qualification: activate to sort column ascending">Profession Qualification</th>
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Qualification: activate to sort column ascending">Qualification</th>
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Experience</th>
                <th width="8%" class="sorting hidden-xs" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr role="row" class="odd">
                  <td><img src="{{url(''.$employee->picture) }}" width="50px" height="50px"/></td>
                  <td class="hidden-xs">{{ $employee->title}}</td>
                  <td class="sorting_1">{{ $employee->surname }}</td>
                  <td class="hidden-xs">{{ $employee->nationality }}</td>
                  <td class="hidden-xs">{{ $employee->region}}</td>
                  <td class="hidden-xs">{{ $employee->contact }}</td>
                  <td class="hidden-xs">{{ $employee->professional_qualification}}</td>
                  <td class="hidden-xs">{{ $employee->profession}}</td>
                  <td class="hidden-xs">{{ $employee->experience}}</td>
                  <td class="hidden-xs">{{ $employee->current_position }}</td>
                  <td class="hidden-xs"> @if($employee->status == 1) Approved @else Pending @endif </td>
                  <td>
                  <div class="input-group">
                        {!! Form::open(['route'=>['employee-management.destroy', $employee->id], 'method'=>'DELETE',]) !!}
                        {!! link_to_route('employee-management.edit','',[$employee->id],['class'=>'fa fa-pencil btn btn-primary btn-xs','title' => 'Edit Member']) !!}
                        {!! link_to_route('employee-management.show', '',[$employee->id],['class'=>'fa fa-bars btn btn-success btn-xs','title' => 'Show Member Details']) !!}
                        {{ Form::button('', ['type'=>'submit','class'=>'btn btn-danger btn-xs fa fa-trash','onclick'=>'return confirm("Are you sure you want to delete this?")','title' => 'Delete Member']) }}
                        {!! Form::close() !!}

                        {!! Form::close() !!}

                    </div>
                  </td>
              </tr>
            @endforeach
            </tbody>
            
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($employees)}} of {{count($employees)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $employees->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
  </div>
@endsection