
<?php 
 mysql_connect("localhost","root","");
 mysql_select_db("saohhph02913");
?>
<html>
    <head>
        <title>Quan ly san pham</title>
    </head>
    <body>
        <h3>Quan ly san pham</h3>
        <table border='1'>
    <tr>
	<td>ID</td> 
        <td>ten san pham</td>
	<td>mota</td>
                   
    </tr>
        <?php
        $sql="SELECT `id_sp`,`ten_sp`, `mota` FROM sanpham";
        $query=  mysql_query($sql);
        while($row =  mysql_fetch_array($query)){
        ?>
    <tr>
	<td><?php echo $row['id_sp'];?></td> 
        <td><?php echo $row['ten_sp'];?></td>
         <td><?php echo $row['mota'];?></td>
    </tr>
        <?php } ?>
    </table>
    </body>
</html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
          <form action="suasp.php" method="post">
            <h2> ID </h2><input type="text" name="id"></input>
            <h2> Name </h2><input type="text" name="name"></input>
            <h2> Description </h2><input type="text" name="mota"></input>
            <input type="submit" name="sua" value="Sua"></input>
        </form>
        
          <a href="index.php"><button>Ve trang chu</button></a>
    </body>
    
  
</html>
