<style>

</style>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <?php
        include 'css.php';
        include 'js.php'
        ?>  
    </head>
    <!-- END HEAD -->
    <body class="<?php echo $class_body ?>" <?= $style ?>>
        <?php
        include $include;
        //echo $include;
        ?>

        <!-- END MAIN SCRIPTS -->
    </body>

</html>
</body>