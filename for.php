<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-wigth,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>

        <?php
            $grade = 66;
            if ($grade <= 49) {
                echo "เกรด F";}
            elseif ($grade>= 50 and $grade <=55) {
                echo "เกรด D";}
             elseif ($grade>= 56 and $grade <=59) {
                 echo "เกรด D+";}
             elseif ($grade>= 60 and $grade <=65) {
                 echo "เกรด C";}
            elseif ($grade>= 66 and $grade <=69) {
                 echo "เกรด C+";}
             elseif ($grade>= 70 and $grade <=75) {
                echo "เกรด B";}
             elseif ($grade>= 76 and $grade <=79) {
                 echo "เกรด B+"; }
                 elseif ($grade>= 80 and $grade <=85) {
                    echo "เกรด A"; }
            else{
                echo "เกรด A";
        }echo "<br>";
           // END for
        ?> 
    </body>
</html>