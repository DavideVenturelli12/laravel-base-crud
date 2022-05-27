<body>
    <table>
        <thead>
            <tr>
                <th>
                    TITOLO
                </th>
                <th>
                    PREZZO
                </th>
                <th>
                    DETTAGLIO
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }} $</td>
                    <td><a href="{{ route('comics.show', $comic->id) }}">Scopri</a></td>
                </tr>

            @empty
                <tr>
                    Nessun fumetto disponibile
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('comics.create') }}">AGGIUNGI FUMETTO +</a>
</body>


<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: sans-serif
    }

    body {
        padding: 30px 0;
        display: flex;
        align-items: center;
        flex-direction: column;
        background-color: lightblue;
    }

    table {
        border: 2px solid black;
        width: 40%;
    }

    th,
    td {
        height: 50px;
        padding: 0 20px;
        border: 2px solid black;
        text-align: center;
        background-color: lightgrey;
    }

    a {
        text-decoration: none;
        color: black;
        font-weight: 600;
        margin: 10px 0;
    }

    a:hover {
        text-decoration: underline;
        color: blue;
    }

</style>
