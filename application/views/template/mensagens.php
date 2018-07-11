<?php $message =  $this->session->flashdata('message');  ?>
<?php $message_error =  $this->session->flashdata('message_error');  //echo $message."teste";?>

<?php if ($message) { ?>
    <div id="success" class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h5><strong>Sucesso!</strong></h5>
        <?php echo $this->session->flashdata('message'); ?>
    </div>
<?php } ?>

<?php if ($message_error) { ?>
    <div id="error" class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h5><strong>Erro!</strong></h5>
        <?php echo $this->session->flashdata('message_error'); ?>
    </div>
<?php } ?>

<?php   
 
    $this->session->set_flashdata('message', FALSE);
     
    $this->session->set_flashdata('message_error', FALSE);

?>