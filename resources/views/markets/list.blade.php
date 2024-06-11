<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
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
   
        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 15px 20px;
            border-radius: 30px;
            font-size: 18px;
            width: 100%;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <h1><u>PRODUTOS LISTADOS</u></h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th colspan="3"></th>
            </tr>
            @foreach ($markets as $Article)
            <tr>
                <td>{{$Article->id}}</td>
                <td>{{$Article->name}}</td>
                <td>{{$Article->price}}</td>
                <td>{{$Article->description}}</td>
                <td>{{$Article->cantidad}}</td>
                <td>{{$Article->fecha}}</td>
                <td><a href="{{route('markets.show',$Article->id)}}">Mostrar</a></td>
                <td><a href="{{route('markets.edit',$Article->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('markets.destroy',$Article->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar Producto</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>
