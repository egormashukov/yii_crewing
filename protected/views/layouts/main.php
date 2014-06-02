<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $this->pageTitle ?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo CHtml::cssFile(Yii::app()->baseUrl.'/static/css/theme.css'); ?>
    <?php echo CHtml::cssFile(Yii::app()->baseUrl.'/static/lib/bootstrap/css/bootstrap.css'); ?>
    <?php echo CHtml::cssFile(Yii::app()->baseUrl.'/static/lib/font-awesome/css/font-awesome.css'); ?>
    <?php echo CHtml::scriptFile(Yii::app()->baseUrl.'/static/lib/jquery-1.7.2.min.js')?>
    <?php echo CHtml::scriptFile('http://code.jquery.com/jquery-1.9.1.js')?>
    <?php echo CHtml::scriptFile('http://code.jquery.com/ui/1.10.4/jquery-ui.js')?>
    <?php echo CHtml::scriptFile('http://html5shim.googlecode.com/svn/trunk/html5.js')?>
    <?php echo CHtml::cssFile('http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css'); ?>
</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav pull-left">
            <li><a href="<?php echo $this->createUrl('//admin/home/index') ?>">Home</a></li>
            <li><a href="<?php echo $this->createUrl('//admin/home/search') ?>">Search</a></li>
            <li><a href="<?php echo $this->createUrl('//admin/selected/index') ?>">Selected</a></li>
            <li><a href="<?php echo $this->createUrl('//admin/vacancies/index') ?>">Vacancies</a></li>
                <?php if (!Yii::app()->user->isGuest) : ?>  
                    <li><a>|</a></li>
                    <li><a href="<?php echo $this->createUrl('//admin/settings/index') ?>">Settings</a></li>
                    <li><a href="<?php echo $this->createUrl('//admin/logs/index') ?>">Logs</a></li>
                    <li><a href="<?php echo $this->createUrl('//admin/operators/index') ?>">Operators</a></li>
                    <li><a href="<?php echo $this->createUrl('//admin/ips/index') ?>">IPs</a></li>
                <?php endif; ?>
        </ul>

        <?php if (!Yii::app()->user->isGuest) : ?>
            <ul class="nav pull-right">
                <li id="fat-menu" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i>
                                <span>'.Yii::app()->user.'</span>';
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="/admin/users/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>

        <?php endif; ?>
        <span class="pull-right page-main-title">
            <?php echo ucfirst(Yii::app()->getController()->getId()) ?>
        </span>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row-fluid">
            <?php echo $content; ?>
        </div>
    </div>
</div>
</body>
</html>