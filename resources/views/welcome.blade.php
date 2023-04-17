<x-layout>

    <x-masthead />

    <div class="container">
        <div class="row my-5">
            <div class="col-12 col">
                <h1>Music Room</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            
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
            </div>
        </div>
    </div>

</x-layout>

