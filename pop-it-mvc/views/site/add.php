<?php
echo $message;
if (!app()->auth->user()->id_role == '0'):
    ?>
    <h1 style="color: #b70002">Отказано в доступе!</h1>

<?php
else:
    ?>
    <h2 class="title">Добавление сотрудника деканата</h2>
    <div class="add_person_div">
        <form class="form_add_lecturer" method="post" enctype="multipart/form-data">

            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>

            <input placeholder="Введите имя" class="login_input1" type="text" name="lastname">
            <input placeholder="Введите фамилию" class="login_input1" type="text" name="firstname">
            <input placeholder="Введите отчество" class="login_input1" type="text" name="patronymic">

            <select class="select" name="gender" id="">
                <option value="Муж.">Мужской</option>
                <option value="Жен.">Женский</option>
            </select>
            <input class="login_input1" type="date" name="age">
            <input placeholder="Введите адрес прописки" class="login_input1" type="text" name="place">
            <input placeholder="Введите должность" class="login_input1" type="text" name="job">
            <label style="position: relative; top: 90px; left: 20px" for="dep">Выберите кафедру</label>
            <select class="select" id="dep" name="id_department" required>
                <option value="" selected></option>
                <?php foreach ($departments as $department): ?>
                    <option name="department" value="<?php echo $department->id; ?>"><?php echo $department->name; ?></option>
                <?php endforeach; ?>
            </select>

            <input style="position: relative; left: 20px; top: 20px" placeholder="Выберите фото" class="photo" type="file" name="img" required>


            <button type="submit" class="form_add_btn">Добавить</button>
        </form>
    </div>
<?php
endif;
?>
