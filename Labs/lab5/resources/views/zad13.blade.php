{{-- To jest komentarz. --}}
@if($name != null))
    @if($name)
        Hello, {{ $name }}
    @else
        Brak imienia
    @endif
    <br>
    @if(strpos($name, 'B') === 0)
        Imię zaczyna się na B
    @else
        Nie zaczyna się na B
    @endif
@else
    Brak imienia
@endif

@if(count($arr) > 0)
    @foreach($arr as $key => $value)
        <p>
            @if($loop->first)
                To jest pierwsza iteracja przy pierwszym elemencie
            @elseif($loop->last)
                To jest ostatnia iteracja przy ostatnim elemencie
            @endif
            {{ $value }}
        </p>
    @endforeach
@else
    Tablica nie zawiera żadnych elementów
@endif
