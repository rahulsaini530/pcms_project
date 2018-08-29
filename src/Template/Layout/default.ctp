<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'PMS: Project management systems';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <!-- template css -->

    <?= $this->Html->css('assets/css/normalize.css') ?>
    <?= $this->Html->css('assets/css/bootstrap.min.css') ?>
    <?= $this->Html->css('assets/css/font-awesome.min.css') ?>
    <?= $this->Html->css('assets/css/themify-icons.css') ?>
    <?= $this->Html->css('assets/css/flag-icon.min.css') ?>
    <?= $this->Html->css('assets/css/cs-skin-elastic.css') ?>
    <?= $this->Html->css('assets/scss/style.css') ?>
    <!-- <?= $this->Html->css('assets/css/jqvmap.min.css') ?> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- end tempalte css -->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="#">Login</a></li>
                <li><img class="admin_image" src="<?=$this->request->webroot?>/img/admin.jpg" /></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="containers clearfix">
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?=$this->Url->build('/admin', true)?>"><span>PMS Admin</span></a>
                    <a class="navbar-brand hidden" href="./">
                    </a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?=$this->Url->build('/', true)?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>

                        </li>
                        <li>
                            <a href="<?=$this->Url->build(["controller" => "Project","action" => "index"]);?>"> <i class="menu-icon fa fa-align-justify"></i> Projects </a>
                        </li>
                        <li>
                            <a href="<?=$this->Url->build(["controller" => "Role","action" => "index"]);?>"> <i class="menu-icon fa fa-user"></i> Roles </a>
                        </li>
                        <li>
                            <a href="<?=$this->Url->build(["controller" => "Skills","action" => "index"]);?>"> <i class="menu-icon fa fa-certificate"></i> Skills </a>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->
    <!-- Left Panel -->
        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">

            <?= $this->fetch('content') ?>

        </div><!-- /#right-panel -->
    </div>
    <footer>
    </footer>
    <?php echo $this->Html->script('jquery-3.3.1.js', array('inline' => false)); ?>
    <?php echo $this->Html->script('main.js', array('inline' => false)); ?>
</body>
</html>
