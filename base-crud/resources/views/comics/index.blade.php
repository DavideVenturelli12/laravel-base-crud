@forelse ($comics as $comic)
    <div class="container">
        <div>
            <h3>{{ $comic->title }}</h3>
            <p>{{ $comic->description }}</p>
            <p>{{ $comic->price }}</p>
            <p>{{ $comic->series }}</p>
            <p>{{ $comic->sale_date }}</p>
            <p>{{ $comic->description }}</p>
            <p>{{ $comic->type }}</p>
        </div>
    </div>

@empty
    <div>Nessun fumetto disponibile</div>
@endforelse

<style lang="scss">

</style>
