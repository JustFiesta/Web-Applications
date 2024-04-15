<!-- resources\views\countries\create.blade.php -->

@include('shared.html')
@include('shared.head', ['pageTitle' => 'Dodaj kraj'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">
        <div class="row mb-1">
            <h1>Dodaj kraj</h1>
        </div>
        <div class="row">
            <form action="{{ route('countries.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nazwa kraju:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="code">Kod kraju:</label>
                    <input type="text" class="form-control" id="code" name="code" required>
                </div>
                <!-- Uzupełnij formularz o brakujące pola, takie jak waluta, powierzchnia, język itp. -->
                <div class="form-group">
                    <label for="currency">Waluta:</label>
                    <input type="text" class="form-control" id="currency" name="currency" required>
                </div>
                <div class="form-group">
                    <label for="area">Powierzchnia:</label>
                    <input type="text" class="form-control" id="area" name="area" required>
                </div>
                <div class="form-group">
                    <label for="language">Język:</label>
                    <input type="text" class="form-control" id="language" name="language" required>
                </div>
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
