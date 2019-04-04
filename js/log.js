function load()
{
   document.forms["foform"].reset();
   
	document.querySelector('.mainH').style.margin="10px 3px 10px auto";
	document.querySelector('.mainH').style.transition="1.6s";    
  document.querySelector(".title").style.marginLeft="0px";
  document.querySelector(".title").style.transition ="1.6s";   
  document.querySelector(".style").style.marginLeft="0px"; 
   document.querySelector(".style").style.transition ="3s";
    document.querySelector(".bottomNav").style.marginLeft="0px";
  document.querySelector(".bottomNav").style.transition ="1.6s";
     document.querySelector(".style1").style.marginLeft="0px"; 
   document.querySelector(".style1").style.transition ="3s";
  
}
function load1(){
  document.querySelector('.mainH').style.margin="10px 3px 10px auto";
  document.querySelector('.mainH').style.transition="1.6s";    
  document.querySelector(".title").style.marginLeft="0px";
  document.querySelector(".title").style.transition ="1.6s";   
  document.querySelector(".style").style.marginLeft="0px"; 
   document.querySelector(".style").style.transition ="3s";
    document.querySelector(".bottomNav").style.marginLeft="0px";
  document.querySelector(".bottomNav").style.transition ="1.6s";
     document.querySelector(".style1").style.marginLeft="0px"; 
   document.querySelector(".style1").style.transition ="3s";


}
function log(){
	
  document.querySelector('.loginform').style.display="block";
  document.querySelector('.signinform').style.display="none";
}
function reg(){
  document.querySelector('.loginform').style.display="none";
  document.querySelector('.signinform').style.display="block";
}