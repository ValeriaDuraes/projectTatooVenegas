<x-layout>
    <link rel="stylesheet" href="comentario.css">
    <header></header>
    <div class="container-comentarios">

        @for($i = 0; $i <10; $i++)
        <div class="card-comentario">
            <img class="foto" src="/fotos/comentarios/mateus.jpg" alt="">
            <div class="estrelas">
                <img src="/fotos/comentarios/estrela_preenchida.svg" alt="">
                <img src="/fotos/comentarios/estrela_preenchida.svg" alt="">
                <img src="/fotos/comentarios/estrela_preenchida.svg" alt="">
                <img src="/fotos/comentarios/estrela_preenchida.svg" alt="">
                <img src="/fotos/comentarios/estrela_preenchida.svg" alt="">
            </div>
            <div class="texto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci facilis et sed, commodi corporis harum
                eveniet doloremque repudiandae deserunt fugiat. Eius, eaque eum veritatis exercitationem a consectetur
                necessitatibus eligendi odit.
            </div>
        </div>
        @endfor


    </div>

</x-layout>