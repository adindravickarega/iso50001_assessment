<!DOCTYPE html>
<html>
<head>
    <title>About Us - ISO 50001 Self-Assessment Tool</title>
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
            max-width: 1400px;
            margin: 0 auto; /* Center the content horizontally */
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
            font-size: 28px;
            line-height: 1.5;
            margin-top: 0; /* Remove default margin to align it properly */
            text-align: justify; /* Justify text alignment */
        }
        ul {
            font-size: 28px; /* Increase font size for the list */
            padding-left: 20px; /* Add some padding to the left for better alignment */
        }
        li {
            font-size: 28px; /* Increase font size for list items */
            margin-bottom: 10px; /* Add some spacing between list items */
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
        <br><br>
        <p>Our ISO 50001 Self-Assessment Tool is crafted to provide you with a comprehensive understanding of your organization's compliance level. This straightforward and user-friendly tool enables you to make informed decisions about the support needed to achieve ISO 50001 certification. Featuring 72 questions across seven sections, you can assess your ISO 50001 readiness in just 60 minutes. Upon completion, you'll receive a report with a total score, readiness level, and insights in the following areas:</p>
        <ul>
            <li>Organizational Context</li>
            <li>Leadership</li>
            <li>Planning</li>
            <li>Support</li>
            <li>Operations</li>
            <li>Performance Evaluation</li>
            <li>Improvement</li>
        </ul>
    </div>
</body>
</html>
