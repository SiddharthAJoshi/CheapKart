var ddmenuitem=0;
		var timeout=500;
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
		function Login()
		{
			document.querySelector('.login').style.display='block';
			document.querySelector('.signup').style.display='none';
		}
function Signup()
		{
			document.querySelector('.login').style.display='none';
			document.querySelector('.signup').style.display='block';
		}
		function load()
		{
			document.querySelector("#mainHead").style.transition =" 1s";
        document.querySelector("#mainHead").style.marginLeft="0px"; 
        document.querySelector("#style").style.transition =" 2s";
        document.querySelector("#style").style.marginLeft="0px"; 


		}
