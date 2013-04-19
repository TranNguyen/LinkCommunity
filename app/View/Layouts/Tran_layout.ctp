<?php
/**
 * @var $this View
 */
echo $this->Html->docType('xhtml-trans');
?>

<html>
<head>
    <?php echo $this->Html->css('styles'); ?> <!-- specifies with css files would be included-->
    <?php echo $this->Html->meta('icon', $this->Html->url('../img/favicon.jpg')); ?> <!-- favicon goes here-->

    <title>
        <?php echo $title_for_layout; ?>
    </title>
</head>

<body>
<div id="wrapper">
    <div id="header">
        <h1 id="slogan">Tran Nguyen</h1>
    </div>
    <div id="navigation-top">
        <ul>
            <li><?php echo $this->Html->link('home', '/'); ?></li>
            <li><?php echo $this->Html->link('publishers',
                array('controller'=>'publishers', 'action'=>'index'));?></li>
        </ul>
    </div>
    <div id="container">
        <?php echo $this->Session->flash(); ?>  <!-- out put flash messages to the browser -->

        <?php echo $this->fetch('content'); ?>  <!-- echo $content_for_layout (all views will use this variable)  -->
    </div>

    <div id="footer">
        <p>CakePHP &copy copyright 2013 - Designed by Tran Giao Nguyen All Rights Reserved</p>
    </div>


</div>

</body>
</html>

