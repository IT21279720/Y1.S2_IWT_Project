<script>
var fo1 = document.getElementById("fo1");
var fo2 = document.getElementById("fo2");
var fo3 = document.getElementById("fo3");
var next = document.getElementById("next");
var back = document.getElementById("back");
var submit = document.getElementById("submit");
var meth = document.getElementById("meth");
var cancel = document.getElementById("cancel");
var line = document.getElementById("line");
var visa = document.getElementById("visa");
var payoneer = document.getElementById("payoneer");
var nav = document.getElementById("nav");


visa.onclick = function(){
fo3.style.left="-600px";
fo1.style.left="40px";
nav.style.width="700px";
}

payoneer.onclick = function(){
fo3.style.left="-600px";
fo1.style.left="40px";
nav.style.width="700px";
}

back.onclick = function(){
fo3.style.left="40px";
fo1.style.left="600px";
nav.style.width="290px";
}


<!--spans-->
var pname = document.getElementById("pname");
var pnumber = document.getElementById("pnumber");
var pstreet = document.getElementById("pstreet");
var pprovince = document.getElementById("pprovince");
var pcity = document.getElementById("pcity");
var pzip = document.getElementById("pzip");

var name = document.getElementById("name").value;
var number = document.getElementById("number").value;
var street = document.getElementById("street").value;
var city = document.getElementById("city").value;
var zip = document.getElementById("zip").value;
var name = document.getElementById("name").value;



fo1.addEventListener("submit", validation1);

function success() 
  {   
    alert("Transaction Successful"); 
  } 
  </script>
  