<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="Estilo_formulario_sa.css">

    <script src="Formulario_SA.js"></script>

    <script src="Buscador_cep.js"></script>

</head>
<body>
    
<form method="GET"action="formulario_back.php">
    <center><table></center>
        <tr>
            <th  rowspan=2><center><img src="LogoForneInjet.png" alt="Smiley face" height="70" width="70" /></center></th>
            <th>Cadastro de</th>
        </tr>
        <tr>
            <th>funcionarios</th>
        </tr>

        <tr>
            <td></td><td></td>
        </tr>

        <tr>
            <td>Nome</td><th><input type="text" name="nome2" required onkeypress ="mascara(this, nome)"></th>
        </tr>

        <tr>
            <td>CPF</td><th><input type="text" name="RGeCPF2" required onkeypress ="mascara(this, RGeCPF)" maxlength="14"></th>
        </tr>

        <tr>
            <td>Telefone</td>
            <th>
                <input type="text" name="telefone2" required onkeypress ="mascara(this, telefone)" maxlength="15">
            </th>
        </tr>

        <tr>
            <td>Usuário</td><th><input type="text" name="usuario2" ></th>
        </tr>

        <tr>
            <td>Data Admissão</td>
                <th>
                    <label for="">
                        <input type="text" name="data2" required onkeypress ="mascara(this, data)" maxlength="10"> (DD/MM/AAAA)
                    </label>
                </th>
        </tr>

        <tr>
            <td>Permissão</td><th><select name="permissao2">
                <option value="admin">admin</option>
                <option value="usuario2">usuário</option>
                <option value="gestor">gestor</option>
              </select></th>
        </tr>

        <tr>
            <td>Rua</td><th><input type="text" name="rua2" ></th>
        </tr>

        <tr>
            <td>Bairro</td><th><input type="text" name="bairro2" ></th>
        </tr>

        <tr>
            <td>Estado</td><th><input type="text" name="estado2" required onkeypress ="mascara(this, estado)"></th>
        </tr>

        <tr>
            <td>Cargo</td><th><input type="text" name="cargo2" required onkeypress ="mascara(this, cargo)"></th>
        </tr>

        <tr>
            <td>E-mail</td><th><input type="text" name="email2" ></th>
        </tr>
        
        <tr>
            <td>Senha</td><th><input type="password" name="senha2" ></th>
        </tr>

        <tr>
            <td>Situação</td><th><select name="nome_da_combobox2">
                <option value="ativo">ativo</option>
                <option value="inativo">inativo</option>
              </select></th>
        </tr>

        <tr>
            <td>Número</td><th><input type="text" name="numero2" required onkeypress ="mascara(this, numero)"></th>
        </tr>

        <tr>
            <td>Cidade</td><th><input type="text" name="cidade2" ></th>
        </tr>

        <tr>
            <td>CEP</td><th><input type="text" name="cep2" onkeypress="mascara(this, cep)" maxlength="10"></th>
        </tr>

         <tr>
            <th><button>Novo</button></th><th><input type="submit" value="Enviar" /></th>
        </tr>

        <tr>
            <th><button>Excluir</button></th><th><button>Limpar</button></th>
        </tr>

        </tr>
        <br>
        <input type="submit" value="Enviar" />
</form>
        <address>
            Gustavo Wendt /estudante / tecnico em sistemas 
        </address>
</body>
</html>