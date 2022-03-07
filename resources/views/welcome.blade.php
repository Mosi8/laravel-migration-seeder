<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travels</title>
</head>
<body>
    @foreach ($ls_viaggi as $chiave => $viaggio)
                Luogo: {{$viaggio['luogo']}};
                Durata: {{$viaggio['durata']}} giorni;
                Struttura: {{$viaggio['struttura']}};
                Persone: {{$viaggio['num_persone']}};
                Descrizione: {{$viaggio['descrizione']}};
                Costo: {{$viaggio['costo']}}€; <br>
    @endforeach
</body>
</html>