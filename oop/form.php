<?php
 class Kalkulator{
   
  //deklarasi variable
  var $add; 
  var $kurang;
  var $kali;
  var $bagi;
    
  //method2 yang ada
  function tambah($n1,$n2){
   echo $this->add = $n1 + $n2;
  }
    
  function Kurang($n1,$n2){
   echo $this->kurang = $n1 - $n2;
  }
    
  function Kali($n1,$n2){
   echo $this->kali = $n1 * $n2;
  }
    
  function Bagi($n1,$n2){
   echo $this->bagi = $n1 / $n2;
  }
 }
?>


<!DOCTYPE html>
<head>
         
        <title>OOP in PHP</title>
  
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
 
   <div align="center">
<b>LATIHAN OPERATOR ARITMATIKA OOP</b></div>
 
 
   <table align="center">
<tr>
    <td><input type="text" name="number1" size="10" placeholder="nilai1"></td> 
    <td><input type="text" name="number2" size="10" placeholder="nilai2"></td>
    <td><select name="operator">
     <option>+</option>
     <option>-</option>
     <option>*</option>
     <option>/</option>
    </select></td>
    <td><input type="submit" name="submit" value="Hitung"></td>
     
    </tr>
</table>
</form>
</br>
  <center>
  <?php
   $hasil = new Kalkulator(); //membuat objek hasil dari klas kalkulator
   $num1 = $_POST['number1']; //untuk menangkap inputan dan masukan ke variable
   $num2 = $_POST['number2'];
   $opr = $_POST['operator'];
   if($opr == '+'){
    echo $num1." ".$opr." ".$num2." = "; 
    $hasil->tambah($num1,$num2);
   }
   else if($opr == '-'){
    echo $num1." ".$opr." ".$num2." = "; 
    $hasil->Kurang($num1,$num2);
   }
   else if($opr == '*'){
    echo $num1." ".$opr." ".$num2." = ";  
    $hasil->Kali($num1,$num2);
   }
   else if($opr == '/'){
    echo $num1." ".$opr." ".$num2." = ";  
    $hasil->Bagi($num1,$num2);
   }
  ?>
  </center>
</body>
 
</html>