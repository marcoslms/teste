<?php $this->load->view('template/header'); ?>

<?php

 if(!isset($_SESSION)) { session_start(); } 
$_SESSION['username'] = str_replace(' ','_',$this->session->userdata('nome_usuario')); // Must be already set

if(isset($actionForm)) {
    $actionForm = base_url($this->router->class) . "/" . $actionForm;
} else {
    $actionForm = base_url($this->router->class);
}
    //echo form_input(array('name' => 'base_url', 'id' =>'base_url', 'type'=>'hidden', 'value' => base_url()));
    //echo form_input(array('name' => 'controller_url', 'id' =>'controller_url', 'type'=>'hidden', 'value' => base_url($this->router->class)));
    //echo form_input(array('name' => 'actionForm', 'id' =>'actionForm', 'type'=>'hidden', 'value' => $actionForm));
    //echo form_input(array('name' => 'moduloSistema', 'id' =>'moduloSistema', 'type'=>'hidden', 'value' => $this->router->class));
?>
	
<body>
    
    <div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 

                </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                    
                    <?php 
                    $data['usuarios']  = '';//$usuarios;
                    $this->load->view('template/menu', $data); ?>
                    
               </ul>  
                
                <!-- Informações do canto direito -->

               <ul class="nav navbar-nav navbar-right">
                 <li>
                    <font size="1" color="#2F4F4F"><strong>>> Olá</strong> <?php echo $this->session->userdata('nome_usuario')?> </font><br>
                    <font size="1" color="#2F4F4F"><strong>>> Último acesso:</strong> <?php echo formatDate($this->session->userdata('dt_acesso') , 'yyyy-mm-dd hh:mm:ss', 'dd/mm/yyyy hh:mm:ss');?></font>
                </li>
                </ul>
                
                <!-- Final das Informações do canto direito -->

                </div>
                
            </nav>

    <div class="container-mensagens" style=" margin-right: auto;margin-left: auto;">
        <?php $this->load->view('template/mensagens'); ?>
    </div>

	<?php  $this->load->view($content); ?>
	
    

            </div>
</div>
</div>
<br>
<br>
<br>
<?php $this->load->view('template/footer'); ?>

