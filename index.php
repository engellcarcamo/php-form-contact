<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple contact form using PHP. Email me at engelscarcamo59@gmail.com">
    <meta name="author" content="Engels Cárcamo">
    <title>Form Contact Using PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <form action="#" method="post">
        <h1>Contact Us!</h1>
        <label>
            Name:
            <input type="text" name="name" required placeholder="your name here...">
        </label>
        <label>
            Email:
            <input type="email" name="email" required placeholder="example@correo.com">
        </label>
        <label>
            Phone:
            <input type="tel" name="phone" required placeholder="+1 555-123-4567">
        </label>
        <label>
            Subject:
            <input type="text" name="subject" placeholder="e.g., Meeting Request">
        </label>
        <label>
            Message:
            <textarea name="message" rows="4" required placeholder="Type your message here"></textarea>
        </label>
        <input type="submit">
    </form>
</body>

</html>