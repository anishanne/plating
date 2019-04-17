<?php
    $result="-";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        function pigWord($word) {
            $input=$word;
            $firstCharacter = $input[0];
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
            $result=$tresult;
            return $result;
        }
        
        $input=$_POST["string"];
        $result="";
        $input=strtolower($input);
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
    <h1>Project Portal: Plating</h1>
    <p>
      A cute little microservice to convert english to piglatin for any string supplied to it.
    </p>
    
    <h2>Endpoints</h2>
    <ul>
      <li><strong>GET</strong> <code>/plating</code>: Changes the body text to pig latin.</li>
      <li><strong>POST</strong> <code>/plating</code>: Changes the body text to pig latin.</li>
      <li><strong>POST</strong> <code>/plating/demo</code>: reverses the request body</li>
      <!--<li><strong>GET</strong> <code>/revers/:string</code>: reverses the string in the url</li>-->
    </ul>

    <h2>Demo</h2>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <input id='string' name='string' placeholder='Kayak'>
        <input type="submit" value="Submit">
        <p>Result:</p>
        <pre><code id='result'><?php echo $result; ?></code></pre>
    </form>

    
    </body>
    </html>

    <script src='script.js'></script>
  </body>
</html>
