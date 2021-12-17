<html>
    <table>
        <tr>
            
            <td>Roll Number: </td>
                <td><input type=text name="rn" size=30></td>
            
        </tr>
    </table>
    <input type=submit name="upload" value="UPLOAD">
    
<?php
include("config.php");

if(isset($_POST['upload'])) include('resultroll.php');
// if(isset($_POST['upload'])){


// }
?>