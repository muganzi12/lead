@extends('layouts.app')

@section('content')
<div class="bg-white p-xs-y-4 border-b">
      
    <div class="bg-soft p-xs-y-5">
        <div class="container m-xs-b-4">
            <div class="m-xs-b-6">
                <h2 class="m-xs-b-3 text-base wt-medium text-dark-soft"></h2>
                
                <div class="row">

                <form method="POST" action="{{ route('bio.search') }}">
                       {{ csrf_field() }}
                   @component('layouts.search', ['title' => 'Search'])
                   @component('layouts.two-cols-search-row', ['items' => ['First Name'], 
                  'oldVals' => [isset($searchingVals) ? $searchingVals['firstname'] : '', isset($searchingVals) ? $searchingVals['age'] : '']])
                  @endcomponent
                  @endcomponent
                   </form>
                    @foreach ($employees as $employee)
                    <div class="col-xs-12 col-lg-4">
                        <div class="card m-xs-b-4">
                            <div class="card-section">
                                <div class="m-xs-b-4">
                                    <div class="m-xs-b-2">
                                    <img src="{{url(''.$employee->picture) }}" class="img-circle" width="80px" height="80px"/>
                                        <h2 class="text-lg wt-bold">{{ $employee->firstname }}</h2>
                                        <h4 class="text-lg wt-bold">{{ $employee->position }}</h4>
                                        <p class="wt-medium text-dark-soft text-ellipsis">Address: {{ $employee->address }}</p>
                                    </div>
                                    <p class="text-sm m-xs-b-2">
                                       
                                       Street: {{ $employee->zip}} &ndash; {{ $employee->address }}
                                    </p>
                                    <p class="text-sm">
                                       
                                     Born:  {{ $employee->birthdate }}
                                   </p>
                                    <p class="text-sm">
                                       
                                        {{ $employee->age }} years
                                    </p>
                             
                                </div>
                                <div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
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
            
        </div>
    </div>
    @endsection