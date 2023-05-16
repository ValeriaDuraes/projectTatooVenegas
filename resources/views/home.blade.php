<h1>Página Home</h1>

<table>
    @foreach($tattoos as $tattoo)
        <tr>
            <td><img src="{{ $tattoo->imagens[0]->caminho }}" alt=""></td>
            <td>{{ $tattoo->descricao }}</td>
        </tr>
    @endforeach
</table>
