<html>
<head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
<link rel='stylesheet prefetch'  href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style.css" />

</head>

<body>
    <div class="wrapper">
            <?php echo $content; ?>
    </div>

<script type="text/javascript">
<!--
  document.login.username.focus();
//-->
</script>
</body>
</html>
