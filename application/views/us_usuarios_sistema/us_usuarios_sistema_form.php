

    <div class="page-header">
        <h1>Usuarios</h1>
    </div>

    <?php  

        if(isset($actionForm)){
            $acao = $actionForm; 
          $actionForm = base_url($this->router->class) . "/" . $actionForm;

        } else {
      
          $actionForm = base_url($this->router->class);
     
        }

        echo form_open( $actionForm, array('id' => 'form'));
        
        if($acao == "editar"){
            echo form_hidden('id_us', set_value('id_us', $us_usuarios_sistema['id_us']));

        }
        
     ?>


<div class="row">

    <div class="col-sm-2"></div>
    <div class="col-sm-8">

    <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><b><?= "Dados do Usuario "?></b></h3>
    </div>
    <div class="panel-body">
        
        <div class="row">

            <div class="form-group col-lg-6">
                <label>Nome</label>
                <?php  echo form_input(array('name' =>'nome_us', 'value' => set_value('nome_us', $us_usuarios_sistema['nome_us']), 'class' => 'form-control', 'placeholder' => 'Nome', 'data-msg-required' => 'Campo obrigatório', 'required'));  ?>
            </div>
            

            <div class="form-group col-lg-6">
                <div class="form-group">
                    <label>Login</label>
                    <?php  echo form_input(array('name' =>'login_us', 'value' => set_value('login_us', $us_usuarios_sistema['login_us']), 'class' => 'form-control', 'placeholder' => 'Login', 'data-msg-required' => 'Campo obrigatório', 'required'=>'required'));  ?>
                </div>
            </div>
            
            
        </div>
        
        <div class="row">
        <div class="col-sm-1"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Gravar Dados</button>
                <button type="button" class="btn btn-white btn-cons" onclick="window.location.href = '<?php echo base_url('ta_tarefas');  ?>';">Cancelar</button>
            </div>    
        </div>

    </div>
    </div>

    </div>
</div>

<?php echo form_close();?>


