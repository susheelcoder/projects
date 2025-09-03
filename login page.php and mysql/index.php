<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Indie+Flower&display=swap"
        rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>login page ushe to php and Mysql data wesh</title>
</head>
<style>

</style>

<body>
    <div class="containar">
        <div class="form-box active" id="login-form">
            <form action="">
                <h2>login</h2>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p>Don't have an account?<a href="#" onclick="showform('Register-form')">Register</a></p>
            </form>
        </div>
        <div class="form-box" id="Register-form">
            <form action="">
                <h2>Register</h2>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <select name="role" required>
                    <option value="">--Select Role--</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <button type="submit" name="login">Register</button>
                <p>Already have an account?<a href="#"onclick="showform('login-form')">Login</a></p>
            </form>
        </div>   
    </div>

</body>

</html>