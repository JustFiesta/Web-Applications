<!doctype html>
<html lang="pl" data-bs-theme="">
  @include('shared.head', ['pageTitle' => 'Wycieczka ' . $trip->name])
  <body>
    @include('shared.navbar')

    <div class="container mt-5">
      <div class="row justify-content-center">
        <h1 class="text-center">Wycieczka {{ $trip->name }}</h1>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6">
          <div class="card">
            <img src="{{ asset('storage/img/' . $trip->img) }}" class="card-img-top" alt="{{ $trip->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $trip->name }}</h5>
              <p class="card-text">{{ $trip->description }}</p>
              <p>Kraj: {{ $trip->country->name }}</p>
              <p>Kontynent: {{ $trip->continent }}</p>
              <p>Okres: {{ $trip->period }} dni</p>
              <p>Cena: {{ $trip->price }} PLN</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('shared.footer')
  </body>
</html>