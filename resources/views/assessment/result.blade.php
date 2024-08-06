<!DOCTYPE html>
<html>
<head>
    <title>Assessment Result</title>
</head>
<body>
    <h1>ISO 50001 Self-Assessment Result</h1>
    <p>Readiness Level: {{ $assessment->readiness_level }}</p>
    <p>Total Score: {{ $assessment->total_score }}</p>
    <a href="{{ route('home') }}">Home</a>
</body>
</html>
