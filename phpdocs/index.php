<?php 

 if (isset($_REQUEST["action"])) {    //если action существует, то 
	$a=$_REQUEST["action"];            //запоминаем его в переменной $a
} else {                              
	$a="";                            //Если его нет, то $a пустая строка
};
if (isset($_REQUEST["x"])){           //x и y мы делаем вещественным числом в случае строки выведет 0
	$x=(float)$_REQUEST["x"]; 
} else {
	$x=0;
};

if (isset($_REQUEST["y"])){
	$y=(float)$_REQUEST["y"]; 
} else {
	$y=0;
};
    	if($a=='+')
    		$res = $x+$y;
    	else if($a=='-')
    		$res = $x-$y;
    	else if($a=='*')
    		$res = $x*$y;
    	else if($a=="/" //деление 
          && $y!=0) //на 0 делить нельзя 
   $res=$x/$y; 
  else if($a=="^"){ //возведение в степень 
   $res=1; //Его мы будем умножать, значит начальное значение 1. 
   for($i=0;$i<$y;$i++) //Об этом ниже, в пояснении 
    $res*=$x; 
  }
  if($a) 
   echo $a; //Если действие выбрано - между переменными показываем это действие 
  else 
   echo " "; //Иначе покажем пробел 
  echo $res; //х у=чему-то... И еще надо бы не забыть отступить строчку до начала формы 
 ?> 

<form>
	
	<input type="text" placeholder="Введите целое число" name="x" required>
	<select name="action">
	<option value="+">х+у</option>
	<option value="-">х-у</option>
	<option value="*">х*у</option>
	<option value="/">х/у</option>
	<option value="^">х^у</option>
</select><br>
	<input type="text" placeholder="Введите целое число" name="y" required>
	<input type="submit" name="submit">
</form>
 
<h1><?= $res?></h1>

<?php 

echo $res;
 ?>