<x-layout>
    <link rel="stylesheet" href="comentario.css">
    <header></header>
    <div class="container-comentarios">

        @for($i = 0; $i <12; $i++)
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
                Lorem ipsum dolor sit amet. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  
            </div>
        </div>
        @endfor


    </div>

</x-layout>