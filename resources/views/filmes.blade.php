<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listagem de Filmes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        @include('menu')

        <fieldset>
            <legend>Lista de Filmes</legend>
            <table>
                <tr>
                    <th>
                        Nome
                    </th>
                    <th>
                        Gênero
                    </th>
                    <th>
                        Poster
                    </th>
                </tr>
                @foreach($filmes as $filme)
                    <tr>
                        <td align="right">
                            <h3>{{$filme->nome}}</h3>
                        </td>
                        <td align="right">
                            {{$filme->genero}}
                        </td>
                        <td align="right">
                            <img src="{{$filme->imagem}}" style="max-width:200px; max-height:200px; width: auto; height: auto;">
                        </td>
                        <td>
                            <form action="{{route('filmes.delete', $filme->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </fieldset>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
