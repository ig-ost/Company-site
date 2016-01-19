<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=windows-1251");

$conn = new mysqli("localhost", "host1309112", "5806c305", "host1309112_ajqm");

$result = $conn->query("SELECT virdel, windows, wifi, inet, antivir, repair  FROM comp_repair");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"vdel":"'.$rs["virdel"] . '",';
    $outp .= '"wind":"' .$rs["windows"]. '",';
    $outp .= '"wf":"'   .$rs["wifi"]. '",';
    $outp .= '"e":"' .$rs["inet"]. '",';
    $outp .= '"antiv":"' .$rs["antivir"]. '",';
    $outp .= '"rep":"'   . $rs["repair"]. '"}';
}
$outp .="]";

$conn->close();

echo($outp);
?>