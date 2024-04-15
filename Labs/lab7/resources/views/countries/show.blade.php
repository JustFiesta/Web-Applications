<!-- resources\views\countries\show.blade.php -->

@include('shared.html')
@include('shared.head', ['pageTitle' => 'Informacje o kraju'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">
        <div class="row mb-1">
            <h1>Informacje o kraju</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kraj</h5>
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>Nazwa:</td>
                                    <td>{{ $country->name }}</td>
                                </tr>
                                <tr>
                                    <td>Kod:</td>
                                    <td>{{ $country->code }}</td>
                                </tr>
                                <tr>
                                    <td>Waluta:</td>
                                    <td>{{ $country->currency }}</td>
                                </tr>
                                <tr>
                                    <td>Powierzchnia:</td>
                                    <td>{{ $country->area }}</td>
                                </tr>
                                <tr>
                                    <td>Język:</td>
                                    <td>{{ $country->language }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-3">
                            <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-primary">Edytuj</a>
                            <form method="POST" action="{{ route('countries.destroy', $country->id) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć ten kraj?')">Usuń</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
