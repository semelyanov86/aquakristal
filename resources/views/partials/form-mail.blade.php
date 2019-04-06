<!-- RD Mailform-->
<form class="rd-form rd-mailform form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{route('store')}}">
    <div class="form-wrap">
        @csrf
        <input type="hidden" name="lastname" value="Подписчик">
        <input type="hidden" name="leadsource" value="Форма подписки">
        <input type="hidden" name="assigned_user_id" value="4x1">
        <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required">
        <label class="form-label" for="subscribe-form-2-email">{{$pages[5]->getTranslatedAttribute('excerpt', 'locale', App::getlocale())}}</label>
    </div>
    <div class="form-button">
        <button class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit"><span class="icon mdi mdi-email-outline"></span></button>
    </div>
</form>