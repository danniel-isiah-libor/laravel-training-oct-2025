<!DOCTYPE html>
<html>
<head>
    <title>Work Experience</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4 text-center">Work Experience</h2>

    {{-- If $id is set, show single record --}}
    @if(isset($id) && $work)
        <div class="card p-4 shadow-sm">
            <h4>{{ $work->company_name }}</h4>
            <p><strong>Position:</strong> {{ $work->position }}</p>
            <p><strong>Tenure:</strong> {{ $work->tenure }}</p>
            <a href="/workexperience" class="btn btn-secondary btn-sm mt-3">Back to List</a>
        </div>

    {{-- Else show all records --}}
    @elseif(is_object($work))
        <div class="row">
            @foreach($work as $id => $w)
                <div class="col-md-4 mb-3">
                    <div class="card p-3 shadow-sm">
                        <h4>{{ $w->company_name }}</h4>
                        <p><strong>Position:</strong> {{ $w->position }}</p>
                        <p><strong>Tenure:</strong> {{ $w->tenure }}</p>
                        <a href="/workexperience/{{ $id }}" class="btn btn-primary btn-sm">View</a>
                    </div>
                </div>
            @endforeach
        </div>

    {{-- pass --}}


    @else
        <div class="alert alert-danger">No work experience found.</div>
        <a href="/workexperience" class="btn btn-secondary btn-sm mt-3">Back to List</a>
    @endif
</div>
</body>
</html>


