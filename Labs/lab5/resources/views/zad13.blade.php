{{-- To jest komentarz. --}}
@if($name)
    Hello, {{ $name }}<br>

    @if(strpos($name, 'B') === 0)
        Imię zaczyna się na B<br>
    @else
        Nie zaczyna się na B<br>
    @endif
@else
    Brak imienia<br>
@endif

@if(count($arr) > 0)
    @foreach($arr as $key => $value)
        @if($loop->first)
            <p>pierwsza iteracja {{ $value }}</p>
        @elseif($loop->last)
            <p>ostatnia iteracja {{ $value }}</p>
        @else
            {{ $value }},
        @endif
    @endforeach
@else
    Tablica arr nie zawiera żadnego elementu
@endif
