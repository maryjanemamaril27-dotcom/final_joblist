<!DOCTYPE html>
<html>
<head>
    <title>Job List</title>
</head>
<body>
    <h1>Available Jobs</h1>

    @foreach($jobs as $job)
        <div style="margin-bottom:20px;">
            <h3>
                <a href="/jobs/{{ $job['id'] }}">
                    {{ $job['title'] }}
                </a>
            </h3>
            
        </div>
    @endforeach

</body>
</html>
