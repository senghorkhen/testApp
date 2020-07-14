<h1>Register User</h1>
<form action="create" method="post">
    <input type="text" name="name" placeholder="Username"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="number" name="age" placeholder="Age"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="text" name="province" placeholder="Province"><br><br>
    <input type="submit" value="Register">

</form>

<hr>
<ul>
    <?php if(isset($messageError)): ?>
        <?= $messageError->listErrors ?> // function oy display error mk all
    <?php endif ?>
</ul>
