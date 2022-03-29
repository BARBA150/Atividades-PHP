
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Exercício 7</title>

<style type="text/css">
    seletor { propriedade: valor; }

    h2{
        text-align: center;
    }
  .butao{
     background-color:#00FF00;
  }
  .butaao{
    background-color: #FF0000;
  }
</style>
    
</head>
<body>

    <h1>Formulário</h1>

    <form action="exercicio07.php" method="POST" name="form1">
        <fieldset>
            
               <h2>Adicionar Contato</h2><hr><br>
                <label for="nome" class=".teste">Nome:</label><br>
                <input type="text" placeholder="Nome" required id="nome" name="nome"><br><br>
                <label for="endereco">Endereço:</label><br>
                <input type="text" placeholder="Informe o Endereço" required id="endereco" name="endereco"><br><br>
                <label for="email">e-mail:</label><br>
                <input type="email" placeholder="exemplo@exemplo.com" name="email" id="email"><br><br>
                <label for="tel">Telefone:</label><br>
                <input type="tel" placeholder="(00) 01234-5678" name="telefone" id="telefone"><br><br>
                <p>Sexo:</p>
                <input name="sexo" type="radio" value="M">
                <label for="sexo">Masculino</label> <br>                             
                <input name="sexo" type="radio" value="F"> 
                <label for="sexo">Feminino</label><br><br>                
                <input type="submit" onclick="javascript:validar();" value="Adicionar" class="butao">
                <input type="submit" onClick='window.history.back();' value="Voltar" class="butaao">
        </fieldset>
    </form>
</body>
<script src="js7"></script>
</html>