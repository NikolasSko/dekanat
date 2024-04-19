<?php
echo $message;
if (!app()->auth->user()->id_role == '0'):
    ?>
    <h1 style="color: #b70002">Только для деканатов!</h1>

<?php
else:
    ?>
    <h2 class="title">Добавление дисциплины</h2>
    <div class="add_person_div">
        <form class="form_add_lecturer" method="post">

            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>" required/>

            <input placeholder="Введите название дисциплины" class="login_input1" type="text" name="name" required>
            <label style="position: relative; left: 20px; top: 90px" for="b">Выберите кафедру</label>
            <select class="select" id="departments" name="id_department" required>
                <option value="" selected></option>
                <?php foreach ($departments as $department): ?>
                <option name="department" value="<?php echo $department->id; ?>"><?php echo $department->name; ?></option>
                <?php endforeach; ?>
            </select>



            <button type="submit" class="form_add_btn">Добавить</button>
        </form>

    </div>
<?php
endif;
?>










