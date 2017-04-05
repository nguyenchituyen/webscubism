<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::select('name', $roleNameList, isset($roleId) ? $roleId : null, array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Role Action:</strong><br/>
            <strong>Ex: User:create:1|User:update:2 </strong>
            {!! Form::text('role_action', null, array('placeholder' => 'User:create:1|User:store:1','class' => 'form-control')) !!}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>