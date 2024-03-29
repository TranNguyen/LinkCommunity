<?php
    /**
     * @var $this View
     */
?>
<strong>
    <?php echo $this->Html->link('Back to Homes', array('action' => 'index'));?>
</strong>

<h2>Edit Publisher</h2>

<?php
    echo $this->Form->create('Publisher', array('action' => 'edit'));

    // hidden field to determine it is an update not a creation
    echo $this->Form->input('id', array('type' => 'hidden'));

    echo $this->Form->input('company_name', array('type'=>'text','label' => 'Company Name:', 'size'=>'60'));
    echo $this->Form->input('contact_fname',array('type'=>'text','label' => 'Contact Firstname:'));
    echo $this->Form->input('contact_sname',array('type'=>'text','label' => 'Contact Surname:'));
    echo $this->Form->input('pub_street', array('type'=>'text','label' => 'Street:'));
    echo $this->Form->input('pub_suburb', array('type'=>'text','label' => 'Suburb:'));
    echo $this->Form->input('pub_state', array('type'=>'text','label' => 'State:'));
    echo $this->Form->input('pub_pc', array('type'=>'text','label' => 'Postcode:'));
    echo $this->Form->input('phone', array('type'=>'text','label' => 'Phone:'));
    echo $this->Form->input('email', array('type'=>'text','label' => 'Email:', 'size'=>'50'));

    // submit button
    echo $this->Form->end('Update this publisher');
?>