<?php
if (!app()->auth::check()):
    ?>
    <h1>Даже не пытайся!</h1>

<?php
else:
    ?>
    <h1 class="title">Список Кафедр</h1>
    <a class="lecturers_add" href="add_departments">Добавить</a>
    <div class="add_departments_div">
        <ul class="list_items">
            <?php foreach ($departments as $department): ?>
                <li>
                    <span class="teacher_info"><?php echo $department->name. ' ' . $department->teachers->lastname . ' ' . $department->teachers->firstname . ' ' . $department->teachers->patronymic; ?></span>

                </li>

            <?php endforeach; ?>

        </ul>
    </div>
<?php
endif;
?>


