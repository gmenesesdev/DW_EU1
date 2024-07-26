<!DOCTYPE html>
<html>
<head>
    <title>UF Value</title>
</head>
<body>
    <h1>Valor de la UF del día</h1>
    @if(isset($ufValue))
        <p>El valor de la UF hoy es: {{ $ufValue }}</p>
    @else
        <p>No se pudo obtener el valor de la UF.</p>
    @endif
</body>
</html>
