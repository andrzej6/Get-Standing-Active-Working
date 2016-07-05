<div id='dialog' title='JOIN US'>


    <div class="qreg-cont">
        <form id="qreg-form">
            {{csrf_field()}}
            <div class="qreg-header">For latest news / updates and supplier offers please sign up for our
                newsletter (six per year). Subscribe here:
            </div>
            <fieldset>

                <label for="email">Email</label>
                <input type="text" name="email1" id="email1" value="" class="text ui-widget-content ui-corner-all" required>
                <div class="qreg-err">&nbsp;</div>

                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
            </fieldset>
            <br/>
            <div class="qreg-note">View our <a href="http://getbritainstanding.org/privacy.php">privacy policy</a>. By completing this form , you will be subscribed to our email offer service.
                You may unsubscribe at any time.
            </div>
        </form>


    </div>

</div>