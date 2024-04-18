<?php
echo $message;
if (!app()->auth->user()->id_role == '1'):
            ?>
    <h1 style="color: #b70002">Отказано в доступе!</h1>

        <?php
        else:
            ?>
            <h2 class="add_person_title">Добавление сотрудника</h2>
            <div class="add_person_div">
                <form class="signup_page" method="post">
                    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                    <label>Имя</label><input class="add_input" type="text" name="name">
                    <label>Логин</label><input class="add_input" type="text" name="login"></label>
                    <label>Пароль</label><input class="add_input" type="password" name="password"></label>
                    <button class="add_button">Зарегистрироваться</button>
                </form>
            </div>
        <?php
        endif;
        ?>
