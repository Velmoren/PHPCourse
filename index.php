<?php
    echo " Привет, меня зовут " . $_GET['name'] . " " . $_GET['surname'] . " , мой возраст - " . $_GET['age'];
?>

<form action="#" style="display:flex; flex-direction: column" method="get">

    <label style="margin-bottom: 10px">
        <input type="text" name="name" placeholder="Name">
    </label>
    <label style="margin-bottom: 10px">
        <input type="text" name="surname" placeholder="Surname">
    </label>
    <label style="margin-bottom: 10px">
        <input type="number" name="age" placeholder="Age">
    </label>

    <button type="submit" style="width: 100px;">Отправить</button>
</form>
