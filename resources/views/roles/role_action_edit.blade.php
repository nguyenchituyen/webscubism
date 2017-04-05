@extends('layouts.layout')
@section('title', 'User Role Edit')
@section('icon', 'icon_document_alt')
@section('page_header', 'Edit role for user'.$username)
@section('content')
    {!! Breadcrumbs::render('acl.edit', $username) !!}
    <form action="{{route('acl.store')}}" method="post" id='frmSave'>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    {{ csrf_field() }}
                    <input name="role[]" value="1" type="hidden"> <input name="role[]" value="2" type="hidden">
                    <input type="hidden" name="user_id" value="<?=$userId?>">
                    <table class="table table-striped" style="width: auto">
                        <thead>
                        <tr>
                            <th>Role</th>
                            <th>Action</th>
                            <th>All</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @foreach($rolesActions as $rolesAction)
                                        @if($role->id == $rolesAction->role_id)
                                            <input name="roleActions[]"
                                                    @foreach($userRoles as $userRole)@if($userRole->role_action_id == $rolesAction->id) checked @endif @endforeach
                                            value="{{ $role->id }},{{ $rolesAction->id }}" type="checkbox">{{ $rolesAction->action }}
                                        @endif
                                    @endforeach
                                </td>
                                <td><input type="checkbox" name="selectAll"></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2">
                                <button class="btn btn-sm btn-info" type="submit">Save</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
@stop
<script type="text/javascript">
  window.onload = function () {
    $('[name=selectAll]').click(function () {
      if ($(this).prop('checked')) {
        $(this).parent().prev().find('input').attr('checked', 'checked')
      }
      else {
        $(this).parent().prev().find('input').attr('checked', false)
      }
    })
  }
</script>