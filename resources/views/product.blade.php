<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .product-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .product-table th, .product-table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        .product-table th {
            background-color: #f4f4f4;
        }
        .product-table img {
            max-width: 100px;
        }
        .nav-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .nav-buttons a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
            text-align: center;
            flex: 1;
            margin: 0 5px;
        }
        .nav-buttons a:hover {
            background-color: #0056b3;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .action-buttons button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 5px;
        }
        .action-buttons button.edit {
            color: #28a745;
        }
        .action-buttons button.delete {
            color: #dc3545;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h2>Product List</h2>
        <div class="nav-buttons">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('product') }}">Product</a>
        </div>
        <table class="product-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                
                    <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->description}}</td>
                    <td><img src="images/{{$post->image}}" width="80px" alt=""></td>
                    <td>{{$post->price}}</td>
                    <td>
                        <div class="action-buttons">
                            <button class="edit"><i class="fas fa-edit"></i></button>
                            
                            <button class="delete"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </td>
                </tr>
                
                
                @endforeach
                
               
                <!-- Srijon vai magna kamla khatse -->
            </tbody>
        </table>
    </div>
</body>
</html>
