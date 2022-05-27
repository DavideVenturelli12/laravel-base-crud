<body>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">TITOLO:</label>
            <input type="text" required name="title" placeholder="Inserisci titolo" />
        </div>

        <div>
            <label for="description">DESCRIZIONE:</label>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Inserisci descrizione"></textarea>
        </div>

        <div>
            <label for="thumb">COPERTINA:</label>
            <input type="text" required name="thumb" placeholder="Inserisci URL copertina" />
        </div>

        <div>
            <label for="price">PREZZO:</label>
            <input type="text" required name="price" placeholder="Inserisci prezzo" />
        </div>

        <div>
            <label for="series">SERIE:</label>
            <input type="text" required name="series" placeholder="Inserisci serie" />
        </div>

        <div>
            <label for="sale_date">DATA DI PUBBLICAZIONE:</label>
            <input type="date" required name="sale_date" placeholder="Inserisci data di pubblicazione" />
        </div>

        <div>
            <label for="type">TIPOLOGIA:</label>
            <input type="text" required name="type" placeholder="Inserisci tipologia" />
        </div>
        <button>AGGIUNGI</button>
    </form>
    <a href="{{ route('comics.index') }}">
        <- BACK</a>
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

    label {
        font-weight: 600;
        margin: 20px 0;
    }

    form {
        border: 2px solid black;
        width: 40%;
        padding: 20px;
        border-radius: 10px;
        background-color: lightgray;
    }

    div {
        display: flex;
        flex-direction: column;
    }

    input,
    textarea {
        border-radius: 10px;
        padding: 10px;
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
