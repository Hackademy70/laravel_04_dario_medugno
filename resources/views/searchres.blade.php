<x-layout>

   

    <div class="container">
        <div class="row my-5">
            <div class="col-12 col">
                <h1>Risultati Ricerca per: <span class="fst-italic">{{ $chiaveRicerca }}</span></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">

            @if (count($struments) > 0)
            @foreach ($struments as $strument)
            <div class="col-12 col-md-3 my-2">
                <x-strument-card 
                
                    strumentId="{{ $strument['id'] }}"
                    strumentName="{{ $strument['name'] }}"
                    strumentImg="{{ $strument['img'] }}"
                    strumentAbstract="{{ $strument['abstract'] }}"
                    strumentCategory="{{ $strument['category'] }}"
                />
            </div>
            @endforeach

            @else
                  <div class="alert alert-primary h3" role="alert">
                    Siamo spiacenti, non ci sono risultati.
                  </div>
            @endif
            
               
            </div>
        </div>
    </div>

</x-layout>

