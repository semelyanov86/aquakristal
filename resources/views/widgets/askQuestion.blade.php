<div class="section-sm section-bottom-0">
    <h3>@lang('app.ask-question')</h3>
    <!-- RD Mailform-->
    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
        <div class="row row-10">
            <div class="col-md-6">
                <div class="form-wrap">
                    <label class="form-label-outside" for="comment-first-name">First Name</label>
                    <input class="form-input" id="comment-first-name" type="text" name="name" data-constraints="@Required">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrap">
                    <label class="form-label-outside" for="comment-last-name">Last Name</label>
                    <input class="form-input" id="comment-last-name" type="text" name="name" data-constraints="@Required">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrap">
                    <label class="form-label-outside" for="comment-email">E-mail</label>
                    <input class="form-input" id="comment-email" type="email" name="email" data-constraints="@Email @Required">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrap">
                    <label class="form-label-outside" for="comment-phone">Phone</label>
                    <input class="form-input" id="comment-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                </div>
            </div>
            <div class="col-12">
                <div class="form-wrap">
                    <label class="form-label-outside" for="comment-message">Your Message</label>
                    <textarea class="form-input" id="comment-message" name="message" data-constraints="@Required"></textarea>
                </div>
            </div>
        </div>
        <button class="button button-primary button-winona" type="submit">Submit</button>
    </form>
</div>