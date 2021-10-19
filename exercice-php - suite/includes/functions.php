<?php 
require_once 'includes/vars.php';
require_once 'includes/functions.php';
require_once 'includes/list.php';
?>

<?php
function afficheCard(array $ratons): void
{
    ?> 
            <div class="cards">
                <div class="card" style="width: 18rem;">
                <h2 class="card-title"><?= $ratons['name']; ?></h2>
                <img src= <?= $ratons['url']; ?> class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text"><?= $ratons['description']; ?></p>
                <a href="#" class="btn btn-primary">Vote for me</a>
                </div>
            </div>

            
    <?php
}



/*
function formatPrix(float $prix): string
{
    return number_format($prix, 2, ',', ' ') . '€';
}
*//*
function prixHT (float $prix): float
{
   return $prix / 1.2;
}

function formatPrix(float $prix, bool $isTTC = true): string
{
    if (!$isTTC){
        $prix = prixHT($prix);
    }
    return number_format($prix, 2, ',', ' ') . ' €';
}

function afficheBonnet(array $mesBonnet, int $id): void
{
    $color = 'blue';
    if ($mesBonnet['prix'] <= 12){
        $color ='green';
    }
    ?> 

    <tr>
        <td><?= $id+1; ?></td>
        <td><?= $mesBonnet['name']; ?></td>
        <td>
            <?= formatPrix($mesBonnet['prix'], false); ?> HT
        </td>
        <td style="color: <?= $color; ?>;">
            <?= formatPrix($mesBonnet['prix']); ?>
        </td>
        <td><?= $mesBonnet['description']; ?></td>  
    </tr>

    <?php
    }*/

   


/*function getThreeRatons(){
    for(int i = 0; i < 3 ;i++){
    
        <li>
      
    </div>
    </li>




    }
   



function build_table($monJolieTableau){
    
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($monJolieTableau[0] as $key=>$value){
        $html .= '<th>' . htmlspecialchars($key) . '</th>';
    }
    $html .= '</tr>';


foreach( $monJolieTableau as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        foreach($value as $key3=>$value3){
            $html .= '<td>' . htmlspecialchars($value3) . '</td>';
        }
        $html .= '</tr>';
    }
    // finish table and return it


    $html .= '</table>';
    return $html;
}

$monJolieTableau = array(
    array('name' => 'BOBO en laine', 'prix' => 10 .'€', 'description' => 'vLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'),
    array('name' => 'BOBO en laine bio', 'prix' => 14 .'€', 'description' => 'vLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'),
    array('name' => 'BOBO en laine et cachemire', 'prix' => 20 .'€', 'description' => 'vLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'),
    array('name' => 'BOBO arc-en-ciel', 'prix' => 12 .'€', 'description' => 'vLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.')
);


echo build_table($monJolieTableau);

*/
?>