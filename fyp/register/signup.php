<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <div style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 300px;">
        <h2 style="text-align: center;">Sign Up</h2>
        <form action="signup_process.php" method="post">
            <div style="margin-bottom: 15px;">
                <label for="username" style="display: block; margin-bottom: 5px;">Username</label>
                <input type="text" id="username" name="username" style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
                <input type="email" id="email" name="email" style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="password" style="display: block; margin-bottom: 5px;">Password</label>
                <input type="password" id="password" name="password" style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>
            <div style="text-align: center;">
                <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Sign Up</button>
            </div>
        </form>
    </div>
</body>
</html>