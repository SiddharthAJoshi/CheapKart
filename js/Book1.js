
/*******Homepage mainHeader script*******/

var ddmenuitem=0;
var timeout=10;
var closetimer=0;


function mopen(id)
{
	mcancelclosetime();

	if(ddmenuitem) 
	{
		ddmenuitem.style.visibility='hidden';
	}

	ddmenuitem=document.getElementById(id);
	ddmenuitem.style.visibility='visible';
}

function mclose()
{
	if(ddmenuitem)
	{
		ddmenuitem.style.visibility='hidden';
	}
}

function mclosetime()
{
	closetimer=window.setTimeout(mclose,timeout);
}

function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer=null;
	}
}

/*******Onload script*******/

function load()
{	document.forms["forim"].reset();

	document.querySelector("#mainHead").style.transition =" 1s";
    document.querySelector("#mainHead").style.marginLeft="0px"; 
    document.querySelector("#style").style.transition =" 2s";
    document.querySelector("#style").style.marginLeft="0px"; 
}

function divopen(id)
		{
			
			document.querySelector('#drpdown3').style.visibility='visible';
		}