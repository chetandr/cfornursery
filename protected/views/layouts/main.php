<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider-styles.css" />
<script type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.4.2.min.js" ></script>
<script type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/menu.js" ></script>
<script type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/coin-slider.js" ></script>

<title>DBSKKV : Nursery Inventory Management</title>

</head>

<body>
<div id="page">
<?php $this->widget('application.components.coinslider.coinslider')?>
<div id="header">
<div id="welcome" style="float:left;padding:10px">Welcome  <?php echo Yii::app()->user->isGuest?'Guest':Yii::app()->user->getState('title'); ?> !!</div>
<div id="Login" ><?php echo Yii::app()->user->isGuest?"<a href='index.php?r=site/login'>Login</a>":"<a href='index.php?r=site/logout'>Logout</a>"; ?></div>
</div>
 <?php $this->widget('application.components.JQuerySlideTopMenu.JQuerySlideTopMenu', array(
    'items'=>array(
        array('label'=>'Home', 'url'=>array('site/index')) ,
		array('label'=>'Stock', 'url'=>array('stock/summary'),'visible'=>Yii::app()->user->isGuest) ,
		array('label'=>'Stock', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest,
				'subs'=>array(
							  
							  array('label'=>'New Stock', 'url'=>array('stock/Create'),'visible'=>!Yii::app()->user->isGuest),
							  array('label'=>'Manage Stock', 'url'=>array('stock/admin'),'visible'=>!Yii::app()->user->isGuest),					  
	  						  array('label'=>'Summary', 'url'=>array('stock/summary')),												
							  
							  )
				),
	array('label'=>'Sales', 'url'=>'#','visible'=>!Yii::app()->user->isGuest,																												   				'subs'=>array(
							  array('label'=>'New Sales', 'url'=>array('sales/Create'),'visible'=>!Yii::app()->user->isGuest),
							   array('label'=>'List Sales', 'url'=>array('sales/admin'),'visible'=>!Yii::app()->user->isGuest)
							 )
				),	
		array('label'=>'Mortality', 'url'=>'#','visible'=>!Yii::app()->user->isGuest,
				'subs'=>array(
							  array('label'=>'New Mortality', 'url'=>array('damaged/Create'),'visible'=>!Yii::app()->user->isGuest),
							   array('label'=>'Manage Mortality', 'url'=>array('damaged/admin'),'visible'=>!Yii::app()->user->isGuest)
							 )																		
				),
		array('label'=>'Plants', 'url'=>array('damaged/Create'),'visible'=>!Yii::app()->user->isGuest,
				'subs'=>array(
							  array('label'=>'New Plant', 'url'=>array('plants/Create'),'visible'=>!Yii::app()->user->isGuest),
							   array('label'=>'Manage PLant', 'url'=>array('plants/admin'),'visible'=>!Yii::app()->user->isGuest)
							 )																		
				),
		array('label'=>'Bookings', 'url'=>'#','visible'=>!Yii::app()->user->isGuest,
					'subs'=>array(
							  array('label'=>'New Booking', 'url'=>array('bookings/create'),'visible'=>!Yii::app()->user->isGuest),
							  array('label'=>'List Bookings', 'url'=>array('bookings/admin'),'visible'=>!Yii::app()->user->isGuest),
							  array('label'=>'Contacts', 'url'=>'#','visible'=>!Yii::app()->user->isGuest,
										'subs'=>array(
													 array('label'=>'New Contact', 'url'=>array('Contacts/create'),'visible'=>!Yii::app()->user->isGuest),
													  array('label'=>'Manage Contacts', 'url'=>array('Contacts/admin'),'visible'=>!Yii::app()->user->isGuest)
												)																				  
									)
							 )																		
				),
	    array('label'=>'Contact', 'url'=>array('site/contact')),
    ),
)); ?>

</div><!-- page -->
<div >
<?php echo $content; ?>
<div id="poweredBy" style="position:absolute;bottom:0px; right:0px; float:right;background:#3F84A4;color:#FFF;padding:2px;font-size:10px">Powered By TechTide Technologies and YiiFramework</div>
</div>
<script type="text/javascript">
$(document).ready(
		function(){
			$('#poweredBy').css('bottom',0);
			}
			);
$(document).scroll(
		function(){
			if($(document).scrollTop() > 0 )
				$('#poweredBy').css('bottom',-($(document).scrollTop()));
			}
			);
</script>
</body>

</html>