<body>
    <div>
        <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
        <h2>{{ $comics->title }}</h2>
        <p><span>SERIE:</span> {{ $comics->series }}</p>
        <p><span>TIPOLOGIA:</span> {{ $comics->type }}</p>
        <p><span>DATA DI PUBBLICAZIONE</span>: {{ $comics->sale_date }}</p>
        <p><span>PREZZO:</span> {{ $comics->price }} $</p>
        <p><span>DESCRIZIONE:</span></p>
        <p>{{ $comics->description }}</p>
        <a href="{{ route('comics.index') }}">
            <- BACK</a>
    </div>
</body>


<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: sans-serif;
    }

    body {
        background-color: lightblue;
    }

    div {
        width: 20%;
        margin: 50px auto;
        padding: 20px;
        background-color: lightgrey;
        border: 3px solid black;
        border-radius: 10px;
    }

    img {
        margin-bottom: 10px;
        border-radius: 10px;
    }

    p {
        margin: 10px 0;
    }

    span {
        font-weight: 600;
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
