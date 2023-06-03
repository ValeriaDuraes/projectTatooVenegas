
<x-layout>

    <section>
        <div class="card">
            @foreach ($estilos as $estilo)
            <a href="/style/{{$estilo->id_estilo}}">
                <img class="img-card" src="{{ $estilo->img }}" alt="">
                <h2>{{$estilo->nome_estilo}}</h2>
                <p>Ver mais...</p>
            </a>
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
        <div class="img-work">
            <img src="https://s3.tattoo2me.com/wp-content/uploads/2021/06/3-3.png" alt="">
            <img src="https://s3.tattoo2me.com/wp-content/uploads/2021/07/4-74-820x1024.jpg" alt="">
            <img src="https://s3.tattoo2me.com/wp-content/uploads/2021/07/4-74-820x1024.jpg" alt="">
        </div>
        </div>

    </section>
</x-layout>