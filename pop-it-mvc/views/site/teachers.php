
<?php
if (!app()->auth::check()):
    ?>
    <h1>Даже не пытайся!</h1>

<?php
else:
    ?>
    <h1>Список преподавателей</h1>
    <div class="but_departments"><a class="add_departments_button" href="add">Добавить</a></div>
    <div class="add_departments_div">
    <ul class="list_items">
        <?php foreach ($teachers as $teacher): ?>
            <li>
                <?php if (!empty($teacher->img)): ?>
                    <img class="photo_teacher" src="<?= app()->settings->getRootPath() ?>/public/image/<?php echo $teacher->img; ?>" alt="Фото преподавателя">
                <?php endif; ?>
                <span class="teacher_info"><?php echo $teacher->lastname . ' ' . $teacher->firstname . ' ' . $teacher->patronymic . ' ' . $teacher->age . ' ' . $teacher->gender . ' ' . $teacher->place . ' ' . $teacher->job. ' '. $teacher->department->name; ?></span>
            </li>

        <?php endforeach; ?>
    </ul>
    </div>

<?php
endif;
?>