<?php
    if(isset($_GET['name']))
    {
        echo'Name is '.$_GET['name'];
    }
    if(isset($_POST['name']))
    {
        echo'Name is '.$_POST['name'];
    }
?>