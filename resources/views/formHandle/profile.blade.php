<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background: white;
            padding: 2rem 2.5rem;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .profile-container h2 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .profile-container h3 {
            font-size: 1.2rem;
            color: #555;
        }

        .quote {
            margin-top: 2rem;
            font-style: italic;
            font-size: 0.95rem;
            color: #888;
        }
    </style>
</head>

<body>

    <div class="profile-container">
        <h2>Profile Page</h2>

        <!-- @if(session('email'))
        <h3>Welcome, {{ session('email') }}!</h3>
        @else
        <h3>Please log in to view your profile.</h3>
        @endif -->
        @if (session('message'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('message') }}
        </div>
        @endif

        <h2>Profile Page</h2>
        <p>Logged in as: <strong>{{ session('email')}}</strong></p>

        <a href="logout">Logout</a>
    </div>

</body>

</html>