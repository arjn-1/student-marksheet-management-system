<html>
    <form action="resultroll.php" method="post">
    <table>
        <tr>
            
            <td>Roll Number: </td>
                <td><input type=text name="rn" size=30></td>
            
        </tr>
    </table>
    <input type=submit name="upload" value="UPLOAD">
    </form>
    </html>

<?php
include("config.php");


if(isset($_POST['upload'])){
$f=$_POST['rn'];

}
?>
