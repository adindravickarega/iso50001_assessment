<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('/images/2.png') no-repeat center center fixed; /* Background image */
            background-size: cover; /* Ensure the background covers the entire page */
        }
        .container {
            display: flex;
            width: 100%; /* Increased width of the container */
            max-width: 1800px; /* Increased max-width for the container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0); /* Semi-transparent white background for the container */
        }
        .info, .form {
            padding: 20px;
        }
        .info {
            flex: 1;
            background-color: rgba(255, 255, 255, 0); /* Transparent background for .info */
            color: #fff; /* White text color for .info */
            max-width: 1000px; /* Adjusted max-width for .info */
            border-right: 0px solid #ddd; /* Optional: Add a border to separate the sections */
        }
        .form {
            flex: 1;
            background-color: #fff;
            margin-left: 60px; /* Add margin to create space between .info and .form */
            margin-right: 60px; /* Add margin to create space between .info and .form */
            border-radius: 40px; /* Rounded corners for the form */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add shadow to the form */
            max-width: 600px; /* Set max-width for the form */
            width: 100%; /* Make sure the form uses full width up to max-width */
        }
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            color: #fff; /* White text color for logo */
        }
        h1 {
            font-size: 48px;
            margin-top: 0; /* Remove default margin to align it properly */
            text-align: center; /* Justify text alignment */
        }
        h2 {
            font-size: 32px;
            margin-top: 0; /* Remove default margin to align it properly */
            text-align: center; /* Justify text alignment */
        }
        p {
            font-size: 26px;
            line-height: 1.5;
            margin-top: 0; /* Remove default margin to align it properly */
            text-align: justify; /* Justify text alignment */
        }
        ol, li {
            font-size: 26px;
            line-height: 1.5;
            text-align: justify; /* Justify text alignment */
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form div {
            margin-bottom: 15px;
        }
        form label {
            margin-bottom: 5px;
        }
        form input {
            padding: 6px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
            border-radius: 5px; /* Rounded corners for input fields */
            border: 1px solid #ddd; /* Border color for input fields */
            background-color: #007bff; /* Blue background color for input fields */
            color: #fff; /* White text color for input fields */
        }
        button {
            padding: 10px;
            font-size: 16px;
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .login-link {
            margin-top: 20px;
        }
        .login-link a {
            color: #28a745;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="info">
            <div class="logo">EnerGauge</div>
            <br><br><br><br>
            <p>Why ISO 50001?</p>
            <p>ISO 50001 certification helps organizations improve their energy performance, reduce costs, and enhance environmental sustainability. Our self-assessment tool guides you through the certification process, ensuring you meet all necessary standards.</p>
            <p>How It Works?</p>
            <ol>
                <li><strong>Please sign up:</strong> You can create an account to get started.</li>
                <li><strong>Take the Assessment:</strong> Answer questions based on ISO 50001 standards.</li>
                <li><strong>Get Your Results:</strong> Receive a detailed report highlighting your strengths and areas for improvement.</li>
            </ol>
            <p><strong>Ready to Get Started?</strong> Take the first step towards ISO 50001 certification today.</p>
        </div>
        <div class="form">
            <h2>Self-Assessment Tool</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <label for="email">Email*:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="first_name">First Name*:</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                <div>
                    <label for="last_name">Last Name*:</label>
                    <input type="text" id="last_name" name="last_name" required>
                </div>
                <div>
                    <label for="company">Company*:</label>
                    <input type="text" id="company" name="company" required>
                </div>
                <div>
                    <label for="phone">Phone*:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div>
                    <label for="sector">Sector*:</label>
                    <input type="text" id="sector" name="sector" required>
                </div>
                <div>
                    <label for="password">Password*:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <label for="password_confirmation">Confirm Password*:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                
                <button type="submit">Register</button>
            </form>
            <div class="login-link">
                <p>Already registered? <a href="{{ route('login') }}">Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>
