function clockset(){

  var clk = new Date(); 
  var Died = "PM";
  var h = clk.getHours();
  var m = clk.getMinutes();
  var s = clk.getSeconds();
  
  if(h == 0 ){
   h = 12;
  }else if(h < 12){
    h = 12 - h;
    Died = "AM";
  }

  if(h < 10 ){
  h = "0" + h;
  }
  if(m < 10 ){
  m = "0" + m;
  }
  if(s < 10 ){
  s = "0" + s;
  }

 var myclk = document.getElementById("clockdisplay");
 myclk.textContent = h+":"+m+":"+s+" "+Died;
 setTimeout("clockset()",1000); 
 }
 clockset();
  
 function date(){
  
  var dtd =  new Date();
  var mt = dtd.getMonth();
  var yr = dtd.getFullYear();
  var dd = dtd.getDate();
  
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";

    var n = weekday[dtd.getDay()];	  
  
  var mydtd = document.getElementById("datedisplay");
  mydtd.textContent = dd + "-" + mt + "-" + yr + ' "' + n + '"';
  }
  date();









