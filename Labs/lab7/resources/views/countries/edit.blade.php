<!-- resources\views\countries\edit.blade.php -->

@include('shared.html')
@include('shared.head', ['pageTitle' => 'Edytuj dane kraju'])

<body>
    @include('shared.navbar')

    <div class="container mt-5 mb-5">
        @include('shared.session-error')

        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane kraju</h1>
        </div>

        @include('shared.validation-error')

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('countries.update', $country->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $country->name }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="code" class="form-label">Kod</label>
                        <input id="code" name="code" type="text" class="form-control @error('code') is-invalid @enderror" value="{{ $country->code }}">
                        @error('code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="currency" class="form-label">Waluta</label>
                        <input id="currency" name="currency" type="text" class="form-control @error('currency') is-invalid @enderror" value="{{ $country->currency }}">
                        @error('currency')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="area" class="form-label">Powierzchnia</label>
                        <input id="area" name="area" type="text" class="form-control @error('area') is-invalid @enderror" value="{{ $country->area }}">
                        @error('area')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="language" class="form-label">Język</label>
                        <input id="language" name="language" type="text" class="form-control @error('language') is-invalid @enderror" value="{{ $country->language }}">
                        @error('language')
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
