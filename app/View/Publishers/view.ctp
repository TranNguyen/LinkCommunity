<?php
/**
 * @var $this View
 */
?>

<html>
<head>
    <title>Post</title>
</head>
<body>
<h1>Publisher <em><?php echo $singlePub['Publisher']['company_name'];?></em> Details</h1>

<!-- create a link to return to the homepage -->
<p><?php echo $this->Html->link('Return Homes', array('action' => 'index')) ?></p>


<h2><?php echo $singlePub['Publisher']['company_name']; ?></h2>
    <table width="50%">
        <tr>
            <th width="20%">Contact</th>
            <td><?php echo $singlePub['Publisher']['contact_fname']." ".$singlePub['Publisher']['contact_sname']; ?></td>
        </tr>
        <tr>
            <th valign="top">Address</th>
            <td>
                <?php echo $singlePub['Publisher']['pub_street']."<br />".
                $singlePub['Publisher']['pub_suburb']." ".$singlePub['Publisher']['pub_state']."<br />".
                $singlePub['Publisher']['pub_pc']; ?>

            </td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?php echo $singlePub['Publisher']['phone'];?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $singlePub['Publisher']['email'];?></td>
        </tr>
    </table>
    <strong><?php echo $this->Html->link('Edit', array('action' => 'edit', $singlePub['Publisher']['id']));?></strong>
    <strong><?php echo $this->Html->link('Delete', array('action' => 'delete', $singlePub['Publisher']['id'], null, "Are you sure you want to delete? "));?></strong>

</body>
</html>