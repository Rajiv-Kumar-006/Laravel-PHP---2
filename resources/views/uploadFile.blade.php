<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Stylish File Upload</title>
    <style>
        body {
            background: #f3f4f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .upload-container {
            background-color: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .upload-container h1 {
            margin-bottom: 24px;
            color: #111827;
        }

        .upload-container p {
            color: green;
            margin-bottom: 20px;
            font-weight: 500;
        }


        label {
            display: block;
            margin-bottom: 12px;
            color: #374151;
            font-weight: bold;
            font-size: 14px;
            text-align: left;
        }

        input[type="file"] {
            border: 2px dashed #cbd5e1;
            border-radius: 8px;
            padding: 20px;
            width: 90%;
            transition: 0.3s;
            cursor: pointer;
        }

        input[type="file"]:hover {
            background-color: #f9fafb;
            border-color: #3b82f6;
        }

        button {
            margin-top: 20px;
            padding: 12px 24px;
            background: linear-gradient(135deg, #6366f1, #3b82f6);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: linear-gradient(135deg, #4f46e5, #2563eb);
        }

        .image-preview {
            margin-top: 30px;
            text-align: center;
        }

        .image-preview img {
            max-width: 100%;
            width: 300px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .image-preview img:hover {
            transform: scale(1.03);
        }
    </style>
</head>

<body>

    <div class="upload-container">
        <h1>Upload Your File</h1>

        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif

        <form action="{{ url('uploadfile') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="uploadCont">
                <label for="file">Choose a file to upload:</label>
                <input type="file" name="file" id="file" required>
            </div>

            <button type="submit"> Upload Now</button>
        </form>

        <div class="image-preview">
            @if(session('file'))
            <img src="{{ asset('storage/upload/' . session('file')) }}" alt="Uploaded Image">
            @endif
        </div>
    </div>

</body>

</html>