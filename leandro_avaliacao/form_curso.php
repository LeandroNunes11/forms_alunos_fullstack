<?php
include 'header.php';
include 'list_proc_cursos.php';
?>
<main>
    <h2>Cursos</h2>
    <p>
        Esta é a pagina sobre nossos cursos. Aqui você pode saber mais sobre eles e incluir um novo curso
    </p>
</main>
<hr>
<h1 style="text-align: center; padding: 5px;">
    Cadastrar um novo curso
</h1>

<div class="div_curso">
    <form action="proc_curso.php" method="POST">
        <label for="">Curso:</label>
        <input type="text" name="curso">
        <br><br>
        <label for="">Período:</label>
        <input type="number" name="periodo">
        <br><br>
        <label for="">Cordenador:</label>
        <input type="text" name="cordenador">
        <br><br>
        <label for="">Polo:</label>
        <input type="text" name="polo">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</div>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Curso</th>
                <th>Periodo</th>
                <th>Cordenador</th>
                <th>Polo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $curso) { ?>
                <tr>
                    <td><?php echo $curso['curso']; ?></td>
                    <td><?php echo $curso['periodo']; ?></td>
                    <td><?php echo $curso['cordenador']; ?></td>
                    <td><?php echo $curso['polo']; ?></td>
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