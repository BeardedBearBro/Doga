<?php
$file_name = $_FILES["csvFile"]["name"];
$target_path = $dir = plugin_dir_path( __FILE__ )."C:\Users\infba02\Desktop\PHP\Photos\Application\Datas". $file_name;
echo $target_path;
move_uploaded_file($_FILES["csvFile"]["tmp_name"],$target_path. $file_name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Képek</title>
    <link href="Application/style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <aside id="side-bar">
        <div class=""></div>
        <hr>
        <ul>
            <li><a href="index.php?action=main">Home</a></li>
            <li><a href="index.php?action=add">Upload</a></li>
        </ul>
    </aside>
    <main id="main-content">
        <?php
            switch(@$_GET['action'])
            {
                case 'main':include_once 'Application/main.php'; break;
                case 'add': include_once 'Application/add.php'; break;
            }
        ?>
    </main>
</body>
</html>