<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte PDF</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        font-size: 12px;
    }
    h1 {
        text-align: center;
        margin-bottom: 25px;
    }
    table {
        width: 100%;
        border-collapse: collapse; /* Combina los bordes de las celdas */
    }
    th, td {
        border: 1px solid #ddd; /* Borde gris estándar */
        padding: 8px; /* Espaciado interno */
        text-align: left;
    }
    thead th {
        /* === AQUÍ ESTÁ EL CAMBIO === */
        background-color: #ADD8E6; /* Color celeste (LightBlue) */
        font-weight: bold;
        text-align: center;
    }
    /* Estilo para filas alternas (opcional, pero mejora la legibilidad) */
    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>
    </head>
<body>
    
    <h1>Reporte de estudiantes en PDF</h1>
    
    <div>
        <table>
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th>NOMBRES</th>
                    <th>PRI_APE</th> <th>SEG_APE</th>
                    <th>DNI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->id }}</td>
                        <td>{{ $estudiante->nombres }}</td>
                        <td>{{ $estudiante->pri_ape }}</td>
                        <td>{{ $estudiante->seg_ape }}</td>
                        <td>{{ $estudiante->dni }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>