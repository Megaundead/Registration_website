<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration here</title>
    <link href="./front/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1>Welcome to registration site</h1>
<div class="container">
    <form action="/back/registration.php" method="post" class="form">
        <h2>Fill your registration form here</h2>
        <label>
            <span class="label">Login</span>
            <input type="text" name="login">
        </label>
        <label>
            <span class="label">Password</span>
            <input type="text" name="pass">
        </label>
        <button class="submit">
            Submit
        </button>
    </form>
    <p class="login">
        Already have account? <a href="/back/login.php">Login!</a>
    </p>
</div>
</body>
</html>

