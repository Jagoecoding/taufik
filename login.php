<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Face Recognition</title>
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #0F0A2C;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 80%;
            max-width: 1000px;
        }

        /* Form Container - Left Side */
        .form-container {
            background-color: #1F183E;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
            width: 400px;
        }

        .form-container h2 {
            color: #FFFFFF;
            text-align: center;
            font-size: 24px;
            margin-bottom: 5px;
        }

        .form-container p {
            color: #CCCCCC;
            text-align: center;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .alternate-login {
            text-align: center;
            margin-bottom: 15px;
        }

        .alternate-login button {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            /* Melengkungkan ujung tombol */
            background-color: #5B47E0;
            color: #FFFFFF;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .alternate-login button:hover {
            background-color: #7261F1;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #FFFFFF;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #282048;
            color: #FFFFFF;
            font-size: 14px;
        }

        .form-group input::placeholder {
            color: #AAAAAA;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            color: #FFFFFF;
            font-size: 14px;
        }

        .checkbox-group input {
            margin-right: 10px;
        }

        .form-container button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 20px;
            /* Melengkungkan ujung tombol */
            background-color: #5B47E0;
            color: #FFFFFF;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #7261F1;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
            color: #9E9E9E;
            font-size: 13px;
        }

        .login-link a {
            color: #0056b3;
            /* Biru gelap */
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Right Section - Title */
        .right-section {
            color: #FFFFFF;
            text-align: right;
        }

        .right-section h1 {
            font-size: 60px;
            font-weight: bold;
            line-height: 1.2;
        }

        .right-section h1 span {
            color: #928EFF;
        }

        .right-section img {
            margin-top: 20px;
            max-width: 300px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Form container (Left Side) -->
        <div class="form-container">
            <h2>Log In</h2>
            <p>Please Enter Your Details</p>

            <!-- Alternate Login Options -->
            <div class="alternate-login">
                <button onclick="redirectToGoogle()">Log In With Google</button>
                <button onclick="redirectToFaceVerification()">Log In With Face Recognition</button>
            </div>

            <p>Or</p>

            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me for 30 days</label>
                </div>
                <button type="submit">Log In</button>
            </form>
            <div class="login-link">
                Don’t have an account? <a href="register.html">Sign Up</a>
            </div>
        </div>

        <!-- Right Section with the title (Right Side) -->
        <div class="right-section">
            <h1>WELCOME<br><span>BACK</span></h1>
        </div>
    </div>

    <script>
        function redirectToGoogle() {
            // Logic untuk login dengan Google
            alert("Redirecting to Google login...");
        }

        function redirectToFaceVerification() {
            // Logic untuk login dengan Face Recognition
            alert("Redirecting to Face Recognition login...");
        }
    </script>
</body>

</html>