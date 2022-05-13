[8:29 pm, 11/04/2022] Kanai Da: foreach (range('A', 'Z') as $char) {
            echo $char . "<br>";
      }

// print a to z
[8:29 pm, 11/04/2022] Kanai Da: // variable declare & call 
$name = " Tapas";
echo "Hello ".$name;
[8:30 pm, 11/04/2022] Kanai Da: // switch case 
$i = 1; 
switch($i) {
      case 0:
            echo "<h1>Welcome </h1>"; 
            break;
      case 1:
            echo "<h1>Hello </h1>"; 
            break; 
      default: 
            echo "<h1>Wrong input </h1>"; 
            break;
}
[8:30 pm, 11/04/2022] Kanai Da: // if else 
$i=1514154;
if($i==3541504) {
      echo "<h1>Welcome </h1>"; 
}  else {
      echo "<h1>Another input </h1>"; 
}
[8:31 pm, 11/04/2022] Kanai Da: // function declare & call

function add($a,$b) {
      // echo $a/$b; 
      return $a/$b; 
      // echo "<h1>Hello I am function </h1>"; 
}

echo add(10000000000000,200000000000) + 10;
