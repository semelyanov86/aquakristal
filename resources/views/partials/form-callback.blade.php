<div class="modal-content">
    <div class="modal-header">
        <h3>@lang('app.request-callback')</h3>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
    </div>
    <div class="modal-body">
        <p>@lang('app.request-callback-text')</p>
        <form class="rd-form rd-mailform form-inline form-inline-custom" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{route('store')}}">
            @csrf
            <input type="hidden" name="lastname" value="Заказ звонка">
            <input type="hidden" name="leadsource" value="Форма заказа звонка">
            <input type="hidden" name="assigned_user_id" value="4x2">
            <div class="form-wrap">
                <input class="form-input" id="header-phone" type="text" name="phone" data-constraints="@Numeric">
                <label class="form-label" for="header-phone">@lang('app.request-callback-phone')</label>
            </div>
            <div class="form-button">
                <button class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit"><span class="icon mdi mdi-phone-in-talk"></span></button>
            </div>
        </form>
    </div>
</div>