<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Check Alunos Attachments</title>
</head>
<style>
#nome, #email, .historico, #chave{

	border-left:rgba(0,0,0,1) 1px solid;
	display:inline-block;
	padding:5px;
	line-height:30px;
}
#nome{
	width:400px;
}
#email{
	width:300px;
}
.historico{
	width:350px;
}
</style>
<body>

<?php
	if($connect = mysql_connect('152.84.253.54','admin','T-all321')){
		if($db_connect = mysql_select_db('db_uniposrio', $connect)){
			echo 'Estou aqui!';
			$query = 	"SELECT nome_aluno, email_aluno, arq_historico_grad, arq_historico_mest, arq_documentos, chave_insc FROM alunos a
						INNER JOIN inscricao i ON a.id_aluno = i.id_aluno AND i.chave_insc like '%2018-1%'
						order by nome_aluno ASC";
			$exec = mysql_query($query,$connect);
			while($result = mysql_fetch_assoc($exec)){
				if(file_exists('attachments/'.$result['arq_historico_grad'])){
					$fileA = $result['arq_historico_grad'];
				}else{
					$fileA = "<strong style='color:red;'>{$result['arq_historico_grad']}</strong>";
				}
				if(file_exists('attachments/'.$result['arq_historico_mest'])){
					$fileB = $result['arq_historico_mest'];
				}else{
					$fileB = "<strong style='color:red;'>{$result['arq_historico_mest']}</strong>";
				}
				if(file_exists('attachments/'.$result['arq_documentos'])){
					$fileC = $result['arq_documentos'];
				}else{
					$fileC = "<strong style='color:red;'>{$result['arq_documentos']}</strong>";
				}
				echo '<div><span id="nome">'.$result['nome_aluno'].'</span>';
				echo '<span id="email">'.$result['email_aluno'].'</span>';
				echo '<span class="historico">'.$fileA.'</span>';
				echo '<span class="historico">'.$fileB.'</span>';
				echo '<span class="historico">'.$fileC.'</span>';
				echo '<span id="chave">'.$result['chave_insc'].'</span></div><hr/>';
			}
		}
	}
?>

</body>
</html>