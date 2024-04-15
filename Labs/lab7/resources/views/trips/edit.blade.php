@include('shared.html')
@include('shared.head', ['pageTitle' => 'Edytuj dane wycieczki'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">
        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane wycieczki</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('trips.update', $trip->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $trip->name }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="continent" class="form-label">Kontynent</label>
                        <input id="continent" name="continent" type="text" class="form-control @error('continent') is-invalid @enderror" value="{{ $trip->continent }}">
                        @error('continent')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="country_id" class="form-label">Kraj</label>
                        <select id="country_id" name="country_id" class="form-select @error('country_id') is-invalid @enderror">
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" @if($country->id === $trip->country_id) selected @endif>{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('country_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="period" class="form-label">Okres trwania (w dniach)</label>
                        <input id="period" name="period" type="number" class="form-control @error('period') is-invalid @enderror" value="{{ $trip->period }}">
                        @error('period')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="price" class="form-label">Cena (PLN)</label>
                        <input id="price" name="price" type="number" class="form-control @error('price') is-invalid @enderror" value="{{ $trip->price }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="description" class="form-label">Opis</label>
                        <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" style="height: 150px;">{{ $trip->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
