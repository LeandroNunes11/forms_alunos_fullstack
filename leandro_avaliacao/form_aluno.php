<?php
include 'header.php';
include 'list_proc_alunos.php';
?>
<main>
    <h2>Alunos</h2>
    <p>
        Esta é a pagina sobre nossos alunos. Aqui você pode saber mais sobre eles e incluir um novo aluno
    </p>
</main>
<hr>
<h1 style="text-align: center; padding: 5px;">
    Cadastrar um novo aluno
</h1>

<div class="div_aluno">
    <form action="proc_aluno.php" method="POST">
        <label for="">Nome:</label>
        <input type="text" name="nome">
        <br><br>
        <label for="">Idade:</label>
        <input type="number" name="idade">
        <br><br>
        <label for="">Telefone:</label>
        <input type="tel" name="telefone">
        <br><br>
        <label for="">Email:</label>
        <input type="email" name="email">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</div>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Idade</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno) { ?>
                <tr>
                    <td><?php echo $aluno['nome']; ?></td>
                    <td><?php echo $aluno['email']; ?></td>
                    <td><?php echo $aluno['telefone']; ?></td>
                    <td><?php echo $aluno['idade']; ?></td>
                    <td>
                        <a href="#">Visualizar</a> -
                        <a href="#">Alterar</a> -
                        <a href="#">Excluir</a>
                    </td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</div>

<?php
include 'footer.php';
?>