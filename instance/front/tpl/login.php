<div class="col-lg-12" >
    <form action="<?php l('login'); ?>" method="post">
        <div class="login " style="box-shadow:0 2px 7px rgba(0, 0, 0, 0.4)" >
            <?php
            if ($error != '') {
                ?>
                <div class="error"><img src="<?php print _MEDIA_URL ?>img/login-erroe.png" width="28" height="26" alt=" " /><strong>ERROR:</strong> The password and username you entered 
                    is incorrect. </div>
            <?php } ?>                        
            <div class="logo" style="color:white;font-weight:bold; background-color: #86B414; font-size: 32px; padding: 15px 10px;">
                <img src="<?php print _MEDIA_URL ?>img/logo.png" />    
            </div>
            <div class="fields" id="new_login" style="">
                <input type="text" name="username" id="username" placeholder="Email" required />
                <input type="password" name="password" id="password" placeholder="Password" required />
                <div>
                    <input type="submit" name="submit" value="Login" class="login" style="" />
                </div>
                <div style="clear:both">&nbsp;</div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    function changeNewLogin() {
        $("#new_login").show();
        $("#old_login").hide();
        $("#username").attr("required", "true");
        $("#password").attr("required", "true");

    }
</script>
