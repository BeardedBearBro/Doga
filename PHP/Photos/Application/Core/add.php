<?php
    $data = @$_POST;

    if(@$data["sbm"] && @$data["photo"])
    {
        require_once APP_PATH.'/file.php';
        $file = new File(APP_PATH."/datas/text.txt");

        if($file->write($data['photo']))
        {
            header("Location: index.php");
        }
    }
?>

<fieldset class="f-set">
    <legend>Add new photo</legend>   
    <form action="index.php?action=add" method="POST">     
        <input type="text" name="photo" size="30" required>
        <br>
        <br>
        <input type="submit" name="sbm">
        <input type="reset">
    </form>
</fieldset>
