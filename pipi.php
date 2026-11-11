
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de alumnos</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #141e30, #243b55);
            padding: 20px;
        }

        .contenedor {
            width: 100%;
            max-width: 430px;
            background: white;
            padding: 40px 35px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }

        .icono {
            width: 75px;
            height: 75px;
            background: linear-gradient(135deg, #4776e6, #8e54e9);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 35px;
            margin: 0 auto 20px;
        }

        h1 {
            text-align: center;
            color: #243b55;
            margin-bottom: 10px;
            font-size: 27px;
        }

        .descripcion {
            text-align: center;
            color: #888;
            font-size: 14px;
            margin-bottom: 30px;
        }

        label {
            display: block;
            color: #333;
            font-weight: 600;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 22px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #4776e6;
            box-shadow: 0 0 8px rgba(71,118,230,0.2);
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #4776e6, #8e54e9);
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(71,118,230,0.4);
        }

        .pie {
            text-align: center;
            color: #aaa;
            font-size: 12px;
            margin-top: 25px;
        }

    </style>
</head>

<body>

    <div class="contenedor">

        <div class="icono">🎓</div>

        <h1>Registro de Alumnos</h1>

        <p class="descripcion">
            Sistema de gestión escolar
            <br>
            Ingresa los datos del alumno
        </p>

        <form action="guardar.php" method="POST">

            <label for="nombre">Nombre:</label>
            <input
                type="text"
                id="nombre"
                name="nombre"
                placeholder="Escribe el nombre"
                maxlength="150"
                required
            >

            <label for="apellido">Apellido:</label>
            <input
                type="text"
                id="apellido"
                name="apellido"
                placeholder="Escribe el apellido"
                maxlength="150"
                required
            >

            <button type="submit">
            Guardar alumno
            </button>

        </form>

        <div class="pie">
            Sistema de Registro Escolar © 2026
        </div>

    </div>

</body>
</html>
