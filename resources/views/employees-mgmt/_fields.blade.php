<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name') !!}
    {!! Form::text('name', $client->name, ['class' => 'form-control', 'placeholder' => 'Member Name']) !!}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
    {!! Form::label('address') !!}
    {!! Form::address('addres', $employee->address, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
    <span class="text-danger">{{ $errors->has('address')  ? $errors->first('address') : ''}}</span>
</div>

<div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
    {!! Form::label('age') !!}
    {!! Form::text('age', $client->phone,['class' => 'form-control', 'placeholder' => 'Age']) !!}
    <span class="text-danger">{{ $errors->has('age') ? $errors->first('age') : '' }}</span>
</div>

<div class="form-group">
    {!! Form::label('picture') !!}
    {!! Form::file('picture', $employee->picture, ['class' => 'form-control']) !!}
    <span class="text-danger">{{ $errors->has('picture') ? $errors->first('picture') : '' }}</span>
    <div id="thumb-output"></div>
</div>
