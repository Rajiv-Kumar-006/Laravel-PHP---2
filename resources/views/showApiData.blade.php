<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>API Data Cards</title>
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
    <div class="container my-5">
        <h2 class="mb-4 text-center fw-bold">API Data</h2>
        <div class="row g-4 justify-content-center">
            @foreach($data as $item)
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <p> {{$item['userId']}} </p>
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <p class="card-text">{{ $item['body'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Well begun is half done. - Aristotle -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>