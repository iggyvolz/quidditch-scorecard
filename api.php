<?php
//require "config.php";
$method=isset($_POST["method"])?$_POST["method"]:"";
if(method_exists("api",$method))
{
  $f=new ReflectionMethod("api",$method);
  $args=[];
  foreach($f->getParameters() as $param)
  {
    if(isset($_POST[$param->name]))
    {
      $args[]=$_POST[$param->name];
    }
    elseif($param->isDefaultValueAvailable())
    {
      $args[]=$param->getDefaultValue();
    }
    else
    {
      die("Requires param ".$param->name);
    }
  }
  echo api::$method(...$args);
}
else
{
  echo "Method not found.";
}
class api
{
  function penalty($number,$type)
  {
    $utype=ucfirst($type);
    echo "$utype card on $number";
  }
}
