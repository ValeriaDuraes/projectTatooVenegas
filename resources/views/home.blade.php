<h1>Página Home</h1>

<table>
    @foreach($lastjobs as $job)
        <tr>
            <td><img src="{{ $job->imagens[0]->caminho }}" alt=""></td>
            <td>{{ $job->descricao }}</td>
        </tr>
    @endforeach
</table>
