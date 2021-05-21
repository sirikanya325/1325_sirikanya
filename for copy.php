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


echo "<br><br>";
echo "<table>";

echo "<td><td><td><td>";

for ($i=1;$i<=12;$i++)
{echo "2*$i=". 2*$i."<br>";}

echo "<td><td><td><td>";

for ($i=1;$i<=12;$i++)
{echo "3*$i=". 3*$i."<br>";}

echo "<td><td><td><td>";

for ($i=1;$i<=12;$i++)
{echo "4*$i=". 4*$i."<br>";}

echo "<td><td><td><td>";
for ($i=1;$i<=12;$i++)
{echo "5*$i=". 5*$i."<br>";}

echo "<td><td><td><td>";
for ($i=1;$i<=12;$i++)
{echo "6*$i=". 6*$i."<br>";}
echo "</td>";

echo "</table>";
echo "<br><br>";


echo "<br><br>";

echo "<table>";
echo "<td>";

for ($i=1;$i<=12;$i++)
{echo "6*$i=". 6*$i."<br>";}

echo "<td><td><td><td>";
for ($i=1;$i<=12;$i++)
{echo "5*$i=". 5*$i."<br>";}

echo "<td><td><td><td>";
for ($i=1;$i<=12;$i++)
{echo "4*$i=". 4*$i."<br>";}

echo "<td><td><td><td>";
for ($i=1;$i<=12;$i++)
{echo "3*$i=". 3*$i."<br>";}

echo "<td><td><td><td>";
for ($i=1;$i<=12;$i++)
{echo "2*$i=". 2*$i."<br>";}

echo "</tr>";
echo "</table>";
?>     
    </body>
</html>