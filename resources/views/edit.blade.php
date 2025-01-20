<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .edit-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        textarea {
            resize: vertical;
        }
        .action-buttons {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        button, 
        .nav-buttons a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
            text-align: center;
            flex: 1;
            margin: 0 5px;
            border: none;
            cursor: pointer;
        }
        button:hover, 
        .nav-buttons a:hover {
            background-color: #0056b3;
        }
        .save {
            background-color: #28a745;
        }
        .cancel {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="edit-container">
        <h2>Edit Product</h2>
        <form id="editForm" method="POST" action="{{ route('update', $ourPost->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{$ourPost->name}}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4">{{$ourPost->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" value="{{$ourPost->price}}">
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" value="{{$ourPost->image}}">
            </div>
            <div class="nav-buttons">
                <button type="submit">Update</button>
                <a href="{{ route('product') }}">Product</a>
            </div>
        </form>
    </div>
</body>
</html>
