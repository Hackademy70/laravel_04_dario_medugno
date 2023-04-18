<div class="card" style="width: 18rem;">
    <img src="/img/{{ $strumentImg }}" class="card-img-top" alt="{{ $strumentName }}">
    <div class="card-body">
      <h5 class="card-title">{{ $strumentName }}</h5>
      <p class="card-text d-flex justify-content-space-between">
          <span>Descrizione: {!! Str::limit($strumentAbstract, 18) !!}</span>
      </p>
      <p>
        <span>Categoria: {{ $strumentCategory }}</span>
      </p>
      <a href="{{ route('strument.show', ['id' => $strumentId ])}}" class="btn btn-primary">Scopri di più</a>
    </div>
  </div>