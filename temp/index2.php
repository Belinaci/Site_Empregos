<?php

    if(isset($_POST['submit']))
    {

        include_once('conexao.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $data_nasc = $_POST['data_nascimento'];
        $sexo = $_POST['sexo'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $escolaridade = $_POST['selectEscolaridade'];
        $linkedin = $_POST['linkedin'];
        $carta = $_POST['carta'];
        $area_pretendida = $_POST['area_pretendida'];
        $area_atuar = $_POST['vaga'];
        $exp_titulo = $_POST['titulo'];
        $exp_empresa = $_POST['nomeEmpresa'];
        $exp_local = $_POST['local'];
        $exp_profissional = $_POST['experiencia'];
        $data_inicio = $_POST['caixa'];
        $data_termino = $_POST['data_termino'];

        $result = mysqli_query($conexao, "INSERT INTO clientes (nome, sobrenome, data_nasc, sexo, email, celular, escolaridade, linkedin, carta, area_pretendida, area_atuar, exp_titulo, exp_empresa, exp_local, exp_profissional, data_inicio, data_termino) 
        VALUES ('$nome', '$sobrenome', '$data_nasc', '$sexo', '$email', '$celular', '$escolaridade', '$linkedin', '$carta', '$area_pretendida', '$area_atuar', '$exp_titulo', '$exp_empresa', '$exp_local', '$exp_profissional', '$data_inicio', '$data_termino')");

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de curriculos</title>
    <link rel="stylesheet" type="text/css" href="styles2.css" media="screen" />
    

    <script>
        function bloquearEspaco(event) {
            if (event.key === " ") {
                event.preventDefault(); // Impede a entrada do espaço
            }
        }
        function formatarTelefone(input) {
        // Remove todos os caracteres não numéricos
        var numero = input.value.replace(/\D/g, '');

        // Verifica se o número tem pelo menos 10 dígitos
        if (numero.length >= 11) {
            // Formata o número com parênteses
            var numeroFormatado = '(' + numero.substring(0, 2) + ') ' + numero.substring(2, 7) + '-' + numero.substring(7, 11);
            input.value = numeroFormatado;
        } else {
            // Se o número não tiver pelo menos 10 dígitos, remove os parênteses
            input.value = numero;
        }
    }
    </script>
</head>

<body>

    <main>
        <div class="box">
            <form action="index2.php" method="POST">
                <fieldset>
                    <legend><b>Cadastre-se</b></legend>
                        <br><br>
                    <div class="inputBox">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="caixa" class="inputUser" required onkeydown="bloquearEspaco(event)">
                    </div>
                    <div class="inputBox">
                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" name="sobrenome" id="caixa" class="inputUser" required onkeydown="bloquearEspaco(event)">
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                        <input type="date" name="data_nascimento" id="data" required>
                        <br><br><br>
                    </div>
                    <div class="inputBox">
                        <label>Sexo:</label>
                        <input type="radio" id="sexo_m" name="sexo" value="Masculino" required>
                        <label for="sexo_m">Masculino</label>
                        <input type="radio" id="sexo_f" name="sexo" value="Feminino" required>
                        <label for="sexo_f">Feminino</label><br>    
                        <br><br>
                    </div>
                    <div class="inputBox">
                        <label for="email">Insira seu Email</label>
                        <input type="email" name="email" id="caixa" class="inputUser" required onkeydown="bloquearEspaco(event)">
                        <br><br>
                    </div>
                    <div class="inputBox">
                        <label for="Celular">Celular</label>
                            <input type="tel" name="celular" id="caixa" class="inputUser" oninput="formatarTelefone(this)">
                        <br><br>
                    </div>
                    <br>
                    <div class="inputBox">
                        <label for="selectEscolaridade">Escolaridade</label>
                        <select name="selectEscolaridade" id="Escolaridade" class="inputUser2">
                            <option value="valor1">Ensino Fundamental Incompleto</option>
                            <option value="valor2">Ensino Fundamental Completo</option>
                            <option value="valor3">Ensino Médio Incompleto</option>
                            <option value="Ensino Médio Completo" selected>Ensino Médio Completo</option>
                            <option value="valor5">Ensino Superior Incompleto</option>
                            <option value="valor6">Ensino Superior Cursando</option>
                            <option value="valor6">Ensino Superior Completo</option>
                        </select>
                        <br><br>
                    </div>
                    <br>
                    <div class="">
                        <label for="linkedin">LinkedIn</label>
                        <input type="url" name="linkedin" id="caixa" class="inputUser">
                            <br><br>
                    </div>
                    <br>
                    <div>
                        <label for="carta">Carta de Apresentação</label>
                        <textarea name="carta" id="caixa" class="inputUser3" placeholder="Escreva sua carta de apresentação aqui..." required></textarea>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="area_pretendida">Área Pretendida</label>
                        <select name="area_pretendida" id="area_pretendida" class="inputUser2">
                            <option value="valor1">Agropecuária</option>
                            <option value="valor2">Indústria</option>
                            <option value="valor3">Serviços</option>
                            <option value="valor4">Construção Civil</option>
                            <option value="valor5">Comércio varejista</option>
                            <option value="valor6">Educação</option>
                            <option value="valor6">Saúde</option>
                            <option value="valor6">Tecnologia da Informação (TI)</option>
                            <option value="valor6">Serviços Financeiros</option>
                            <option value="valor6">Turismo e Hospitalidade:</option>   
                        </select>
                        <br><br>
                    </div>
                    <br>
                    <div class="i">
                        <label for="select">Digite a Área que Deseja Atuar </label>
                        <input type="vaga" name="vaga" id="caixa" class="inputUser" required>
                        <br><br>
                    </div>
                    <br><br>
                    <legend><b>Experiência Profissional</b></legend><br><br>
                    <div class="inputBox">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="caixa" class="inputUser" required>
                    </div>
                    <div class="inputBox">
                        <label for="sobrenome">Empresa</label>
                        <input type="text" name="nomeEmpresa" id="caixa" class="inputUser" required>
                    </div>
                    <br><br>
                    <div>
                        <label for="local">Local</label>
                        <input type="text" name="local" id="caixa" class="inputUser" required>
                    </div>
                    <br>
                    <div>
                        <label for="experiencia">Experiência Profissional:</label>
                        <textarea name="experiencia" id="experiencia" class="inputUser3" placeholder="Descreva sua experiência profissional aqui..."></textarea>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="data_inicio"><b>Data de inicio:</b></label>
                        <input type="date" name="caixa" id="data" required>
                    </div>
                    <div class="inputBox">
                        <label for="data_termino"><b>Data de término:</b></label>
                        <input type="date" name="data_termino" id="data_termino" required>
                    </div>
                    <br><br><br><br>
                    <input type="submit" name="submit" id="submit" >
                </fieldset>
            </form>
        </div>
    </main>

</body>

</html>