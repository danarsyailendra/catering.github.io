    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.php">
            <img src="<?= base_url('assets/img/abc.png')?>" alt="" /> </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="<?= base_url('login/login')?>" method="post">
            <h3 class="form-title font-red sunglo">Sign In</h3>
            <?=$this->session->flashdata('alert')?>

            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
            <div class="form-actions">
                <input type="submit" class="form-control btn red-sunglo uppercase" name="submit" value="Login">                  
            </div>
        </form>

    </div>
    <div class="copyright"> 2017 © Telkom Metra. All Right Reserved </div>
    
