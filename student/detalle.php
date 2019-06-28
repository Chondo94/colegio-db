<?php
require_once('../templates/header.php');
require_once('../templates/navbar.php');
include('../src/database/connection.php');

$id = $_GET['id'];
$sql_class = "select sb.name as class, y.year as year, sby.score, sy.end_date "
    . "from subject sb, year y, student_subject_year sby, subject_year sy, student s "
    . "where sby.student_id = s.id "
    . "and sby.subject_year_id = sy.id "
    . "and sy.subject_id = sb.id "
    . "and sy.year_id = y.id "
    . "and s.id = '$id'";
if($db_con){
    $classes = $db_con -> query($sql_class);
}else{
    $classes = null;
}

?>
<br><br><br>
<div class="columns">
    <div class="column is-flex is-vcentered">
        <div class="section">
            <?php include_once('../templates/menu.php') ?>
        </div>
    </div>
    <div class="column is-three-fifths">

      <header class="card-header">
          <p class="card-header-title title is-3">Detalle de estudiante</p>

      </header>

        <div class="card">

          <input type="hidden" name="id" value="<?php echo($_GET['id'])?>">
      <nav class="level">
          <div class="level-left">
              <span class="level-item">
                  <label name="name" class="label title is-5" type="text" value="" placeholder="e.g Alex Smith">
                    <?php echo($_GET['name'])?>
                  </label>
              </span>
          </div>

          <div class="level-right">
              <span class="level-item">
                <span class="buttons">
                    <button class="button is-dark">Imprimir Constancia</button>
                    <button class="button is-dark">Asignar</button>
                </span>
              </span>
          </div>
        </nav>
        <nav class="level">
          <div class="field">
              <div class="control">
                  <label name="codigo" class="label title is-5" type="date" value="">
                   <?php echo($_GET['code'])?>
                  </label>
              </div>
          </div>
        </nav>
        <nav>
          <div class="field">
              <div class="control">
                  <label name="birthdate" class="label title is-5" type="date" value="">
                   <?php echo($_GET['date'])?>
                  </label>
              </div>
          </div>
        </nav><br>

            <div class="card-cotent is-flex is-horizontal-center">
              <table class="table is-hoverable is-fullwidth">
                      <thead>
                          <tr>
                              <th class="title is-5">Nombre</th>
                              <th class="title is-5">Año</th>
                              <th class="title is-5">Estado</th>
                              <th class="title is-5">Nota</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach($classes as $class){?>
                              <tr>
                                  <td><?php echo($class['class'])?></td>
                                  <td><?php echo($class['year'])?></td>
                                  <td><?php
                                      $date = $class['end_date'];
                                      $today = date("Y-m-d");
                                      if($date < $today){
                                          echo('Finalizado');
                                          $score = true;
                                      }else{
                                          echo('En Curso');
                                          $score = false;
                                      }
                                  ?></td>
                                  <td><?php
                                          if($score == true){
                                              echo($class['score']);
                                          }else{
                                              echo('NI*');
                                          }
                                      ?></td>
                              </tr>
                          <?php }?>
                      </tbody>
                  </table><br><br>
            </div>
        </div>
    </div>
    <div class="column"></div>
</div>
<?php require_once('../templates/footer.php'); ?>
