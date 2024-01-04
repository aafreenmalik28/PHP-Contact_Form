<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <form action="send.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea><br>

        <input type="submit" name="send" value="Submit">
    </form>
</body>
</html>