<x-layout>
    <h1 class="title">{{$estilo->nome_estilo}}</h1>

    <div class="history">
        {{$estilo->desc_estilo}}
    </div>
    <div class="container-work">
    <div class="img-work">
        @foreach($tattoosRecentes as $t)
            <img src="{{$t->imagens->first()?->img}}" alt="">
        @endforeach

    </div>
    </div>
    <div class="links">
        <a href={{$estilo->link}} target="_blank">Veja mais!</a>
    </div>
</x-layout>