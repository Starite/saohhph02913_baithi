<?php 
 session_start();
 ob_start();
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

    </table>
        <form action="them.php" method="post">
            <h2> ID </h2><input type="text" name="id"></input>
            <h2> Name </h2><input type="text" name="name"></input>
            <h2> Description </h2><input type="text" name="mota"></input>
                  <input type="submit" name="ok" value="OK"></input>
        </form>
        
        <hr><br><a href="xoa.php"><button>Xoa san pham</button></a>
        <a href="sua.php"><button>Sua san pham</button></a>
    </body>
</html>
