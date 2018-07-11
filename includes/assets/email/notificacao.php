<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Passe Livre - Prefeitura de Suzano</title>
</head>

<body>
    <table width="600" align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #e2e4e6">
        <tr>
            <td>
                <img src="<?php echo base_url('includes/images/email/header.gif'); ?>" width="600" height="87" style="display: block" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td style="padding: 0 20px">
                
                <h1 style="font-family: Arial, Helvetica, sans-serif; color: #67bfe8; margin-bottom: 30px;">
                	<?php echo $assunto;?>
                </h1>

                <p style="font-family: Arial, Helvetica, sans-serif; color: #9fa5ab; margin-bottom: 30px">
                    <?php echo $mensagem;?>
                </p>

                <p style="font-family: Arial, Helvetica, sans-serif; color: #9fa5ab; margin-bottom: 10px">
                    Código: #<?php echo $codigo;?>
                </p>
                <p style="font-family: Arial, Helvetica, sans-serif; color: #9fa5ab; margin-bottom: 10px">
                    Nome: <?php echo $nome;?>
                </p>
                <p style="font-family: Arial, Helvetica, sans-serif; color: #9fa5ab; margin-bottom: 10px">
                    Descrição: <?php echo $descricao;?>
                </p>
                <p style="font-family: Arial, Helvetica, sans-serif; color: #9fa5ab; margin-bottom: 10px">
                    Autor: <?php echo $autor;?>
                </p>
                <p style="font-family: Arial, Helvetica, sans-serif; color: #9fa5ab; margin-bottom: 10px">
                    Situação: <?php echo $situacao;?>
                </p>
                <p style="font-family: Arial, Helvetica, sans-serif; color: #9fa5ab; margin-bottom: 10px">
                    Prioridade: <?php echo $prioridade;?>
                </p><p style="font-family: Arial, Helvetica, sans-serif; color: #9fa5ab; margin-bottom: 10px">
                    Responsável: <?php echo $responsavel;?>
                </p>

            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <hr style="color: #e2e4e6; background: #e2e4e6; height: 1px; border: 0" />
            </td>
        </tr>
        <tr>
            <td style="text-align: right">
                <img src="<?php echo base_url('includes/images/email/footer.gif');?>" width="570" height="96" />
            </td>
        </tr>
    </table>
    <table width="600" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <p style="font-family: Arial, Helvetica, sans-serif; color: #9fa5ab; font-size: 12px">Este é um e-mail automático, não é necessário respondê-lo.</p>
            </td>
        </tr>
    </table>
</body>
</html>