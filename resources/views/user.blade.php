<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List - Expensive UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
        }

        .card {
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.12);
            border: none;
        }
    </style>
</head>

<body>

    <!-- User List Section -->
    <div class="container my-5">
        <h2 class="mb-4 text-center">
            {{ $users ? 'User List' : 'No Users Found' }}
        </h2>
        @if($users && count($users))
        <div class="row g-4 justify-content-center">
            @foreach($users as $user)
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">{{ $user->email }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="alert alert-warning text-center" role="alert">
            No users available at the moment.
        </div>
        @endif
        <!-- An unexamined life is not worth living. - Socrates -->
    </div>
</body>

</html>