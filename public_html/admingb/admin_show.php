<?php

include"header.php";

include"config.php";

 $con=mysql_connect($host,$dbuser,$dbpass)

 or die("CONNECTION FAILED");

 mysql_select_db($dbname,$con)

 or die("can't conect to DB");


 $gbooktbl=mysql_query("SELECT id,three FROM gbooktbl ")

  or die("can't get the gbooktbl");

    echo"<div align='center'>

  <center> <font face='Tahoma' size='2'>

  <table border='1' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#FFFFFF' width='95%' dir='rtl' id='AutoNumber1'>

    <tr>

      <td width='80%' align='center' bgcolor='#DFF1F6'><span lang='ar-sa'>�������</span></td>

      <td width='10%' align='center' bgcolor='#DFF1F6'><span lang='ar-sa'>���</span></td>

      <td width='10%' align='center' bgcolor='#DFF1F6'><span lang='ar-sa'>�����</span></td>

    </tr>";


  while ($row=mysql_fetch_object($gbooktbl))

  {

         // I added  htmlspecialchars   to decode the HTML coding

  echo" <tr><td width='80%' align='center'>";echo htmlspecialchars($row->three) ; echo"</td>

      <td width='10%' align='center'><a href='delete.php?id=$row->id'>���</a></td>

      <td width='10%' align='center'><a href='edit.php?id=$row->id'>�����</a></td>

      </tr>";

 }

  mysql_close();

 echo"</table>

   </font>

  </center>

</div>";

 include"footer.php";

 ?>

