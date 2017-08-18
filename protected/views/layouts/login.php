<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <?php echo $content; ?>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-gift" aria-hidden="true"></i> Assistec Sorteios</h1>
                  <p>Assistec Sorteios - Powered by <a href="http://solucoesquefacilitam.com.br/">Creative Solutions</p>
                </div>
              </div>
          </section>
        </div>

        <!--<div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Franquia Pediuai</h1>
                  <p>Franquia Pediuai - Powered by <a href="http://solucoesquefacilitam.com.br/">Creative Solutions</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>-->
      </div>
    </div>
  </body>
</html>