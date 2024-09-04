<?php ?>
<!DOCTYPE html>
<html>
    <html lang="en">
        <head>
            <title> the Golf Store</title>
            <link href="../style/style.css" rel="stylesheet" type="text/css"/>
            <meta Charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
        </head>
        <body>
            <?php
            $member_url = $app_path . 'member';
            $logout_url = $member_url . '?action=logout';
            if (isset($_SESSION['user']));
            ?>
            
            <div class="row mr-0 mt-n2 mb-n2">
                <div class="col-md-12">
                    <div id="headlinks">
                        <p>
                            <span class="fa fa-user"></span><b><?php echo 'Hi, ' .$_SESSION['user'][1]. ''.$_SESSION['user'][2]. '!'; ?></b>
                            &nbsp&nbsp<a href="<?php echo $logout_url; ?>"><span class="fa fa-sign-out">Logout</a>
                        </p>
                    </div>
                </div>
            </div>
        </body>
    </html>

