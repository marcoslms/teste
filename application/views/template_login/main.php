
<?php $this->load->view('template_login/header'); ?>
 

<link rel="stylesheet" href="<?php echo base_url("includes/assets/css/style_login.css"); ?>">
<body>

    <div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
                     
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 
                    
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" action="<?php echo base_url();?>login/process" method="post" name="process" role="search">
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="login" id="input_logar" required/>
                            <input class="form-control" type="password" name="password" placeholder="Senha" id="input_logar" required/>
                            
                        </div> <button type="submit" class="btn btn-default" id="btn_logar">Logar</button>
                         </form>
                    </ul>
                </div>


                
            </nav>

        <div class="container-mensagens" style="margin-right: auto;margin-left: auto;">
        <?php //$this->load->view('template_login/mensagens'); ?>

         <?php if(! is_null($msg)) echo $msg;?>
        </div>

	<?php  $this->load->view($content); ?>
	
    <?php $this->load->view('template_login/footer'); ?>





            