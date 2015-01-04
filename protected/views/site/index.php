<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php if (!Yii::app()->user->isGuest): ?> 
	<p> 
		Hi,<?php echo CHtml::encode(Yii::app()->user->Username); ?> You last logged in on <?php echo date('l, F d, Y, g:i a', Yii::app()->user->lastLoginTime); ?>. 
	</p> 
<?php endif; ?>
