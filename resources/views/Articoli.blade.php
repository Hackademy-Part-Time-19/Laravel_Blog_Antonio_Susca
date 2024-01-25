<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: black">

<div>
    <a href="/">Home</a>
   <a href="/Contatti/chisono">Chi Sono</a>
   </div>

<h1 style="color: rgb(190, 190, 190)"> Articoli presenti </h1>

<div class="container">
    <div class="row">
        @foreach ($articoli as $chiave => $articolo)
        <div class="card" style="width: 20rem; margin: 10px">
            <div class="card-body">
                    <h5 class="card-title">{{$articolo['titolo']}}</h5>
                    <h6 class="card-title">{{$articolo['nome']}}</h6>
                    <p class="card-text">{{$articolo['descrizione']}}</p>
                    <a href="{{route('articoli.articolo',['id'=>$chiave])}}" class="btn btn-primary">Dettaglio Articolo</a>

                </div>
            </div>
        @endforeach




    </div>

</div>

</body>

</html>
