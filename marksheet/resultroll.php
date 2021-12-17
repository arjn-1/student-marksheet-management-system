<html>
  
    
<?php
include("config.php");





$query = "SELECT * FROM form WHERE id=(SELECT max(id) FROM form);";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);
    $rn = $result['rollno'];
	$sn=$result['schoolname'];
	$stn=$result['studentname'];
	$fn=$result['fathername'];
    $mn=$result['mothername'];
	$dob=$result['dob'];
	$gen=$result['gender'];
    $add = $result['address'];
    $sc = $result['schoolcode'];
	$hinint=$result['hinint'];
    $hinext=$result['hinext'];
	$engint=$result['engint'];
    $engext=$result['engext'];
	$mathint=$result['mathint'];
    $mathext=$result['mathext'];
    $sciint=$result['sciint'];
    $sciext=$result['sciext'];
    $ssint=$result['ssint'];
    $ssext=$result['ssext'];
	$hindi = $hinint + $hinext;
    $english = $engint + $engext;
    $maths = $mathext + $mathint;
    $science = $sciext + $sciint;
    $socialscience = $ssint + $ssext;
	$remark1=0;
	$remark2=0;
	$remark3=0;
	$remark4=0;
	$remark5=0;
	$count=0;
	$s="a";
	$gen='';
	$min=35;
	$max=100;
	$hin='Hindi';
	$eng='English';
	$math='Maths';
	$phy='Science';
	$chem='Social Science';
    $total = $hindi + $english + $maths + $science + $socialscience;
	if($gen=="Male"){
		$gen="S/o";
	}else if($gen=="Female"){
		$gen="D/o";
	}
	if($hindi<35){
		$remark1="<font color='red'>Fail</font>";
		$count++;
		$s=$s.' and '.$hin;
	}else if($hindi>79){
		$remark1="<font color='green'>Pass</font>";
	}else{
		$remark1='-';
	}
	
	if($english<35){
		$remark2="<font color='red'>Fail</font>";
		$count++;
		$s=$s.' and '.$eng;
	}else if($english>79){
		$remark2="<font color='green'>Pass</font>";
	}else{
		$remark2='-';
	}

	if($maths<35){
		$remark3="<font color='red'>Fail</font>";
		$count++;
		$s=$s.' and '.$math;
	}else if($maths>79){
		$remark3="<font color='green'>Pass</font>";
	}else{
		$remark3='-';
	}

	if($science<35){
		$remark4="<font color='red'>Fail</font>";
		$count++;
		$s=$s.' and '.$phy;
	}else if($science>79){
		$remark4="<font color='green'>Pass</font>";
	}else{
		$remark4='-';
	}
	
	if($socialscience<35){
		$remark5="<font color='red'>Fail</font>";
		$count++;
		$s=$s.' and '.$chem;
	}else if($socialscience>79){
		$remark5="<font color='green'>Pass</font>";
	}else{
		$remark5='-';
	}

	$s=str_replace('a and', '', $s);
	if($count>2){
		$s="Fail";
	}else if($count==0){
		$s="Pass";
	}else if($count<=2){
		$s="Compartment in ".' '.$s;
	}

?>




<center>
	<table border=1>
		<tr>
		<td>
			<table  width=100%>
			<tr>
				<td>
					<img src='https://www.akgec.ac.in/wp-content/themes/twentysixteen/img/AKGEC_1_0.png' width=120 height=120>
				</td>
				<td>
					<b><font size='5'>CENTRAL BOARD OF HIGHER EDUCATION</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
					<font size='4' color='grey'><b><?php  echo "$sn"; ?></b></font>
				</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<table width=100%>
				<tr><td><font size='4'><?php echo "Student Name = $stn"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$gen";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"Father's Name Mr.$fn";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"Mother's Name Mrs.$mn";?></font></td></tr>
                
				<tr><td><font size='4'><?php echo "Date Of Birth: $dob"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"School Code: $sc";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo"Address :$add";?></font></td></tr>
			</table>
		</td>
		</tr>
		<tr>
		<td>
			<table border=1 width=100%>
				<tr><th><i>Subject code</i></th><th><i>Subject name</i></th><th><i>Internal Maximum Marks</i></th><th><i>Marks obtained</i></th><th><i>External Maximum marks</i></th><th><i>Marks obtained</i></th><th><i>Remark</i></th></tr>
				<tr><td>Kcs-101</td><td>Hindi</td><td>50</td><td><? php echo "$hinint";?></td><td>100</td><td><? php echo "$hinext";?></td><td><?php echo "$hindi"; ?></td><td><?php echo "$remark1"; ?></td></tr>
				<tr><td>Kcs-102</td><td>English</td><td>50</td><td><? php echo "$engint";?></td><td>100</td><td><? php echo "$engext";?></td><td><?php echo "$english"; ?></td><td><?php echo "$remark2"; ?></td></tr>
				<tr><td>Kcs-103</td><td>Maths</td><td>50</td><td><? php echo "$mathint";?></td><td>100</td><td><? php echo "$mathext";?></td><td><?php echo "$maths"; ?></td><td><?php echo "$remark3"; ?></td></tr>
				<tr><td>Kcs-104</td><td>Science</td><td>50</td><td><? php echo "$sciint";?></td><td>100</td><td><? php echo "$sciext";?></td><td><?php echo "$science"; ?></td><td><?php echo "$remark4"; ?></td></tr>
				<tr><td>kcs-105</td><td>Social Science</td><td>50</td><td><? php echo "$ssint";?></td><td>100</td><td><? php echo "$ssext";?></td><td><?php echo "$socialscience"; ?></td><td><?php echo "$remark5"; ?></td></tr>
				<tr><<td><b>Total</b></td><td><b><?php echo "$total/"; ?>750</b></td></tr>
			</table>
		</td>
		</tr>

		<tr>
		<td>
			<table>
				<tr><td><b><font size='4'>Result:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$s"; ?></font></b></td></tr>
			</table>
		</td>
		</tr>
	</table>
    <br><br>
<button onClick="window.print()">Print this page</button>
<a href="welcome.php">back</a>
</center>

</html>