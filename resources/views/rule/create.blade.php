<form id="createRuleForm">
    <fieldset>
        <legend>New task rule</legend>
        <table class="table table-sm table-hover">
            <tr>
                <td><label for="task" title="{{ $ruleComments['task'] }}">Task</label></td>
                <td class="ui-front">
                    <input type='hidden' name='task'>
                    <input type="text" class="form-control form-control-sm" list="ajaxDatalist" data-ac="/event-name/autocomplete/1" data-actarget="task" autocomplete="off" >
                </td>
                <td><label for="detail" title="{{ $ruleComments['detail'] }}">Detail</label></td>
                <td><input id="detail" class="form-control form-control-sm" name="detail" ></td>
            </tr>
            <tr>
                <td><label for="for_country_new" title="{{ $ruleComments['for_country'] }}">Country</label></td>
                <td class="ui-front">
                    <input type='hidden' name='for_country'>
                    <input type="text" class="form-control form-control-sm" list="ajaxDatalist" data-ac="/country/autocomplete" data-actarget="for_country" autocomplete="off">
                </td>
                <td><label for="is_active" title="{{ $ruleComments['active'] }}">Is active</label></td>
                <td>
                    <span class="form-control form-control-sm new" name="active">
                        <input type="radio" name="active" id="is_active" value="1">YES&nbsp;&nbsp;
                        <input type="radio" name="active" id="is_active" value="0">NO
                    </span>
                </td>
            </tr>
            <tr>
                <td><label for="for_origin_new" title="{{ $ruleComments['for_origin'] }}">Origin</label></td>
                <td class="ui-front">
                    <input type='hidden' name='for_origin' id='for_origin'>
                    <input type="text" class="form-control form-control-sm" list="ajaxDatalist" data-ac="/country/autocomplete" data-actarget="for_origin" autocomplete="off">
                </td>
                <td><label for="for_category_new" title="{{ $ruleComments['for_category'] }}">Category</label></td>
                <td class="ui-front">
                    <input type='hidden' name='for_category'>
                    <input type="text" class="form-control form-control-sm" list="ajaxDatalist" data-ac="/category/autocomplete" data-actarget="for_category" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td><label for="notes" title="{{ $ruleComments['notes'] }}">Notes</label></td>
                <td><textarea id="notes" class="form-control form-control-sm" name="notes"></textarea></td>
                <td><label for="for_type_new" title="{{ $ruleComments['for_type'] }}">Type</label></td>
                <td class="ui-front">
                    <input type='hidden' name='for_type'>
                    <input type="text" class="form-control form-control-sm" list="ajaxDatalist" data-ac="/type/autocomplete" data-actarget="for_type" autocomplete="off">
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>Rule details</legend>
        <table class="table table-sm table-hover">
            <tr>
                <td><label for="trigger_event_new" title="{{ $ruleComments['trigger_event'] }}">Trigger event</label></td>
                <td class="ui-front">
                    <input type='hidden' name='trigger_event'>
                    <input type="text" class="form-control form-control-sm" list="ajaxDatalist" data-ac="/event-name/autocomplete/0" data-actarget="trigger_event" autocomplete="off">
                </td>
                <td><label for="use_parent" title="{{ $ruleComments['use_parent'] }}">Use parent</label></td>
                <td>
                    <span class="form-control form-control-sm" name="use_parent">
                        <input type="radio" name="use_parent" value="1">YES&nbsp;&nbsp;
                        <input type="radio" name="use_parent" value="0">NO
                    </span>
                </td>
            </tr>
            <tr>
                <td><label for="use_before" title="{{ $ruleComments['use_before'] }}">Use before</label></td>
                <td><input type="date" class="form-control form-control-sm" name="use_before"></td>
                <td><label for="clear_task" title="{{ $ruleComments['clear_task'] }}">Clear task</label> </td>
                <td>
                    <span class="form-control form-control-sm" name="clear_task">
                        <input type="radio" name="clear_task" value="1">YES&nbsp;&nbsp;
                        <input type="radio" name="clear_task" value="0">NO
                    </span>
                </td>
            </tr>
            <tr>
                <td><label  for="use_after" title="{{ $ruleComments['use_after'] }}">Use after</label></td>
                <td><input type="date" class="form-control form-control-sm " name="use_after"></td>
                <td><label for="delete_task" title="{{ $ruleComments['delete_task'] }}">Delete task</label> </td>
                <td>
                    <span class="form-control form-control-sm" name="delete_task">
                        <input type="radio" name="delete_task" value="1">YES&nbsp;&nbsp;
                        <input type="radio" name="delete_task" value="0">NO
                    </span>
                </td>
            </tr>
            <tr>
                <td><label for="condition_event_new" title="{{ $ruleComments['condition_event'] }}">Condition event</label></td>
                <td class="ui-front">
                    <input type='hidden' name='condition_event'>
                    <input type="text" class="form-control form-control-sm" list="ajaxDatalist" data-ac="/event-name/autocomplete/0" data-actarget="condition_event" autocomplete="off">
                </td>
                <td><label for="use_priority" title="{{ $ruleComments['use_priority'] }}">Use priority</label></td>
                <td>
                    <span class="form-control form-control-sm" name="use_priority">
                        <input type="radio" name="use_priority" value="1">YES&nbsp;&nbsp;
                        <input type="radio" name="use_priority" value="0">NO
                    </span>
                </td>
            </tr>
            <tr>
                <td><label for="abort_on_new" title="{{ $ruleComments['abort_on'] }}">Abort on</label></td>
                <td class="ui-front">
                    <input type='hidden' name='abort_on'>
                    <input class="form-control form-control-sm" list="ajaxDatalist" data-ac="/event-name/autocomplete/0" data-actarget="abort_on" autocomplete="off">
                </td>
                <td><label for="responsible" title="{{ $ruleComments['responsible'] }}">Responsible</label></td>
                <td class="ui-front" id="responsible" >
                    <input type='hidden' name='responsible'>
                    <input type='text' class="form-control form-control-sm" list="ajaxDatalist" data-ac="/user/autocomplete" data-actarget="responsible" autocomplete="off">
                </td>
            </tr>
            <tr>
                <td><label for="days" title="{{ $ruleComments['days'] }}">Days</label></td>
                <td><input type='number' min="0" class=" form-control form-control-sm" name="days"></td>
                <td><label for="cost" title="{{ $ruleComments['cost'] }}">Cost</label> </td>
                <td><input class="form-control form-control-sm" name="cost"></td>
            </tr>
            <tr>
                <td><label for="months" title="{{ $ruleComments['months'] }}">Months</label></td>
                <td><input type='number' min="1" max="12" class=" form-control form-control-sm" name="months"></td>
                <td><label for="fee" title="{{ $ruleComments['fee'] }}">Fee</label> </td>
                <td><input type='text' class=" form-control form-control-sm" name="fee"></td>
            </tr>
            <tr>
                <td><label for="years" title="{{ $ruleComments['years'] }}">Years</label></td>
                <td><input class="form-control form-control-sm" type='number' name="years"></td>
                <td><label for="currency" title="{{ $ruleComments['currency'] }}">Currency</label></td>
                <td><input type="text" maxlength="3" class="form-control  form-control form-control-sm" name="currency"></td>
            </tr>
            <tr>
                <td><label for="end_of_month" title="{{ $ruleComments['end_of_month'] }}">End of month</label></td>
                <td>
                    <span class="form-control form-control-sm" name="end_of_month">
                        <input type="radio" name="end_of_month" value="1">YES&nbsp;&nbsp;
                        <input type="radio" name="end_of_month" value="0">NO
                    </span>
                </td>
            </tr>
        </table>
    </fieldset>
    <div id="error-box">
    </div>
    <button type="button" class="btn btn-danger" id="createRuleSubmit">Create rule</button>
</form>

