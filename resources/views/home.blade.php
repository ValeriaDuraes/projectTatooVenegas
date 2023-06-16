
<x-layout>

    <section>
        <div class="card">
            @foreach ($estilos as $estilo)
                <x-card :$estilo></x-card>
            @endforeach
        </div>
    </section>

    <section>

        <div class="container-work">
        <h1>TRABALHOS RECENTES</h1>

        <div class="img-work">
            @foreach ($tattoos as $tattoo)
                <img src="{{$tattoo->imagens->first()?->img}}" alt="">
            @endforeach
        </div>
        
        </div>

    </section>
</x-layout>