// Sunday=0,Monday=1, Tuesday=2,Wednesday=3,Thursday=4,Friday=5,Saturday=6 
      var d = new Date();
	  theDay=d.getDay();
	  switch (theDay)
	  {
	  case 1:
	     document.write("Today is Monday") ;
		 break;
	  case 2:
	     document.write("Today is Tuesday") ;
		 break;
	  case 3:
	     document.write("Today is Wednesday") ;
		 break;
	  case 4:
	     document.write("Today is Thursday") ;
		 break;
	  case 5:
	     document.write("Today is Friday");
		 break;
	  case 6:
	     document.write("Today is Saturday!") ;
		 break;
	  case 0:
	     document.write("Today is Sunday");
		 break;
	  default:
	     document.write("Another day in paradise");
	  }
	 