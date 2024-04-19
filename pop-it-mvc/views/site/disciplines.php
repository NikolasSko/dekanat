<?php
if (!app()->auth::check()):
    ?>
    <h1>Даже не пытайся!</h1>

<?php
else:
    ?>
    <h1 class="title">Список дисциплин</h1>
    <a class="lecturers_add" href="add_discipline">Добавить дисциплину</a>
    <div class="add_departments_div">
    <ul class="list_items">
        <?php foreach ($disciplines as $discipline): ?>
            <li>
                <span class="teacher_info"><?php echo 'Дисциплина: ' . ' ' .$discipline->name . ' Кафедра:  ' . $discipline->departments->name; ?></span>
            </li>

        <?php endforeach; ?>
    </ul>
    </div>

<?php
endif;
?>


