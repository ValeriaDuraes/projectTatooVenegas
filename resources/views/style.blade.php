<x-layout>
    <h1 class="title">{{$estilo->nome_estilo}}</h1>

    <div class="history">
        {{$estilo->desc_estilo}}
    </div>

    <div class="links">
        <a href={{$estilo->link}} target="_blank">{{$estilo->nome_estilo}}</a>
    </div>
</x-layout>