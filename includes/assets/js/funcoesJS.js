// JavaScript Document

// Exibe uma div informando que o registro foi atualizado
function showConfirmUpdate(value){
	document.getElementById('confirm_update').style.display = value;
	document.getElementById('confirm_update').innerHTML = "<img src='imagens/clean.png' align='absbottom' width='16' height='16' />&nbsp;&nbsp;Registro atualizado com sucesso!";

	setTimeout("showConfirmUpdate('none')", 2500);
}


// Exibe uma div informando que o registro foi atualizado
function showConfirmInsert(value){
	document.getElementById('confirm_insert').style.display = value;
	document.getElementById('confirm_insert').innerHTML = "<img src='imagens/clean.png' align='absbottom' width='16' height='16' />&nbsp;&nbsp;Registro inserido com sucesso!";

	setTimeout("showConfirmInsert('none')", 2500);
}

// carrega o valor do serviço selecionado
function loadValor(){
	var ajax = new Ajax();
	idx_servico = document.getElementById('serv_cod_servico').selectedIndex;
	id_servico  = "serv_cod_servico="+document.getElementById('serv_cod_servico').options[idx_servico].value;
	ajax.loadXMLDoc("ajax/load_valor.php?"+id_servico, "valor");
}

// carrega a turma atual do aluno e as turmas possiveis para mudança
function loadServicoByIdSerie(){	
	var ajax = new Ajax();
	id_serie  = "ser_cod_serie="+document.getElementById('ser_cod_serie').value;
	ajax.loadXMLDoc("ajax/load_servico_serie.php?"+id_serie, "servico");
}

// carrega a turma atual do aluno e as turmas possiveis para mudança
function showajax(arq,action){
	var ajax = new Ajax();
	ajax.loadXMLDoc(arq+"?action="+action,'pop');
}

// carrega a turma atual do aluno e as turmas possiveis para mudança
function loadValorServicoByTurma(){
	var ajax = new Ajax();
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').value;
	ajax.loadXMLDoc("ajax/load_valor_servico.php?"+id_turma, "valor");
}

// carrega a turma atual do aluno e as turmas possiveis para mudança
function loadTurmasMudanca(){
	var ajax = new Ajax();
	id_aluno  = "alu_cod_aluno="+document.getElementById('alu_cod_alunoSelectedValue1').value;
	ajax.loadXMLDoc("ajax/load_turma_mudanca.php?"+id_aluno, "turma");
}

// carrega as cidade do estado selecionado
function loadCidadesByIdEstado(){
	var ajax = new Ajax();
	idx_estado = document.getElementById('est_cod_estado').selectedIndex;
	id_estado  = "est_cod_estado="+document.getElementById('est_cod_estado').options[idx_estado].value;
	ajax.loadXMLDoc("ajax/load_cidades.php?"+id_estado, "cidade");
}

// carrega as cidade comercial do estado selecionado
function loadCidadesComByIdEstado(){
	var ajax = new Ajax();
	idx_estado = document.getElementById('est_cod_estado_com').selectedIndex;
	id_estado  = "est_cod_estado="+document.getElementById('est_cod_estado_com').options[idx_estado].value;
	ajax.loadXMLDoc("ajax/load_cidades_com.php?"+id_estado, "cidade_com");
}

// carrega as cidade do estado selecionado
function loadTitulosByIdAluno(){
	var ajax = new Ajax();
	id_aluno  = "alu_cod_aluno="+document.getElementById('alu_cod_alunoSelectedValue1').value;
	ajax.loadXMLDoc("ajax/load_titulos.php?"+id_aluno, "titulos");
}

//carrega as disciplinas da serie selecionada
function loadDiciplinasByIdSerie(){
	var ajax = new Ajax();
	
	idx_serie = document.getElementById('ser_cod_serie').selectedIndex;
	id_serie  = "ser_cod_serie="+document.getElementById('ser_cod_serie').options[idx_serie].value;
	
	ajax.loadXMLDoc("ajax/load_disciplinas.php?"+id_serie, "disciplina");
}

//carrega as disciplinas da turma selecionada
function loadDiciplinasByIdTurma(){
	var ajax = new Ajax();
	
	idx_turma = document.getElementById('tur_cod_turma').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').options[idx_turma].value;
	
	ajax.loadXMLDoc("ajax/load_disciplinas_turma.php?"+id_turma, "disciplina");
}

//carrega as disciplinas da turma selecionada no formulario de cadastro de avaliações
function loadTipoDiciplinasByIdTurma(){
	var ajax = new Ajax();
	idx_turma = document.getElementById('tur_cod_turma').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').options[idx_turma].value;
	ajax.loadXMLDoc("ajax/load_disciplinas_avaliacao.php?"+id_turma, "disciplina");
}

//carrega as disciplinas da turma selecionada
function loadTipoAvaliacao(){
	var ajax = new Ajax();
	idx_turma = document.getElementById('tur_cod_turma').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').options[idx_turma].value;
	ajax.loadXMLDoc("ajax/load_tipo_avaliacao.php?"+id_turma, "tipo_avaliacao");
}

//carrega as disciplinas sem professor da turma selecionada
function loadDiciplinasByIdTurmaProfessor(){
	var ajax = new Ajax();
	idx_turma = document.getElementById('tur_cod_turma').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').options[idx_turma].value;
	ajax.loadXMLDoc("ajax/load_disciplinas_professor.php?"+id_turma, "disciplina");
}

//carrega as notas da avaliacao selecionada
function loadNotasByIdAvaliacao(){
	var ajax = new Ajax();
	idx_avaliacao = document.getElementById('ava_cod_avaliacao').selectedIndex;
	id_avaliacao  = "ava_cod_avaliacao="+document.getElementById('ava_cod_avaliacao').options[idx_avaliacao].value;
	ajax.loadXMLDoc("ajax/load_nota_aluno.php?"+id_avaliacao, "alunos");
}

//carrega as faltas por aluno da turma selecionada
function loadFaltasByIdDiciplina(){
	var ajax = new Ajax();
	idx_avaliacao = document.getElementById('tur_cod_turma').selectedIndex;
	id_avaliacao  = "ava_cod_avaliacao="+document.getElementById('ava_cod_avaliacao').options[idx_avaliacao].value;
	idx_disciplina = document.getElementById('dis_cod_disciplina').selectedIndex;
	id_disciplina  = "dis_cod_disciplina="+document.getElementById('dis_cod_disciplina').options[idx_disciplina].value;
	ajax.loadXMLDoc("ajax/load_faltas.php?"+id_avaliacao+"&"+id_disciplina, "alunos");
}

//carrega os alunos da turma/avaliacao selecionada
function loadAlunosByIdTurma(){
	var ajax = new Ajax();
	idx_avaliacao = document.getElementById('ava_cod_avaliacao').selectedIndex;
	id_avaliacao  = "ava_cod_avaliacao="+document.getElementById('ava_cod_avaliacao').options[idx_avaliacao].value;
	idx_turma = document.getElementById('tur_cod_turma').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').options[idx_turma].value;
	ajax.loadXMLDoc("ajax/load_aluno_turma.php?"+id_avaliacao+"&"+id_turma, "alunos");
}

//carrega os alunos/faltas da turma/avaliacao selecionada
function loadFaltaByIdDisciplina(){
	var ajax = new Ajax();
	idx_disciplina = document.getElementById('dis_cod_disciplina').selectedIndex;
	id_disciplina  = "dis_cod_disciplina="+document.getElementById('dis_cod_disciplina').options[idx_disciplina].value;
	idx_turma = document.getElementById('tur_cod_turma').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').options[idx_turma].value;
	ajax.loadXMLDoc("ajax/load_falta_aluno.php?"+id_disciplina+"&"+id_turma, "alunos");
}

//carrega as avaliacões da turma selecionada
function loadAvaliacaoByIdTurma(){
	var ajax = new Ajax();
	document.getElementById('alunos').innerHTML = '';
	idx_turma = document.getElementById('tur_cod_turma').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').options[idx_turma].value;
	ajax.loadXMLDoc("ajax/load_avaliacao.php?"+id_turma, "avaliacao");
}

//carrega as avaliacões da turma selecionada para verificar faltas
function loadFaltaByIdTurma(){
	var ajax = new Ajax();
	//document.getElementById('alunos').innerHTML = '';
	idx_turma = document.getElementById('tur_cod_turma').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').options[idx_turma].value;
	ajax.loadXMLDoc("ajax/load_falta_disciplina.php?"+id_turma, "disciplina");
}

//carrega as avaliacões da turma selecionada para verificar faltas
function loadDisciplinasByIdTurmaGrade(){
	var ajax = new Ajax();
	//document.getElementById('alunos').innerHTML = '';
	idx_turma = document.getElementById('tur_cod_turma').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').options[idx_turma].value;
	ajax.loadXMLDoc("ajax/load_grade_turma.php?"+id_turma, "grade");
}

//carrega as avaliacões da turma selecionada
function loadFaltasForTurma(){
	var ajax = new Ajax();
	idx_turma = document.getElementById('tur_cod_turma').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma').options[idx_turma].value;
	ajax.loadXMLDoc("ajax/load_faltas_turma.php?"+id_turma, "avaliacao");
}

//carrega as avaliacões da turma selecionada
function loadAvaliacaoForNota(){
	var ajax = new Ajax();
//	document.getElementById('chk_nota_1').checked = true;
	idx_turma = document.getElementById('tur_cod_turma_avaliacao').selectedIndex;
	id_turma  = "tur_cod_turma="+document.getElementById('tur_cod_turma_avaliacao').options[idx_turma].value;
	ajax.loadXMLDoc("ajax/load_avaliacao_nota.php?"+id_turma, "avaliacao");
}

// metodo seleciona todas as turmas ativas por serie
function loadTurmasMensalidadeByIdSerie(ser_cod_serie, ab_ano_base){
	var ajax = new Ajax();
	document.getElementById('mensalidade').innerHTML = "";
	if (ser_cod_serie > 0 && ab_ano_base > 0){
		ajax.loadXMLDoc("ajax/get_turma_serie_mensalidade.php?ser_cod_serie="+ser_cod_serie+"&ab_ano_base="+ab_ano_base, "turma");
	}
}

// metodo seleciona todas as turmas ativas por serie
function loadTurmasByIdSerie(ser_cod_serie, ab_ano_base){
	var ajax = new Ajax();
	if (ser_cod_serie > 0 && ab_ano_base > 0){
		ajax.loadXMLDoc("ajax/get_turma_serie.php?ser_cod_serie="+ser_cod_serie+"&ab_ano_base="+ab_ano_base, "turma");
	}
}

// metodo seleciona a quantidade de parcelas possiveis para os materiais de acordo com a serie
function loadParcelasMaterial(serie){
	if (serie == 16){
		document.getElementById('mat_qtd_parcelas').innerHTML = "<label><input type='radio' checked='checked' name='mat_parcelas' id='mat_parcelas_01' value='1'>1x</label> &nbsp; <label><input type='radio' name='mat_parcelas' id='mat_parcelas_02' value='2'>2x</label> &nbsp; <label><input type='radio' name='mat_parcelas' id='mat_parcelas_03' value='3'>3x</label> &nbsp; <label><input type='radio' name='mat_parcelas' id='mat_parcelas_04' value='4'>4x</label> &nbsp; <label><input type='radio' name='mat_parcelas' id='mat_parcelas_05' value='5'>5x</label>";
	} else {
		document.getElementById('mat_qtd_parcelas').innerHTML = "<label><input type='radio' checked='checked' name='mat_parcelas' id='mat_parcelas_01' value='1'>1x</label> &nbsp; <label><input type='radio' name='mat_parcelas' id='mat_parcelas_02' value='2'>2x</label> &nbsp; <label><input type='radio' name='mat_parcelas' id='mat_parcelas_03' value='3'>3x</label>";
	}
}

function loadLinguaEstrangeira(serie){
	if (serie > 13){
		document.getElementById('div_lingua').innerHTML = "<select name='mat_flg_lingua_estrangeira' id='mat_flg_lingua_estrangeira'> <option value='I' selected>Ingl&ecirc;s</option><option value='E'>Espanhol</option></select>";
	} else {
		document.getElementById('div_lingua').innerHTML = "<select name='mat_flg_lingua_estrangeira' id='mat_flg_lingua_estrangeira'> <option value='I' selected>Ingl&ecirc;s</option> </select>";
	}
}

// metodo seleciona todos os materiais de uma série
function loadMateriaisByIdSerie(){
	var ajax = new Ajax();
	idx_serie = document.getElementById('ser_cod_serie').selectedIndex;
	id_serie  = "ser_cod_serie="+document.getElementById('ser_cod_serie').options[idx_serie].value;
	ajax.loadXMLDoc("ajax/load_material_serie.php?"+id_serie, "id_materiais");
}

function validPass(pass, cpass){
   if((pass.value != cpass.value) || (pass.value == "") || (cpass.value == "")){     
     alert('Por favor verique a senha.');
	 pass.focus();	 
	 return false;
   }else{
	 return true;
   }   
}

function validPassSec(pass, cpass, sec){
	if(pass.length < 8){
	 alert('A senha deve conter min 8 caracteres');
	 pass.focus();	   
	 return false;
   }
	
   if((pass.value != cpass.value) || (pass.value == "") || (cpass.value == "")){     
     alert('Por favor verique a senha.');
	 pass.focus();	 
	 return false;
   }
   if(sec.value!=1){
	 alert('Por favor verique a segurança da senha.');
	 pass.focus();	   
	 return false;
   }
   
   return true;   
} 

//Validar data
function validaData(campo){
	if(campo.value!=""){
		erro = 0;
        hoje = new Date();
        anoAtual = 2030;
        barras = campo.value.split("/");
        if(barras.length == 3){
			dia = barras[0];
            mes = barras[1];
            ano = barras[2];
            resultado = (!isNaN(dia) && (dia > 0) && (dia < 32)) && (!isNaN(mes) && (mes > 0) && (mes < 13)) && (!isNaN(ano) && (ano.length == 4) && (ano <= anoAtual && ano >= 1900));
            if(!resultado){
            	alert("Data " + campo.value + " incorreta.");
				campo.value = "";
                campo.select();
                return false;
            }
        }else{
			alert("Data " + campo.value + " incorreta.");
			campo.value = "";
            campo.select();
            return false;
        }
        return true;
	}
}

//Função para formatar moeda
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;	 
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
	var whichCode = (window.Event) ? e.which : e.keyCode;
    if((e.keyCode != 46) && (e.keyCode != 8) && (e.keyCode != 37) && (e.keyCode != 39) && (e.keyCode != 9) && (e.keyCode != 116)){    
      if(whichCode == 13){
	    return true;
	  }
      key = String.fromCharCode(whichCode); // Valor para o código da Chave

      if(strCheck.indexOf(key) == -1){
		return false; // Chave inválida
	  }
      len = objTextBox.value.length;
      
	  for(i = 0; i < len; i++){
        if((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)){          break;
		}
	  }
      aux = '';

      for(; i < len; i++){
        if(strCheck.indexOf(objTextBox.value.charAt(i))!=-1){
		  aux += objTextBox.value.charAt(i);
		}
	  }
      aux += key;
      len = aux.length;

      if(len == 0){
	    objTextBox.value = '';
	  }
      
	  if(len == 1){
	    objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
	  }
      
	  if(len == 2){
	    objTextBox.value = '0'+ SeparadorDecimal + aux;
	  }
      
	  if(len > 2){
        aux2 = '';
        for(j = 0, i = len - 3; i >= 0; i--){
          if(j == 3){
            aux2 += SeparadorMilesimo;
            j = 0;
          }
          aux2 += aux.charAt(i);
          j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        
		for(i = len2 - 1; i >= 0; i--){
          objTextBox.value += aux2.charAt(i);
		}
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
      }
    return false;
  }
}

//Função para confirmar exclusao
function deleteItem(msg){
  return confirm(msg); 	
}

function isClear(campo){

	var isSubmit 	= true;
	
	for(var i = 0; i < campo.length; i++){		
		if(((document.getElementById(campo[i]).type == 'text') || (document.getElementById(campo[i]).type == 'textarea')) && 
			(document.getElementById(campo[i]).value == "")){
			document.getElementById(campo[i]).style.background = '#00CC99';
			document.getElementById(campo[i]).focus();
			isSubmit = false;
		}
		
		if((document.getElementById(campo[i]).type == 'select-one') && (document.getElementById(campo[i]).value == 0)){
			document.getElementById(campo[i]).style.background = '#00CC99';
			document.getElementById(campo[i]).focus();
			isSubmit = false;
		}
		
		if((document.getElementById(campo[i]).type == 'hidden') && (document.getElementById(campo[i]).value == "")){
			isSubmit = false;
		}
	}
	
	if(!isSubmit){
		jAlert("Todos os campos marcados com <b>*</b> são de preenchimento obrigatório.", "Atenção");
	}
	return isSubmit;
}


function formatField(campo, mask, evt){
	if(document.all){ // Internet Explorer
    	key = evt.keyCode; 
	}else{ // Nestcape
		key = evt.which;
    }

	if((key == 8) || (key == 0)){
		return true;
	}

	string = campo.value;  
	i = string.length;

	if(i < mask.length){
  		if(mask.charAt(i) == '?'){
       		return (key > 47 && key < 58);
      	}else{
       		if(mask.charAt(i) == '!'){
				return true;
			}
			
   			for(c = i; c < mask.length; c++){
         		if(mask.charAt(c) != '?' && mask.charAt(c) != '!'){
         			campo.value = campo.value + mask.charAt(c);
				}else{ 
					if(mask.charAt(c) == '!'){
                		return true;
       				}else{
         				return (key > 47 && key < 58);
          			}
				}
       		}
    	}
  	}else{
		return false;
	}
}

// Validador de CPF
function Verifica_CPF(Field){
	var CPF = Field.value.replace(/[.-]/g, ""); // Recebe o valor digitado no campo

	// Aqui começa a checagem do CPF
	var POSICAO, I, SOMA, DV, DV_INFORMADO;
	var DIGITO = new Array(10);
	DV_INFORMADO = CPF.substr(9, 2); // Retira os dois últimos dígitos do número informado

	// Desemembra o número do CPF na array DIGITO
	for (I = 0; I <= 8; I++){
		DIGITO[I] = CPF.substr(I, 1);
	}

	// Calcula o valor do 10º dígito da verificação
	POSICAO = 10;
	SOMA = 0;
	for(I = 0; I <= 8; I++){
		SOMA = SOMA + DIGITO[I] * POSICAO;
		POSICAO = POSICAO - 1;
	}
	
	DIGITO[9] = SOMA % 11;
	if(DIGITO[9] < 2){
		DIGITO[9] = 0;
	}else{
		DIGITO[9] = 11 - DIGITO[9];
	}

	// Calcula o valor do 11º dígito da verificação
	POSICAO = 11;
	SOMA = 0;
	for(I = 0; I <= 9; I++){
		SOMA = SOMA + DIGITO[I] * POSICAO;
		POSICAO = POSICAO - 1;
	}
	
	DIGITO[10] = SOMA % 11;
	if(DIGITO[10] < 2){
		DIGITO[10] = 0;
	}else{
		DIGITO[10] = 11 - DIGITO[10];
	}

	// Verifica se os valores dos dígitos verificadores conferem
	DV = DIGITO[9] * 10 + DIGITO[10];
	if((DV != DV_INFORMADO) || (CPF == "00000000000") || (CPF == "11111111111") || (CPF == "22222222222") || 
	   (CPF == "33333333333") || (CPF == "44444444444") || (CPF == "55555555555") || (CPF == "66666666666") || 
	   (CPF == "77777777777") || (CPF == "88888888888") || (CPF == "99999999999")){
		alert('CPF ' + Field.value + ' inválido');
		Field.value = '';
		Field.focus();
		return false;
	}
}

// Marca ou desmarca todos os combos de um formulário
function selected_combo(boolean){		
	for(i = 0; i < document.getElementsByTagName('input').length; i++){
		if(document.getElementsByTagName('input')[i].type == "checkbox"){				
			document.getElementsByTagName('input')[i].checked = boolean;
		}
	}		
}

function cripto_ref(){
var valor = $('#ref_dat_nascimento').val();
$.post('cripto.php',
	  {senha: valor  },
                function(data){
                 $("#ref_senha").val(data);									  
                });	
}

// Converte de String para Float
function strToFloat(value){		
	value = value.replace('.', '');
	value = value.replace(',', '.');
	
	return value;	
}