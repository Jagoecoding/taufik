<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Face Recognition</title>
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

    /* Left Section - Title */
    .left-section {
      color: #FFFFFF;
      text-align: left;
    }

    .left-section h1 {
      font-size: 60px;
      font-weight: bold;
      line-height: 1.2;
    }

    .left-section h1 span {
      color: #928EFF; /* Purple color for "ACCOUNT" */
    }

    .left-section img {
      margin-top: 20px;
      max-width: 300px;
    }
    /* Form Container */
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
      background-color: #5B47E0; /* Purple button color */
      color: #FFFFFF;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-container button:hover {
      background-color: #7261F1; /* Hover effect */
    }

    .login-link {
      text-align: center;
      margin-top: 15px;
      color: #9E9E9E;
      font-size: 13px;
    }

    .login-link a {
      color: #1E90FF; /* Biru gelap */
      text-decoration: none;
    }    

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Left section with the title -->
    <div class="left-section">
      <h1>CREATE<br><span>ACCOUNT</span></h1>
    </div>
      
    <!-- Form container -->
    <div class="form-container">
      <h2>Sign Up</h2>
      <p>Please Enter Your Details</p>
      <form>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
        </div>
        <button type="submit">Sign Up</button>
      </form>
      <div class="login-link">
        Already have an account? <a href="login.html">Log In</a>
      </div>
    </div>
  </div>
</body>
</html>
