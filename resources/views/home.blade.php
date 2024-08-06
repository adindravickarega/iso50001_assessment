<!DOCTYPE html>
<html>
<head>
    <title>ISO 50001 Self-Assessment Tool</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('/images/1.png') no-repeat center center fixed;
            background-size: cover;
            color: #fff; /* Set default text color to white */
        }
        .navbar {
            display: flex;
            justify-content: flex-end;
            background-color: rgba(0, 0, 0, 0); /* Transparent black background */
            padding: 10px;
        }
        .navbar a {
            color: #fff;
            padding: 16px 30px; /* Increased padding for larger clickable area */
            font-size: 20px; /* Increased font size */
            text-decoration: none;
            text-align: center;
            margin-left: 15px; /* Added margin to space out items */
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s; /* Smooth transition for hover effects */
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            color: #fff; /* White text color for logo */
        }
        .content {
            padding: 20px;
        }
        h1 {
            font-size: 48px;
            margin-top: 0; /* Remove default margin to align it properly */
        }
        h2 {
            font-size: 32px;
            margin-top: 0; /* Remove default margin to align it properly */
        }
        p {
            font-size: 32px;
            line-height: 1.5;
            margin-top: 0; /* Remove default margin to align it properly */
        }
        a.button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            background-color: #28a745;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        a.button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">EnerGauge</div>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about-us') }}">About Us</a>
        <a href="{{ route('register') }}">Log In/Register</a>
    </div>
    <div class="content">
        <br><br><br>
        <h2>Welcome to</h2>
        <h1>ISO 50001 Self-Assessment Tool</h1>
        <p>Achieve ISO 50001 Certification with Confidence.<br>Assess your readiness for ISO 50001 Energy <br>Management System certification with our <br>comprehensive self-assessment tool.</p>

        
        @if (Auth::check())
            <a href="{{ route('assessment.start') }}" class="button">Start Your Assessment</a>
        @else
            <a href="{{ route('register') }}" class="button">Start Your Assessment</a>
        @endif
    </div>
</body>
</html>
