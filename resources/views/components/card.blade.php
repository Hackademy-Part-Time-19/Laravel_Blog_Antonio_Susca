<div class="card" style="width: 20rem; margin: 10px">
    <div class="card-body">
        <h5 class="card-title">{{ $titolo }}</h5>
        <h6 class="card-title">{{ $nome }}</h6>
        <p class="card-text">{{ $descrizione }}</p>
        <a href="{{ route('articoli.articolo', ['id' => $chiave]) }}" class="btn btn-primary">Dettaglio Articolo</a>

    </div>
</div>
