<?php
header("Content-type:text/html;charset=utf-8");    //设置编码
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "comments";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8'); //设定字符集
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
// 使用 sql 创建数据表
$sql = "CREATE TABLE `comments` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(30) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM; " ;
if (mysqli_query($conn, $sql)) {
    echo "数据表 comments 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<?php
header("Content-type:text/html;charset=utf-8");    //设置编码
$conn=mysqli_connect("localhost","root","root","comments");
mysqli_set_charset($conn,"utf8");
$sql="SELECT * from comments";
$que=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($que)){
      $comments[] = array("id"=>$row[id],"user"=>$row[user],"comment"=>$row[comment],"addtime"=>$row[addtime]);
}
echo json_encode($comments);
?>
<?php
header("Content-type:text/html;charset=utf-8");    //设置编码
$user = htmlspecialchars(trim($_POST['user']));
$txt = htmlspecialchars(trim($_POST['txt']));
$time = date("Y-m-d H:i:s");
if(empty($user)){
   echo "昵称不能为空！";
   exit;
}
if(empty($txt)){
   echo "评论内容不能为空！";
   exit;
}
$conn=mysqli_connect("localhost","root","root","comments");
mysqli_set_charset($conn,"utf8");
$sql="insert into comments(user,comment,addtime)values('$user','$txt','$time')";
$que=mysqli_query($conn,$sql);
if($que)  echo "1";
?>