<?php

$pw = isset($_POST['pw']) ? $_POST['pw'] : '';

if($pw == "admin130qwe")
{
    include("content.html");
}
else
{
    if(isset($_POST))
    {?>
        <div style="text-align:center;font-size:18px;margin-top:150px">
            <form method="POST" action="index.php">
            Password <input type="password" name="pw"></input>
            <input type="submit" name="submit" value="Go"></input>
            </form>
        </div>
    <?}
}
?>