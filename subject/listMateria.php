<?php
require_once('../templates/header.php');
require_once('../templates/navbar.php');
include('../src/database/connection.php');?>
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
                <p class="card-header-title title is-3">Todos los cursos</p>
            </header>
            <div class="card-cotent is-flex is-horizontal-center">
                <table class="table is-striped">
                    <thead >
                        <th class="title is-4">Nombre</th>
                        <th class="title is-5"></th>
                    </thead>
                    <tbody class="column">
                        <?php
                        $sql = 'select * from subject';
                        $result = $db_con->query($sql);
                        foreach ($result as $values) {
                            if ($values["is_active"] == 1) {
                                echo "<tr><td>"
                                    . $values["name"]
                                    . "</td><td>";

                            }
                        }
                        ?>
                      </tbody>
                      </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="column"></div>
</div>
<?php require_once('../templates/footer.php'); ?>
