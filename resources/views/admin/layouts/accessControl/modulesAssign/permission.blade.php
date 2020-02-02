<table class="table table-bordered table-hover">
    @foreach($modules as $module)
        <thead>
        <tr class="bg-info">
            <td>{{ $module->module_name }}</td>
            <td>Create</td>
            <td>Read</td>
            <td>Update</td>
            <td>Delete</td>
            <td>Status</td>
        </tr>
        </thead>
        <tbody>
        @foreach($moduleLinks as $link)
            @if($module->module_id===$link->module_id)
                <tr data-link="{{ $link->module_link_id }}" data-group="{{ $userGroupId }}">
                    <td>{{ $link->module_link_name }}</td>
                    <td><input type="checkbox" class="create-permission" data-permission="C"  @if($link->create_fg == 1 && $link->user_group_id==$userGroupId) checked @endif></td>
                    <td><input type="checkbox" class="create-permission" data-permission="R"  @if($link->read_fg   == 1 && $link->user_group_id==$userGroupId) checked @endif></td>
                    <td><input type="checkbox" class="create-permission" data-permission="U"  @if($link->update_fg == 1 && $link->user_group_id==$userGroupId) checked @endif></td>
                    <td><input type="checkbox" class="create-permission" data-permission="D"  @if($link->delete_fg == 1 && $link->user_group_id==$userGroupId) checked @endif></td>
                    <td><input type="checkbox" class="create-permission" data-permission="AS" @if($link->active_fg == 1 && $link->user_group_id==$userGroupId) checked @endif></td>
                 </tr>
            @endif
        @endforeach
        </tbody>
    @endforeach
</table>
