<?
$Date=_POST["date"];
$Name=$_POST['name'];
$Address=$_POST['Address'];
$Number=$_POST['Number'];
$ParentsNumber=$_POST['ParentsNumber'];
$DoB=$_POST['DoB'];
$Gender=$_POST['radio'];
$FatherName=$_POST['FatherName'];
$MotherName=$_POST['MotherName'];
$Course=$_POST['radio1'];


//Database connection
$conn = new mysqli('localhost','root','','form');
if($conn->connect_error){
	die('connection Failed : ' .$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into form(name,Address,Number,ParentsNumber,DoB,radio,FatherName,MotherName,radio1)values(?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssiiissss"$name,$Address,$Number,$ParentsNumber,$DoB,$radio,$FatherName,$MotherName,$radio1);
$stmt->execute();
echo "registration successfully....";
$stmt->close();
$conn->close();
}
?>