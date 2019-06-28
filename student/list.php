<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<br><br><br>
<div class="columns">
    <div class="column is-flex is-vcentered">
        <div class="section">
            <?php include_once('../templates/menu.php') ?>
        </div>
    </div>
    <div class="column is-three-fifths">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title title is-3">Todos los estudiantes</p>
            </header>
            <div class="card-cotent is-flex is-horizontal-center">
                <table class="table is-hoverable">
                    <thead>
                        <th class="title is-5">Codigo</th>
                        <th class="title is-5">Nombre</th>
                        <th class="title is-5">Fecha de Nacimiento</th>
                        <th class="title is-5"></th>
                        <th class="title is-5"></th>
                    </thead>
                    <tbody>
                        <?php
                        include('../src/database/connection.php');
                        $sql = 'select * from student';
                        $result = $db_con->query($sql);
                        foreach ($result as $values) {
                            if ($values["is_active"] == 1) {
                                echo "<tr><td>"
                                    . $values["codigo"]
                                    . "</td><td>"
                                    . $values["fullname"]
                                    . "</td><td>"
                                    . $values["birthdate"]
                                    . "</td><td>"
                                    . "<a href='update.php"
                                    . "?id=" . $values["id"]
                                    . "&name=" . $values["fullname"]
                                    . "&date=" . $values["birthdate"]
                                    . "' class = 'button is-warning is-small is-outline'><span class='icon is-small'><i class='fas fa-edit'></i></span><span>Editar</span></a></td>"
                                    . "</td><td>"
                                    . "<a href='../src/student_controller/delete.php?id="
                                    . $values["id"]
                                    . "' class = 'button is-danger is-small is-outline'><span class='icon is-small'><i class='fas fa-times'></i></span><span>Eliminar</span></a></td>"
                                    . "</td><td>"
                                    . "<a href='detalle.php"
                                    . "?id=" . $values["id"]
                                    . "&name=" . $values["fullname"]
                                    . "&code=" . $values["codigo"]
                                    . "&date=" . $values["birthdate"]
                                    . "' class = 'button is-success is-small is-outline'><span class='icon is-small'><i class='fas fa-check-square'></i></span><span>Detalle</span></a></td>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="column"></div>
</div>
<?php require_once('../templates/footer.php'); ?>
