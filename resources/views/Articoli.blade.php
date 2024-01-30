<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: black">
<x-navbar>
</x-navbar>


<h1 style="color: rgb(190, 190, 190)"> Articoli presenti </h1>


<div class="container">
    <div class="row">
        @foreach ($articoli as $chiave => $articolo)
            <x-card
            :titolo="$articolo['titolo']"
            :nome="$articolo['nome']"
            :descrizione="$articolo['descrizione']"
:chiave="$chiave">
            </x-card>

        @endforeach

    </div>
</div>

</body>

</html>
