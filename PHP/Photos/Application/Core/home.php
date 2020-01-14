<?php
    require_once 'file.php';

    $file = new File(APP_PATH."/datas/text.txt");

    $file->Read();
?>

<table class="mv-table">
    <tr>
        <th>photo</th>
    </tr>
    <?php foreach ($file->data as $v): ?>

    <tr><td><?= $v ?></td></tr>
    
    <?php endforeach ?>
</table>
