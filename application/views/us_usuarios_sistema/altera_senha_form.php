

    <div class="page-header">
        <h1>Alterar Senha</h1>
    </div>

    <?php  

        if(isset($actionForm)){

          $actionForm_inicio = $actionForm;  
          $actionForm = base_url($this->router->class) . "/" . $actionForm;

        } else {
      
          $actionForm = base_url($this->router->class);
     
        }

        echo form_open( $actionForm, array('id' => 'form'));

        echo form_hidden('id_usuario', set_value('id_usuario', $us_usuarios_sistema['id_usuario']));


     ?>


<div class="row">

    <div class="col-sm-2"></div>
    <div class="col-sm-8">

    <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><b><?= "Insira a nova senha desejada."?></b></h3>
    </div>
    <div class="panel-body">

        <div class="row">

        <div class="form-group col-lg-6">    
            <div class="form-group">
                <label>Nova Senha</label>
                <?php 
                     //echo form_input(array('name' =>'senha', 'value' => '', 'class' => 'form-control', 'placeholder' => 'Senha', 'data-msg-required' => 'Campo obrigatório', 'required'=>'required', 'type' => 'password'));  
                
                ?>

                <input class="form-control" type="password" required="required" data-msg-required="Campo obrigatório" placeholder="Senha" value="" name="senha">
                </div>
        </div>
                
        </div>
        
    </div>
        
        <div class="row">
        <div class="col-sm-1"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Gravar Dados</button>
                <button type="button" class="btn btn-white btn-cons" onclick="window.location.href = '<?php echo base_url('admin_chamados');  ?>';">Cancelar</button>
         
            </div>    
        </div>

    </div>
    </div>

    </div>
<!-- </div>         -->




<?php echo form_close();?>

