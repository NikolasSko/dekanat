<?php
if (!app()->auth::check()):
    ?>
    <h1>Даже не пытайся!</h1>

<?php
else:
    ?>
    <h1>Список дисциплин</h1>
<!--    <div class="add_departments_div">-->
    <div class="but_departments"><a class="add_departments_button" href="add_discipline">Добавить</a></div>
<div class="add_departments_div">
<!--    </div>-->
    <ul class="list_items">
        <?php foreach ($disciplines as $discipline): ?>
            <li>
                <span class="teacher_info"><?php echo $discipline->name . ' ' . $discipline->departments->name; ?></span>
            </li>

        <?php endforeach; ?>
    </ul>
    </div>

<?php
endif;
?>


