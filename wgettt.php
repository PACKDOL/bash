

// Antarmuka HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persistent WGET Tool</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; }
        .container { max-width: 500px; margin: auto; padding: 20px; background: #fff; box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1); border-radius: 8px; }
        h2 { text-align: center; color: #333; }
        label { display: block; margin-top: 10px; color: #555; }
        input[type="text"], input[type="number"] { width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; }
        button { margin-top: 15px; padding: 10px; width: 100%; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #0056b3; }
        .status { margin-top: 15px; font-size: 0.9em; color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Persistent WGET Tool</ h2>
        <form method="post">
            <label for="url">File URL:</label>
            <input type="text" name="url" id="url" required placeholder="Enter file URL">
            
            <label for="interval">Interval (seconds):</label>
            <input type="number" name="interval" id="interval" value="1" min="1">
            
            <label for="filename">Filename:</label>
            <input type="text" name="filename" id="filename" value="downloaded_file.ext">
            
            <label for="path">Path:</label>
            <input type="text" name="path" id="path" placeholder="Enter path (e.g., /path/to/downloads)">
            
            <button type="submit" name="action" value="start">Start Download</button>
            <button type="submit" name="action" value="stop">Stop Download</button>
            <button type="submit" name="action" value="recover">Recover File</button>
        </form>

        <?php if (isset($_SESSION['download_pid'])): ?>
            <div class="status">Download in progress with PID: <strong><?php echo htmlspecialchars($_SESSION['download_pid']); ?></strong> and interval: <strong><?php echo htmlspecialchars($_SESSION['download_interval']); ?></strong> to <strong><?php echo htmlspecialchars($_SESSION['download_path']); ?>/<?php echo htmlspecialchars($_SESSION['download_filename']); ?></strong></div>
        <?php else: ?>
            <div class="status">No download in progress.</div>
        <?php endif; ?>
    </div>
</body>
</html>
