<?php
	session_start();
	include_once("Connection.php");
	$rn=$_POST['regno'];$user=$_POST['user'];$pass=$_POST['pass'];$shop=$_POST['shopname'];$id=$_POST['vid'];$name=$_POST['name'];$email=$_POST['email'];$mob=$_POST['mob'];
	$sql="select * from login";
	$stmt=$con->prepare($sql);
	$stmt->execute();
	
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		if($row["Reg_no"]!=$rn)
		{
			$qry="insert into login(Reg_no,Username,Password,Shop_name,Village_id,Name,Email,Mobile) values(:rn,:user,:pass,:shop,:id,:name,:email,:mob)";
			$stmt=$con->prepare($qry);
			$stmt->bindParam(":rn",$rn);
			$stmt->bindParam(":user",$user);
			$stmt->bindParam(":pass",$pass);
			$stmt->bindParam(":shop",$shop);
			$stmt->bindParam(":id",$id);
			$stmt->bindParam(":name",$name);
			$stmt->bindParam(":email",$email);
			$stmt->bindParam(":mob",$mob);
			if($stmt->execute())
			{
				echo "<script> alert('Registration Successfull..')</script>";
				header("refresh:0;url=signup.php");
				
			}
			else
			{
				echo "<script> alert('Error.. Try Again..')</script>";
				header("refresh:0;url=signup.php");
			}
		}
		else
		{
			echo "<script> alert('Registration no. already exist.')</script>";
			header("refresh:0;url=signup.php");		}
	}
	
?>