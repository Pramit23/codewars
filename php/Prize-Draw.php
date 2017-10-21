<?php
function rank($st, $we, $n) {
    $names = explode(",", $st);
    
    if(count($names) == 0 || (count($names) == 1 && $names[0] == ""))
      return "No participants";
     
    if (count($names) < $n)
      return "Not enough participants";
      
    $abc = range('A', 'Z');
    $ranks = array();
   
    for ($i = 0; $i < count($names); $i++){
      $newRank = strlen($names[$i]);
      for ($j = 0; $j < strlen($names[$i]); $j++){
        $newRank += array_search(strtoupper($names[$i][$j]), $abc) + 1;
      }
      $newRank *= $we[$i];
      array_push($ranks, array("name" => $names[$i], "rank" => $newRank));
    }
    
    usort($ranks, function ($item1, $item2) {
      if ($item1['rank'] == $item2['rank'])
        return $item1['name'] <=> $item2['name'];
      return $item2['rank'] <=> $item1['rank'];
    });
    
    return $ranks[$n-1]["name"];
}

rank("Addison,Jayden,Sofia,Michael,Andrew,Lily,Benjamin", [4, 2, 1, 4, 3, 1, 2], 4);