<!DOCTYPE html>
<html lang="en">
<head>
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
    input[type="string"],
    input[type="integer"],
    input[type="text"],
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

    <form action="{{route('markets.update', $markets)}}"  method="POST">
        @csrf
        @method('put')
        <label>
        Nombre del producto:
        <br>
        <input name="name" type="string" value="{{old('name',$markets->name) }}">
        <br>
        </label>
        <br>
        <label>
        Precio Producto:
        <br>
        <input name="price" type="integer" value="{{old('price',$markets->price)}}">
        <br>
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <input name="description" type="text" value="{{old('text',$markets->description)}}">
            <br>
            </label>
            <br>
            <label>
                Cantidad:
                <br>
                <input name="cantidad" type="integer" value="{{old('cantidad',$markets->cantidad)}}">
                <br>
                </label>
                <br>
                <label>
                    Fecha del Producto:
                    <br>
                    <input name="fecha" type="date" value="{{old('fecha',$markets->fecha)}}">
                    <br>
                    </label>
                    <br>
                    <label>
        <button  type="submit">ACTUALIZAR</button>
       
    </form>
</body>
</html>
</body>
</html>