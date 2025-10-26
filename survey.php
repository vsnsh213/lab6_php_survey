<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Опитування про використання соціальних мереж</title>
</head>
<body>
    <h2>Анкета: Використання соціальних мереж</h2>
    <form action="save_survey.php" method="POST">
        Ім'я: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>

        1. Якою соціальною мережею ви користуєтесь найчастіше?<br>
        <select name="network">
            <option>Instagram</option>
            <option>Facebook</option>
            <option>TikTok</option>
            <option>Twitter</option>
            <option>Інша</option>
        </select><br><br>

        2. Скільки часу на день ви проводите в соцмережах?<br>
        <input type="radio" name="time" value="до 1 години"> До 1 години<br>
        <input type="radio" name="time" value="1-3 години"> 1–3 години<br>
        <input type="radio" name="time" value="більше 3 годин"> Більше 3 годин<br><br>

        3. Що ви зазвичай робите у соцмережах?<br>
        <textarea name="activity" rows="3" cols="40"></textarea><br><br>

        <input type="submit" value="Надіслати">
    </form>
</body>
</html>
