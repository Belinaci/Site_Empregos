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
        $escolaridade = $_POST['escolaridade'];
        $linkedin = $_POST['linkedin'];
        $carta = $_POST['carta'];
        $area_pretendida = $_POST['area_pretendida'];
        $area_atuar = $_POST['area_atuar'];
        $exp_titulo = $_POST['exp_titulo'];
        $exp_empresa = $_POST['exp_empresa'];
        $exp_local = $_POST['exp_local'];
        $exp_profissional = $_POST['exp_profissional'];

        $result = mysqli_query($conexao, "INSERT INTO clientes (nome, sobrenome, data_nasc, sexo, email, celular, escolaridade, linkedin, carta, area_pretendida, area_atuar, exp_titulo, exp_empresa, exp_local, exp_profissional) VALUES ('$nome', '$sobrenome', '$data_nasc', '$sexo', '$email', '$celular', '$escolaridade', '$linkedin', '$carta', '$area_pretendida', '$area_atuar', '$exp_titulo', '$exp_empresa', '$exp_local', '$exp_profissional')");
    



    }

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - CarteiraJá</title>
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
        else 
            // Se o número não tiver pelo menos 10 dígitos, remove os parênteses
            input.value = numero;
        }
    }
    </script>
</head>

<body>

    <main>
        <div class="container">
        <div class="form">
            <form action="">
                    <legend><b>Cadastre-se</b></legend>
                    <br>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Primeiro Nome</label>
                        <input type="text" name="nome" id="nome" class="input-user" required onkeydown="bloquearEspaco(event)">
                    </div>
                    <div class="input-box">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" class="input-user" required onkeydown="bloquearEspaco(event)">
                    </div>
                 
                    <div class="input-box">
                        <label for="email">Insira seu Email</label>
                        <input type="email" name="email" id="email" class="input-user" required onkeydown="bloquearEspaco(event)">
                    </div>
                    <div class="input-box">
                        <label for="Celular">Celular</label>
                        <input type="tel" name="celular" id="celular" class="input-user" oninput="formatarTelefone(this)">
                    </div>
                    <div class="input-box">
                        <label for="linkedin">LinkedIn</label>
                        <input type="url" name="linkedin" id="linkedin" class="input-user">
                    </div>
                    <div class="input-box">
                        <label for="select">Objetivo </label>
                        <input type="vaga" name="objetivo" id="objetivo" class="input-user" required>
                    </div>
                </div>
                <div class="input-data">
                    <label for="nome"> Data de Nascimento</label>
                    <input type="date" name="data_nasc" id="data" class="data" required>
                </div>
                <div class="switch-group">
                    <div class="switch-box">
                        <label for="case">Escolaridade</label>
                        <select name="escolaridade" id="escolaridade" class="input-case">
                            <option value="" disabled selected>Selecione a opção</option>
                            <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
                            <option value="Ensino Fundamental Completo">Ensino Fundamental Completo</option>
                            <option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>
                            <option value="Ensino Médio Completo"> Ensino Médio Completo</option>
                            <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
                            <option value="Ensino Superior Cursando">Ensino Superior Cursando</option>
                            <option value="Ensino Superior Completo">Ensino Superior Completo</option>
                        </select>
                    </div>
                    <div class="switch-box">
                        <label for="area_pretendida">Área Pretendida</label>
                            <select name="area_pretendida" id="area_pretendida" class="input-case">
                                <option value="" disabled selected>Selecione a opção</option>
                                <option value="Agropecuária">Agropecuária</option>
                                <option value="Indústria">Indústria</option>
                                <option value="Serviços">Serviços</option>
                                <option value="Construção Civil">Construção Civil</option>
                                <option value="Comércio varejista">Comércio varejista</option>
                                <option value="Educação">Educação</option>
                                <option value="Saúde">Saúde</option>
                                <option value="Tecnologia da Informação (TI)">Tecnologia da Informação (TI)</option>
                                <option value="Serviços Financeiros">Serviços Financeiros</option>
                                <option value="Turismo e Hospitalidade">Turismo e Hospitalidade</option>   
                            </select>
                    </div>
                </div>
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                </div>
                <div class="gender-group">
                        <div class="gender-input">
                            <input id="feminino" type="radio" name="gender" value="feminino">
                            <label for="feminino">Feminino</label>
                        </div>
                        <div class="gender-input">
                            <input id="masculino" type="radio" name="gender" value="masculino">
                            <label for="masculino">Masculino</label>
                        </div>
                        <div class="gender-input">
                            <input id="outros" type="radio" name="gender" value="outros">
                            <label for="outros">Outros</label>
                        </div>
                        <div class="gender-input">
                            <input id="none" type="radio" name="gender" value="outros">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                </div>
                <br>
                <div class="experiencia-group">
                    <label for="carta">Carta de Apresentação</label>
                    <textarea name="carta" id="carta" class="input-text" placeholder="Escreva sua carta de apresentação aqui..." required></textarea>
                </div>
                <br>
                    <legend><b>Experiência Profissional</b></legend>
                <div class="input-group">
                    <div class="input-box">
                        <label for="titulo">Título</label>
                        <input type="text" name="exp_titulo" id="titulo" class="input-user" required>
                    </div>
                    <div class="input-box">
                        <label for="nomeEmpresa">Empresa</label>
                        <input type="text" name="exp_empresa" id="empresa" class="input-user" required>
                    </div>
                    <div class="input-box">
                        <label for="local">Local</label>
                        <input type="text" name="exp_local" id="local" class="input-user" required>
                    </div>
                </div>
                    <div class="switch-group">
                        <label for="case">Tempo de Experiência</label>
                        <select name="exp_profissional" id="experiencia" class="input-case">
                            <option value="Sem experiência">Sem experiência</option>
                            <option value="Até 6 meses">Até 6 meses</option>
                            <option value="Até 1 ano">Até 1 ano</option>
                            <option value="Até 1,5 ano">Até 1,5 ano</option>
                            <option value="Até 2 anos">Até 2 anos</option>
                            <option value="Mais de 2 anos">Mais de 2 anos</option>
                            
                        </select>
                        <br><br>
                    </div>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit" >
            </form>
        </div>
    </main>
</body>
</html>
