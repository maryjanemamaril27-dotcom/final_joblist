<!DOCTYPE html>
<html>
<head>
    <title>Job Details</title>
</head>
<body>

    <h1>{{ $job['title'] }}</h1>

    <p><strong>Salary:</strong> {{ $job['salary'] }}</p>

    <p><strong>Description:</strong> {{ $job['job_description'] }}</p>

    <a href="/jobs">Back to job list</a>

</body>
</html>
