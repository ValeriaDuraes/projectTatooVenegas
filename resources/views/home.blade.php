
<x-layout>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tatto Venegas</title>
</head>
<body>

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

    <script src="script.js"></script>
</body>
</html>
</x-layout>