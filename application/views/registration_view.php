<form class="reg_form" action="registration/enter" method="post">
        <span>
            <label>email:<br></label>
            <input name="email" type="text" size="30" maxlength="30">
        </span>
        <br>
        <span>
            <label>password:<br></label>
            <input name="password" type="password" size="30" maxlength="30">
        </span><br>
        <div class="g-recaptcha" data-sitekey="6LfOswoUAAAAAGntCXb1kY6lc6H0LOLQfOpbdyWl"></div>
        <span>
            <button type="submit"><i class="fa fa-male" aria-hidden="true"></i> Зарегистрироваться!</button>
        </span>

    </form>
    <p>
    	<?
    	echo $data;
    	?>
    </p>