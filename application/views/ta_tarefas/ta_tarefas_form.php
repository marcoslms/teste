

    <div class="page-header">
        <h1>Tarefas</h1>
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
            echo form_hidden('id_ta', set_value('id_ta', $ta_tarefas['id_ta']));

        }
        echo form_hidden('id_us_ta', set_value('id_us_ta', $this->session->userdata('id_usuario')));
     ?>


<div class="row">

    <div class="col-sm-2"></div>
    <div class="col-sm-8">

    <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><b><?= "Dados da Tarefa "?></b></h3>
    </div>
    <div class="panel-body">
        
        <div class="row">

            <div class="form-group col-lg-6">
                <label>Título</label>
                <?php  echo form_input(array('name' =>'titulo_ta', 'value' => set_value('titulo_ta', $ta_tarefas['titulo_ta']), 'class' => 'form-control', 'placeholder' => 'Título', 'data-msg-required' => 'Campo obrigatório', 'required'));  ?>
            </div>
            

            <div class="form-group col-lg-6">
                <div class="form-group">
                    <label>Descrição</label>
                    <?php  echo form_input(array('name' =>'desc_ta', 'value' => set_value('desc_ta', $ta_tarefas['desc_ta']), 'class' => 'form-control', 'placeholder' => 'Descrição', 'data-msg-required' => 'Campo obrigatório', 'required'=>'required'));  ?>
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


