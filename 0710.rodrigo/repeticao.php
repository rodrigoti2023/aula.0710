<?php
# Laços de repetição

# exemplo 1

$a = 10;
echo '<ul>';
while($a>0){
    echo "<li>Item $a</li>";
    $a--;
}
echo '</ul>';

# exemplo 2

echo '<hr>';
for($i = 0; $i<10; $i++){
    echo "<li>Item $i</li>";
}
echo '</ul>';

