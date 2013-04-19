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
            <li><?php echo $this->Html->link('Home', '/'); ?></li>
            <li><?php echo $this->Html->link('Publishers',
                array('controller'=>'publishers', 'action'=>'index'));?></li>
        </ul>
    </div>
    <div id="container">
       <h1 class="welcome">WELCOME TO TRAN PUBLISHER PAGE</h1>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/><br/>
        <br/>
        <br/><br/>
        <br/>

    </div>

    <div id="footer">
        <p>CakePhp Publisher &copy copyright 2013 - Designed by Tran Giao Nguyen All Rights Reserved</p>
    </div>


</div>

</body>
</html>

