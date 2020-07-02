<html>
<table>
    <tbody>  
<tr> <td> <h2> produit </h2> </td>  
<td> <h2> prix </h2> </td> 
</tr>
<?php
$produits = array (
"T-shirt rouge" => "15.50",
"T-shirt vert" => "15.50",
"T-shirt argent" => "16.50",
"Short bleu" => "19.99",
"Short vert" => "19.99",
"Veste argent" => "35");


function afficher_produits($produits) {
foreach ($produits as $cle => $valeur) {
echo " <tr> <td> $cle </td> <td>$valeur </td> </tr>";
}
}
afficher_produits ($produits);
?>
    
    </tbody>
</table>