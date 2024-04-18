<?php
echo $message;
if (!app()->auth->user()->id_role == '0'):
    ?>
    <h1 style="color: #b70002">Отказано в доступе!</h1>

<?php
else:
    ?>
    <h2 class="add_person_title">Добавление сотрудника</h2>
    <div class="add_person_div">
        <form class="signup_page" method="post" enctype="multipart/form-data">

            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>

            <label>Введите имя</label>
            <input class="add_input" type="text" name="lastname">
            <label>Введите фамилию</label>
            <input class="add_input" type="text" name="firstname">
            <label>Введите отчество</label>
            <input class="add_input" type="text" name="patronymic">
            <label>Выберите пол</label>
            <select class="add_input" name="gender" id="">
                <option value="Муж.">Мужской</option>
                <option value="Жен.">Женский</option>
            </select>
            <label>Введите дату рождения</label>
            <input class="add_input" type="date" name="age">
            <label>Введите город</label>
            <input class="add_input" type="text" name="place">
            <label>Введите должность</label>
            <input class="add_input" type="text" name="job">
            <label for="dep">Выберите кафедру</label>
            <select id="dep" name="id_department" required>
                <option value="" selected></option>
                <?php foreach ($departments as $department): ?>
                    <option name="department" value="<?php echo $department->id; ?>"><?php echo $department->name; ?></option>
                <?php endforeach; ?>
            </select>

            <label>Выберите фото</label>
            <input class="add_input" type="file" name="img" required>


            <button type="submit" class="add_button">Добавить</button>
        </form>
    </div>
<?php
endif;
?>
