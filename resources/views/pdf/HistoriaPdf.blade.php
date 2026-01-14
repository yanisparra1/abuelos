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
            <td><strong>Nombre: {{$historia->abuelo->nombre}} {{$historia->abuelo->apellido}}</strong>  </td>
            <td><strong>Fecha:  </strong> {{ \Carbon\Carbon::now()->format('d/m/Y') }}</td>
            <td><strong>Genero:</strong>{{$historia->abuelo->sexo}}  - <strong>Edad:</strong> {{ \Carbon\Carbon::parse($historia->abuelo->fecha_nacimiento)->age }} </td>
           
        </tr>
        <tr>
            <td colspan="2">
                <strong>Dirección:</strong>
                {{$historia->abuelo->direccion}}
            </td>
            <td><strong>Fecha de Nacimiento:</strong>  {{ \Carbon\Carbon::parse($historia->abuelo->fecha_nacimiento)->format('d/m/Y') }}</td>
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
        @foreach ($historia->operaciones as $operacion)
            <tr>
                <td><strong>{{ $operacion->detalles }}</strong> </td>
            </tr>
        @endforeach 
        
    </table>

    <table>
        <tr>
            <th class="section-title">Historia Médica de Padecimientos</th>
        </tr>
   
        @foreach ($historia->histmedicos as $histMedico)
            <tr>
                <td><strong>{{ $histMedico->nombre }}</strong> </td>
            </tr>
        @endforeach 
    </table>

    <table>
        <tr>
            <th class="section-title">Historial Familiar</th>
        </tr>

                @foreach ($historia->familias as $familia)
            <tr>
                <td><strong>{{ $familia->parentesco }}:</strong> {{ $familia->detalles }}</td>
            </tr>
        @endforeach 
 
       
 
    </table>

</body>
</html>
