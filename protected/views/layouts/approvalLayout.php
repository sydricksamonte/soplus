<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="language" content="en" />

  <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon" >

  <!-- blueprint CSS framework -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
  <!--[if lt IE 8]>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-2.0.6.min.js"></script>

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="wrapper">

  <header id="header">
    <div id="logo"><?php echo CHtml::link(CHtml::encode(Yii::app()->name), '/'); ?></div>

    <nav id="mainmenu">
      <?php
        $menuItems = array(
          array('label'=>'Home', 'url'=>array('/site/index')),
          array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
          #array('label'=>'Contact', 'url'=>array('/site/contact')),
          array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		  array('label'=>'Data Entry', 'url'=>array('/somain/admin'), 'visible'=>!Yii::app()->user->isGuest),
          array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
        );
      ?>
      <?php $this->widget('zii.widgets.CMenu',array(
        'items'=>$menuItems,
        'firstItemCssClass'=>'first',
        'lastItemCssClass'=>'last',
      )); ?>
    </nav><!-- mainmenu -->
  </header><!-- header -->

  <div id="main-wrapper"><div style="background-color:white;padding:10px;"><div id="main" role="main">
    <?php echo $content; ?>
  </div></div><!-- main -->

  <footer id="footer">
    <nav id="footermenu">
      <?php $this->widget('zii.widgets.CMenu',array('items'=>
	  array(
          array('label'=>'Home', 'url'=>array('/site/index')), 
		  array('label'=>'Brands', 'url'=>array('/detailbrand/admin'), 'visible'=>!Yii::app()->user->isGuest),
		  array('label'=>'Data Entry', 'url'=>array('/sodetail/admin'), 'visible'=>!Yii::app()->user->isGuest),
		  array('label'=>'SO Types', 'url'=>array('/tblsotype/admin'), 'visible'=>!Yii::app()->user->isGuest), 
		  array('label'=>'Lastnum', 'url'=>array('/lastnum/admin'), 'visible'=>!Yii::app()->user->isGuest),
		  array('label'=>'Lexmark Items', 'url'=>array('/lexmarkitems/admin'), 'visible'=>!Yii::app()->user->isGuest),
          array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
        )
	)); ?>
    </nav>
    <div class="content">
      <?php echo 'Unison Computer Systems, Inc.';?>
    </div>
  </footer><!-- footer -->

</div><!-- wrapper -->

</body>
</html>
