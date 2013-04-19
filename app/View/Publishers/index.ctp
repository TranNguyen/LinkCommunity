<?php
/**
 * @var $this View
 */

?>
<html>
    <h1>Publishers List</h1>
    <?php
        // create a create button
        $urlAdd = array('action' => 'create');
        echo $this->Form->button('Create a publisher', array('onclick' => "location.href='".$this->Html->url($urlAdd)."'"));

    ?>
    <table id="pub-table">
        <tr>
            <th>ID</th>
            <th>Company Name</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <!-- here is where we loop through our $pubs array -->
        <?php foreach($Pubs as $publisher)
    {
        ?>
        <tr>
            <td>
                <?php echo $this->Html->link($publisher['Publisher']['id'], array('action' => 'view', $publisher['Publisher']['id'], $publisher['Publisher']['company_name'] ) ); ?>
            </td>
            <td><?php echo $publisher['Publisher']['company_name']; ?></td>
            <td><?php echo $publisher['Publisher']['contact_fname']." ".$publisher['Publisher']['contact_sname']?>
            </td>
            <td>
                <?php echo $publisher['Publisher']['pub_street']; ?><br />
                <?php echo $publisher['Publisher']['pub_suburb']; ?>
                <?php echo $publisher['Publisher']['pub_state']; ?><br />
                <?php echo $publisher['Publisher']['pub_pc']; ?><br />
            </td>
            <td>
                <?php
                    $editUrl = array('controller' => 'Publishers', 'action' => 'edit', $publisher['Publisher']['id'],
                        $publisher['Publisher']['company_name']);
                    echo $this->Form->button('Edit', array('onclick' => "location.href='".$this->Html->url($editUrl)."'"));
                ?>
                <?php
                    //  add a delete button
                    $deleteUrl = array('controller' => 'Publishers', 'action' => 'delete', $publisher['Publisher']['id'],
                        $publisher['Publisher']['company_name']);

                    echo $this->Form->button('Delete', array('onclick' =>
                            "if (confirm('Are you sure you want to delete this publisher?'))
                                location.href='".$this->Html->url($deleteUrl)."'
                             "));
                ?>

            </td>
        </tr>
        <?php
    }
        ?>
    </table>
</html>