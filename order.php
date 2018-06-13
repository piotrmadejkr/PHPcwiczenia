

<?php
$paczkow = $_POST['paczkow'];
$grzebieni = $_POST['grzebieni'];
$suma= 0.99 * $paczkow + 1.29 * $grzebieni;

echo<<<END
 <h2>podsumowanie zamowienia</h2>
 <table border="1" cellpadding="10" cellspacing="0">
<tr><td>pączek(0.99)</td><td>$paczkow</td>

</tr>
    
<tr><td>Grzebien(1.29)</td><td>$grzebieni</td>

</tr>
    
<tr><td>Suma</td><td>$suma</td></tr>

<table>


END;
?>

