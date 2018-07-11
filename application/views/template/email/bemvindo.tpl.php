<div class="col-sm-6">

    <div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title"><b><?= "Novo Chamado ".$data['id_chamado']?></b></h3>
    </div>
    <div class="panel-body">
        
        <div class="row">

        <p><?php echo "Prezado ".$data['nome'] ?> </p>
        <p><?php echo "O chamado <strong>".$data['id_chamado']."</strong> foi inserido em ". date("d/m/Y h:i:s"); ?></p>
        <p><?php echo "Para acompanhar o chamado clique no link abaixo:<br>" ?></p>
        <p><?php echo "<a href=\'http://suporte.cathaweb.com.br\'>Acessar Sistema</a><br><br>" ?></p> 
        <p><?php echo "Atenciosamente,<br>" ?></p>
        <p><?php echo "CathaWeb.<br><br>" ?></p>

        </div>    
        
        
<br />
<br />
<br />
    </div>
    </div>
</div>

<p style="font-family: Arial, Helvetica, sans-serif; color: #9fa5ab; font-size: 12px"><?php echo "Este é um e-mail automático, não é necessário respondê-lo." ?></p>

