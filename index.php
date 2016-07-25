<?php
define("API_URL","http://qs.local/api.php");
require "vendor/iggyvolz/html-element/src/htmlElement/htmlElement.php";
use htmlElement\htmlElement;
$html=new htmlElement("html");
while($html->toggle())
{
  $head=new htmlElement("head");
  while($head->toggle())
  {
    $title=new htmlElement("title");
    while($title->toggle())
    {
      echo "Quidditch Scorecard";
    }
    $jquery=new htmlElement("script",["src"=>"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"]);
    while($jquery->toggle())
    {

    }
    $apiurl=new htmlElement("script");
    while($apiurl->toggle())
    {
      echo "API_URL=".json_encode(API_URL);
    }
    $mainjs=new htmlElement("script",["src"=>"main.js"]);
    while($mainjs->toggle())
    {

    }
    $maincss=new htmlElement("link",["rel"=>"stylesheet","href"=>"main.css"]);
    while($maincss->toggle())
    {

    }
  }
  $body=new htmlElement("body");
  while($body->toggle())
  {
    $timerc=new htmlElement("div",["id"=>"timercontainer"]);
    while($timerc->toggle())
    {
      $timer=new htmlElement("div",["id"=>"timer"]);
      while($timer->toggle())
      {
        echo "00:00";
      }
    }
    $main=new htmlElement("div",["id"=>"main","class"=>"menu"]);
    while($main->toggle())
    {
      $penalty=new htmlElement("div",["id"=>"penalty","class"=>"button left"]);
      while($penalty->toggle())
      {
        echo "Penalty";
      }
      $penalty=new htmlElement("div",["id"=>"snitch","class"=>"button right"]);
      while($penalty->toggle())
      {
        echo "Snitch";
      }
      $goal=new htmlElement("div",["id"=>"goal","class"=>"button left"]);
      while($goal->toggle())
      {
        echo "Goal";
      }
      $beat=new htmlElement("div",["id"=>"beat","class"=>"button right"]);
      while($beat->toggle())
      {
        echo "Beat";
      }
    }
    $pchooser=new htmlElement("div",["id"=>"pchooser","class"=>"menu hidden"]);
    while($pchooser->toggle())
    {
      foreach(["blue","yellow","red","cancel"] as $type)
      {
        $penaltytype=new htmlElement("div",["id"=>"penalty$type","class"=>"penaltytype".($type=="cancel"?" cancel":"")]);
        while($penaltytype->toggle())
        {
          echo ucfirst($type);
        }
      }
    }
    $numpad=new htmlElement("div",["id"=>"numpad","class"=>"hidden menu"]);
    while($numpad->toggle())
    {
      $numdisplay=new htmlElement("div",["id"=>"numdisplay"]);
      while($numdisplay->toggle())
      {
        echo "__";
      }
      foreach (array_merge(range(1,9),["cancel",0,"submit"]) as $i)
      {
        $num=new htmlElement("div",["id"=>is_numeric($i)?"num$i":$i,"class"=>"minibutton".(is_numeric($i)?" num":"").($i=="cancel"?" cancel":"")]);
        while($num->toggle())
        {
          echo ucfirst($i);
        }
      }
    }
    $stoppage=new htmlElement("div",["id"=>"stoppage","class"=>"button center"]);
    while($stoppage->toggle())
    {
        echo "Brooms Up";
    }
  }
}
