function api()
{

}
$(function() {
  var stopped=true;
  var mins=0;
  var secs=0;
  var ms=0;
  var data;
  var timer;
  var number="";
  var ping=function() {
    secs++;
    if(secs==60)
    {
      secs=0;
      mins++;
    }
    $("#timer").html((mins<10?"0":"")+mins+":"+(secs<10?"0":"")+secs);
  }
  $("#stoppage").click(function() {
    $(".menu").hide();
    if(stopped) {
      stopped=false;
      $("#stoppage").html("Stop");
      timer=window.setInterval(ping,1000);
    }
    else {
      stopped=true;
      $("#stoppage").html("Start");
      window.clearInterval(timer);
    }
  });
  $("#penalty").click(function() {
    $(".menu").hide();
    $("#pchooser").show();
  });
  $(".penaltytype").click(function(x) {
    $(".menu").hide();
    $("#numpad").show();
    $("#numdisplay").html("__");
    method="penalty";
    number="";
    data={"method":"penalty","type":x.target.id.substr(7)};
  });
  $(".num").click(function(x) {
    if(number.length==2)
    {
      return;
    }
    number+=x.target.id.substr(3);
    $("#numdisplay").html(number+(number.length==1?"_":""));
  });
  $("#submit").click(function() {
    if(number.length!=2)
    {
      return;
    }
    data.number=number;
    $.post(API_URL,data).done(function(x) {
      alert(x);
    });
    $(".menu").hide();
    $("#main").show();
  });
  $(".cancel").click(function() {
    $(".menu").hide();
    $("#main").show();
  })
});
