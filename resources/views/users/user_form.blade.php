<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Password:</strong></br>
            {!! Form::password('password', null, array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Password confirm:</strong></br>
            {!! Form::password('password_confirmation', null, array('placeholder' => 'Password Confirm','class' => 'form-control')) !!}
        </div>
        {{ Form::hidden('hdEmail', isset($hdEmail) ? $hdEmail: '') }}
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>