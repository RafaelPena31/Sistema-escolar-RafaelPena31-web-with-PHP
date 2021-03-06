<?php
header("Content-type:text/html; charset=utf8");

require_once "../classes/Alunos.php";

$Alunos = new Alunos();
if(isset($_GET["matricula"])) {
    $dadosAluno = $Alunos->listarID($_GET["matricula"]);
}
if(isset($_POST["Criar"])) {
    $Alunos->alterar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Styles/bootstrap.min.css" />
    <link rel="stylesheet" href="../Styles/global.css" />
    <style>
        body {
            background: #f2f2f2;
        }
    </style>
    <title>RP - escolas</title>
</head>
<body>
<div class="containerForm">
    <form action="update_alunos.php?matricula=<?php echo $dadosAluno->MATRICULA; ?>" method="post">
        <h1>Adicionar aluno</h1>
        <div class="form-group">
            <label for="name">Nome:</label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                value="<?php echo $dadosAluno->NOME; ?>"
                required
            />
        </div>

        <div class="custom-control custom-radio">
            <input
                type="radio"
                id="customRadio1"
                name="sexo"
                class="custom-control-input"
                value="M"
                <?php if($dadosAluno->SEXO == "M") { echo "checked"; } ?>
                required
            />
            <label class="custom-control-label" for="customRadio1"
            >Masculino</label
            >
        </div>

        <div class="custom-control custom-radio">
            <input
                type="radio"
                id="customRadio2"
                name="sexo"
                class="custom-control-input"
                value="F"
                <?php if($dadosAluno->SEXO == "F") { echo "checked"; } ?>
                required
            />
            <label class="custom-control-label" for="customRadio2"
            >Feminino</label
            >
        </div>
        <div class="custom-control custom-radio">
            <input
                type="radio"
                id="customRadio3"
                name="sexo"
                class="custom-control-input"
                value="O"
                <?php if($dadosAluno->SEXO == "O") { echo "checked"; } ?>
                required
            />
            <label class="custom-control-label" for="customRadio3">Outros</label>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                value="<?php echo $dadosAluno->EMAIL; ?>"
                required
            />
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <textarea
                class="form-control"
                id="endereco"
                name="endereco"
                placeholder="<?php echo $dadosAluno->ENDERECO; ?>"
                required
            ></textarea>
        </div>

        <div class="form-group">
            <label for="tel">Telefone:</label>
            <input
                type="tel"
                class="form-control"
                id="tel"
                name="tel"
                value="<?php echo $dadosAluno->TELEFONE; ?>"
                required
            />
        </div>

        <div class="form-group">
            <label for="pass">Senha:</label>
            <input
                type="password"
                class="form-control"
                id="pass"
                name="pass"
                value="<?php echo $dadosAluno->SENHA;?>"
                required
            />
        </div>

        <button type="submit" class="btn btn-success btn-block margin-btn3" name="Criar">
            Criar
        </button>
    </form>
</div>
</body>
<script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"
></script>
</html>

