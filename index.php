<?php
if (isset($_GET["string"])){
        $result="-";
        function pigWord($word) {
            $input=$word;
            $firstCharacter = $input[0];
            $firstCharacter2 = strtolower($input[0]);
            if ($firstCharacter != $firstCharacter2){
                $capital= True;
            }
            else{
                $capital = False;
            }
            if (($firstCharacter == "a") or ($firstCharacter == "e") or ($firstCharacter == "i") or ($firstCharacter == "o") or ($firstCharacter == "u")){
                $tresult=$input."way";
            }
            else{
                $tresult=$input;
                while (($firstCharacter !='a') and ($firstCharacter !='e') and ($firstCharacter !='i') and ($firstCharacter !='o') and ($firstCharacter !='u')){
                    $tresult = substr($tresult, 1);
                    $tresult=$tresult.$firstCharacter;
                    $firstCharacter = $tresult[0];
                }
            }
            $result=strtolower($tresult)."ay";
            if ($capital==True){
                
                $firstCharacter = $result[0];
                $result = substr($result, 1);
                $result=strtoupper($firstCharacter).$result;
            }
            return $result;
        }
        
        $input=$_GET["string"];
        $result="";
        $input=strtolower($input);
        $array = explode(" ", $input);
        for ($x = 1; $x <= count($array); $x++) {
            $result.=pigWord($array[$x-1]);
            $result.=" ";
        } 
        echo $result;
}

else{
    echo "Put something after the /?string= to change it to pig latin. For example, add a /?string=text would change text to pig latin.";
}
$result="-";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        function pigWord($word) {
            $input=$word;
            $firstCharacter = $input[0];
            $firstCharacter2 = strtolower($input[0]);
            if ($firstCharacter != $firstCharacter2){
                $capital= True;
            }
            else{
                $capital = False;
            }
            echo $input;
            if (($firstCharacter == "a") or ($firstCharacter == "e") or ($firstCharacter == "i") or ($firstCharacter == "o") or ($firstCharacter == "u")){
                $tresult=$input."way";
                
            }
            else{
                $tresult=$input;
                while (($firstCharacter !='a') and ($firstCharacter !='e') and ($firstCharacter !='i') and ($firstCharacter !='o') and ($firstCharacter !='u')){
                    $tresult = substr($tresult, 1);
                    $tresult=$tresult.$firstCharacter;
                    $firstCharacter = $tresult[0];
                }
            }
            $result=strtolower($tresult)."ay";
            if ($capital==True){
                
                $firstCharacter = $result[0];
                $result = substr($result, 1);
                $result=strtoupper($firstCharacter).$result;
            }
            return $result;
        }
        
        $input=$_POST["string"];
        $result="";
        
        $array = explode(" ", $input);
        for ($x = 1; $x <= count($array); $x++) {
            $result.=pigWord($array[$x-1]);
            $result.=" ";
        } 
        
    }
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Project Portal: Plating</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/dark.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='shortcut icon' href='/favicon.ico'>
    <link rel='icon' href='/favicon.ico'>
</head>
<body>
<br><br><br><br><br>
Just to plug another awesome project, this site was built with <a href='https://github.com/kognise/water.css'>Water.css</a>.

</body
</html>
