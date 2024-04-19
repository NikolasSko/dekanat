<div class="container">
    <div class="header">
        <h2 class="title">Поиск</h2></div>
    <form method="POST">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input class="search" name="search_query" placeholder="Поиск преподавателя..." type="search">
        <button class="search" type="submit" >Поиск</button>
    </form>
    <?php foreach ($teachers as $teachers): ?>
        <div style="color: white" class="search">
            <h3><?='Пользователь: ', $teachers->lastname .' ' . $teachers->firstname, ' ' ,$teachers->patronymic ?></h3>
        </div>
    <?php endforeach; ?><br>
    <a  class="search"" href="teachers"> Назад</a>
</div>