<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : ''}}">
    {!! Form::label('parent_id', 'Parent', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
          <select class="form-control" name="parent_id">
                <option value=0>---None---</option>    
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
          {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
