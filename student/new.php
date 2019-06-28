<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div class="hero is-light is-fullheight">
    <div class="columns">
        <div class="column is-flex is-vcentered">
            <div class="section">
                <?php include_once('../templates/menu.php') ?>
            </div>
        </div>
        <div class="column is-trhee-quarters is-vcentered"><br><br><br>
            <div class="box">
                <form method="post" action="../src/student_controller/create.php">
                    <h1 class="title is-4">New Student</h1>

                    <div class="field">
                        <label class="label">Full Name</label>
                        <div class="control">
                            <input name="name" class="input" type="text" placeholder="e.g Alex Smith">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Birdthdate</label>
                        <div class="control">
                            <input name="birthdate" class="input" type="date" placeholder="1997-04-12">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary">
                                <span class="icon is-small">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span>
                                    Submit
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="column"></div>
    </div>
</div>
<?php require_once('../templates/footer.php'); ?>