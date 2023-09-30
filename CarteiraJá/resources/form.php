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
        <div class="box">
            <form action="">
                <fieldset>
                    <legend><b>Cadastre-se</b></legend>
                        <br><br>
                    <div class="inputBox">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="inputUser" required onkeydown="bloquearEspaco(event)">
                    </div>
                    <div class="inputBox">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" class="inputUser" required onkeydown="bloquearEspaco(event)">
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="nome">Data de Nascimento</label>
                        <input type="date" name="data_nasc" id="data" required>
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
                        <input type="email" name="email" id="email" class="inputUser" required onkeydown="bloquearEspaco(event)">
                        <br><br>
                    </div>
                    <div class="inputBox">
                        <label for="Celular">Celular</label>
                        <input type="tel" name="celular" id="celular" class="inputUser" oninput="formatarTelefone(this)">
                        <br><br>
                    </div>
                    <br>

                    <div class="inputBox">
                        <label for="selectEscolaridade">Escolaridade</label>
                        <select name="escolaridade" id="Escolaridade" class="inputUser2">
                            <option value="" disabled selected>Selecione a opção</option>
                            <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
                            <option value="Ensino Fundamental Completo">Ensino Fundamental Completo</option>
                            <option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>
                            <option value="Ensino Médio Completo"> Ensino Médio Completo</option>
                            <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
                            <option value="Ensino Superior Cursando">Ensino Superior Cursando</option>
                            <option value="Ensino Superior Completo">Ensino Superior Completo</option>
                        </select>
                        <br><br>
                    </div>


                    <br>
                    <div class="">
                        <label for="linkedin">LinkedIn</label>
                        <input type="url" name="linkedin" id="linkedin" class="inputUser">
                    <br><br>
                    </div>
                    <br>
                    <div>
                    <label for="carta">Carta de Apresentação</label>
                    <textarea name="carta" id="carta" class="inputUser3" placeholder="Escreva sua carta de apresentação aqui..." required></textarea>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="area_pretendida">Área Pretendida</label>
                        <select name="area_pretendida" id="area_pretendida" class="inputUser2">
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
                        <br><br>
                    </div>
                    <br>
                    <div class="i">
                        <label for="select">Digite a Área que Deseja Atuar </label>
                        <input type="vaga" name="area_atuar" id="objetivo" class="inputUser" required>
                        <br><br>
                    </div>
                    <br><br>
                    <div id="experienciaContainer">
                        <div class="experiencia">
                            <legend><b>Experiência Profissional</b></legend><br><br>
                            <div class="inputBox">
                                <label for="titulo">Título</label>
                                <input type="text" name="exp_titulo" class="inputUser" required>
                            </div>
                            <div class="inputBox">
                                <label for="nomeEmpresa">Empresa</label>
                                <input type="text" name="exp_empresa" class="inputUser" required>
                            </div>
                            <br><br>
                            <div>
                                <label for="local">Local</label>
                                <input type="text" name="exp_local" class="inputUser" required>
                            </div>
                            <br>
                            <div class="inputBox">
                                <label for="select">Tempo de Experiência</label>
                                <select name="exp_profissional" id="experiencia" class="inputUser2">
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
                    <button type="button" id="adicionarExperiencia">Adicionar Experiência</button>
                    <script>
                        document.getElementById('adicionarExperiencia').addEventListener('click', function () {
                            const experienciaDiv = document.querySelector('.experiencia');
                            const clone = experienciaDiv.cloneNode(true);
                            document.getElementById('experienciaContainer').appendChild(clone);
                        });
                    </script>
                    <br><br><br><br>
                    <input type="submit" name="submit" id="submit" >
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>
