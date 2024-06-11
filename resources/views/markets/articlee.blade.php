<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333333;
            text-decoration: underline;
        }
        label {
            display: block;
            margin-bottom: 20px;
            color: #666666;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            width: 100%;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Productos</h1>
    <form action="{{route('markets.shop')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Digite el nombre del producto:
            <input type="text" name="name" required>
        </label>
        <label>
            Digite el precio del producto:
            <input type="number" name="price" step="0.01" required>
        </label>
        <label>
            Descripción corta:
            <input type="text" name="description">
        </label>
        <label>
            Cantidad de productos:
            <input type="number" name="cantidad" min="1" required>
        </label>
        <label>
            Digite la fecha:
            <input type="date" name="fecha" required>
        </label>
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>