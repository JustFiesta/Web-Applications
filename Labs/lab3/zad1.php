<?php
$fruits = ["banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry"];

//Wyświetlenie owoców z pętlą foreach z { }
print("foreach {}\n");
foreach ($fruits as &$fruit) {
    print("Owoc: ".$fruit."\n");
}
unset($fruit);

//Wyświetlenie owoców z pętlą foreach z endforeach
print("\nendforeach\n");
foreach ($fruits as &$fruit) : 
    print("Owoc: ".$fruit."\n");
endforeach;

unset($fruit);

// unset powoduje "wyrzucenie" wartości zmiennej fruits, która zatrzymała się na ostatatniej nazwie owocu
?>