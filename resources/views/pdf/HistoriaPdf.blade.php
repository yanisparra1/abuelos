<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha Social Abuelos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.2; /* Ajusta este valor para controlar el espaciado entre líneas */
        }
        h1 {
            text-align: center;
            margin-bottom: 10px; /* Reduce el margen inferior */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        th, td {
            border: 1px solid #000;
            padding: 4px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .section-title {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>FICHA SOCIAL ABUELOS 24 DE JULIO</h1>

    <table>
        <tr>
            <td><strong>Nombre: {{$historia->abuelo->nombre}} {{$historia->abuelo->apellido}}</strong>   Sexo {{$historia->abuelo->sexo}}</td>
            <td><strong>Fecha:  </strong> 25/02/2025</td>
            <td><strong>Genero:</strong>F </td>
           
        </tr>
        <tr>
            <td colspan="2">
                <strong>Dirección:</strong>
                {{$historia->abuelo->direccion}}
            </td>
            <td><strong>Fecha de Nacimiento:</strong>  {{$historia->abuelo->fecha_nacimiento}}</td>
        </tr> 

    </table>

    <table>
        <tr>
            <th  class="section-title">Alergias a Medicamentos u otra Sustancia</th>
        </tr>
        @foreach ($historia->alergias as $alergia)
        <tr>
            <td>{{$alergia->nombre}}</td>
        </tr>
        @endforeach
       
       
    </table>

    <table>
        <tr>
            <th colspan="2" class="section-title">Medicamentos Actuales</th>
        </tr>
        <thead>
       
            <tr>
                <th>Sustancia</th>
                <th>Dosis</th>
            </tr>
           
        </thead>
        <tbody>
        @foreach ($historia->medicinas as $medicamento)
            <tr>
                <td>{{$medicamento->nombre}}</td>
                <td>{{$medicamento->dosis}}</td>
            </tr>
        @endforeach           
        </tbody>
    </table>

    <table>
        <tr>
            <th  class="section-title">Operaciones y Hospitalizaciones</th>
        </tr>
        @foreach ($historia->histmedicos as $histMedico)
            <tr>
                <td><strong>{{ $histMedico->nombre }}</strong> </td>
            </tr>
        @endforeach 
        
    </table>

    <table>
        <tr>
            <th class="section-title">Historia Médica de Padecimientos</th>
        </tr>
        <tr>
            <td><strong>Alta Presión:</strong> Sí</td>
        </tr>
        <tr>
            <td><strong>Diabetes:</strong> No</td>
        </tr>
        <tr>
            <td><strong>Cáncer:</strong> No</td>
        </tr>
        <tr>
            <td><strong>Anemia:</strong> Sí</td>
        </tr>
        <tr>
            <td><strong>Otros:</strong> Depresión</td>
        </tr>
    </table>

    <table>
        <tr>
            <th class="section-title">Historial Familiar</th>
        </tr>
        <tr>
            <td><strong>Hijos:</strong> Fallecido</td>
        </tr>
        <tr>
            <td><strong>Exposo(a):</strong> Nuestros</td>
        </tr>
        <tr>
            <td><strong>Otros Familiares:</strong> Varias</td>
        </tr>
    </table>

</body>
</html>
