function checkValidation(formobj, arrFieldNames ) {
	var s =""; 
	var result = true;  
	var name ="";
	var dispname ="";  
	var command ="";
	var sErr = "";

	for(var itr=0;itr < arrFieldNames.length; itr++)
	{ 
		s= arrFieldNames[itr];
		name = s.substr(0,s.search(","));
		dispname =s.substring(s.search(",")+1,s.search(";"));
		command =s.substring(s.search(";")+1,s.search(":"));
		sErr = s.substr(s.search(":")+1);
		if(validate(formobj.elements[name],dispname,command,sErr)==false) {
			if ( formobj.elements[name].type != "hidden" ) {
				formobj.elements[name].focus();
			}
			result=false;
			break;
		} 
	}
	return result;
}


function validate(objValue,dispname,strValidateStr, strError)
{
    var epos = strValidateStr.search("="); 
    var  command  = ""; 
    var  cmdvalue = ""; 
    if(epos >= 0) 
    { 
     command  = strValidateStr.substring(0,epos); 
     cmdvalue = strValidateStr.substr(epos+1); 
    } 
    else 
    {  
     command = strValidateStr; 
    } 
    
    switch(command) 
    { 
         
        
        case "req": 
        case "required": 
         { 
           if(eval(objValue.value.length) == 0) 
           { 
              if(!strError || strError.length ==0) 
              { 
                strError = dispname; 
              }//if 
              alert(strError); 
              return false; 
           }//if  
           break;             
         }//case required 
        case "maxlength": 
        case "maxlen": 
          { 
             if(eval(objValue.value.length) >  eval(cmdvalue)) 
             { 
               if(!strError || strError.length ==0) 
               { 
                 strError = dispname + " : "+cmdvalue+" characters maximum "; 
               }//if 
               alert(strError + "\n[Current length = " + objValue.value.length + " ]"); 
               return false; 
             }//if 
             break; 
          }//case maxlen 
        case "minlength": 
        case "minlen": 
           { 
             if(eval(objValue.value.length) <  eval(cmdvalue)) 
             { 
               if(!strError || strError.length ==0) 
               { 
                 strError = dispname + " : " + cmdvalue + " characters minimum  "; 
               }//if               
               alert(strError + "\n[Current length = " + objValue.value.length + " ]"); 
               return false;                 
             }//if 
             break; 
            }//case minlen 
        case "alnum": 
        case "alphanumeric": 
           { 
              var charpos = objValue.value.search("[^A-Za-z0-9]"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
               if(!strError || strError.length ==0) 
                { 
                  strError = dispname+": Only alpha-numeric characters allowed "; 
                }//if 
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 
              break; 
           }//case alphanumeric 
        case "alnumspace": 
        case "alphanumericspace": 
           { 
              var charpos = objValue.value.search("[^A-Z a-z0-9]"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
               if(!strError || strError.length ==0) 
                { 
                  strError = dispname; 
                }//if 
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 
              break; 
           }//case alphanumericspace 
        case "num": 
        case "numeric": 
           { 
              var charpos = objValue.value.search("[^0-9]"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
                if(!strError || strError.length ==0) 
                { 
                  strError = dispname; 
                }//if               
                alert(strError); 
                return false; 
              }//if 
              break;               
           }//numeric 
       case "flt": 
        case "float": 
           { 
              var charpos = objValue.value.search("[^0-9.]"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
                if(!strError || strError.length ==0) 
                { 
                  strError = dispname+": Only digits allowed "; 
                }//if               
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 
              break;               
           }//float 
       case "numhi": 
        case "numerich": 
           { 
              var charpos = objValue.value.search("[^0-9-]"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
                if(!strError || strError.length ==0) 
                { 
                  strError = dispname+": Only digits allowed "; 
                }//if               
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 
              break;               
           }//float 		   
         case "alphabetic": 
        case "alpha": 
           { 
              var charpos = objValue.value.search("[^A-Za-z]"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
                  if(!strError || strError.length ==0) 
                { 
                  strError = dispname; 
                }//if                             
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 
              break; 
           }//alpha 
         case "alphaspace": 
           { 
              var charpos = objValue.value.search("[^A-Z a-z]"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
                  if(!strError || strError.length ==0) 
                { 
                  strError = dispname; 
                }//if                             
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 
              break; 
           }//alphaspace 
         case "alphaspacehyphen": 
           { 
              var charpos = objValue.value.search("[^A-Z a-z\-]"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
                  if(!strError || strError.length ==0) 
                { 
                  strError = dispname; 
                }//if                             
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 
              break; 
           }//alphaspace 
        case "alphahyphen": 
           { 
              var charpos = objValue.value.search("[^A-Z a-z\-_]"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
                  if(!strError || strError.length ==0) 
                { 
                  strError = dispname; 
                }//if                             
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 
              break; 
           }//alphahyphen 
	case "commonspecial":
			{
              var charpos = objValue.value.search("[^A-Z a-z0-9\-_.&,/|=:|;']"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
                  if(!strError || strError.length ==0) 
                { 
                  strError = dispname+": characters allowed are A-Z,a-z,0-9,-.&,/\|=:|; and '";
                }//if                             
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 			
	     break;
	  }
	case "qualification":
	 {
           
              var charpos = objValue.value.search("[^A-Z a-z.]"); 
           
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
                  if(!strError || strError.length ==0) 
                { 
                  strError = dispname+": characters allowed are A-Z,a-z, <> and .";
                }//if                             
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 			
	     break;
 }

	case "alnumhyphen":
			{
              var charpos = objValue.value.search("[^A-Z a-z0-9\-_.]"); 
              if(objValue.value.length > 0 &&  charpos >= 0) 
              { 
                  if(!strError || strError.length ==0) 
                { 
                  strError = dispname+": characters allowed are A-Z,a-z,0-9,-,. and _"; 
                }//if                             
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]"); 
                return false; 
              }//if 			
			break;
			}
        case "email": 
          { 
               if(!validateEmailv2(objValue.value)) 
               { 
                 if(!strError || strError.length ==0) 
                 { 
                    strError = dispname;
                 }//if                                               
                 alert(strError); 
                 return false; 
               }//if 
           break; 
          }//case email 

	case "dateofbirth":
	{
		year = objValue.value.substr(0,objValue.value.search(","));
		month= objValue.value.substr(objValue.value.search(",")+1,objValue.value.search(";"));
		date= objValue.value.substr(objValue.value.search(";")+1,objValue.value.search(":"));
	if(!isDate(year,month,date)) 
               { 
                 if(!strError || strError.length ==0) 
                 { 
                    strError = dispname+": Enter Valid Date "; 
                 }//if                                               
                 alert(strError); 
                 return false; 
               }//if 
           break; 
          }//case dateofbirth
	
        case "lt": 
        case "lessthan": 
         { 
            if(isNaN(objValue.value)) 
            { 
              alert(dispname+": Should be a number "); 
              return false; 
            }//if 
            if(eval(objValue.value) >=  eval(cmdvalue)) 
            { 
              if(!strError || strError.length ==0) 
              { 
                strError = dispname; //+ " : value should be less than "+ cmdvalue; 
              }//if               
              alert(strError); 
              return false;                 
             }//if             
            break; 
         }//case lessthan 
        case "lessthandate": 
         { 
            if(isNaN(objValue.value)) 
            { 
              alert(dispname+": Should be a number "); 
              return false; 
            }//if 
            if(eval(objValue.value) >=  eval(cmdvalue)) 
            { 
              if(!strError || strError.length ==0) 
              { 
                strError = dispname + " : Date Improper"; 
              }//if               
              alert(strError); 
              return false;                 
             }//if             
            break; 
         }//case lessthan 
                


case "gt": 
        case "greaterthan": 
         { 
            if(isNaN(objValue.value)) 
            { 
              alert(dispname+": Should be a number "); 
              return false; 
            }//if 
             if(eval(objValue.value) <=  eval(cmdvalue)) 
             { 
               if(!strError || strError.length ==0) 
               { 
                 strError = dispname;//+ " : value should be greater than "+ cmdvalue; 
               }//if               
               alert(strError); 
               return false;                 
             }//if             
            break; 
         }//case greaterthan 
case "todaygreaterthan": 
         { 
            if(isNaN(objValue.value)) 
            { 
              alert(dispname+": Should be a number "); 
              return false; 
            }//if 
             if(eval(objValue.value) <=  eval(cmdvalue)) 
             { 
               if(!strError || strError.length ==0) 
               { 
                 strError = dispname + " : value should be later than or today"; 
               }//if               
               alert(strError); 
               return false;                 
             }//if             
            break; 
         }//case greaterthan 
              

  case "regexp": 
         { 
            if(!objValue.value.match(cmdvalue)) 
            { 
              if(!strError || strError.length ==0) 
              { 
                strError = dispname+": Invalid characters found "; 
              }//if                                                               
              alert(strError); 
              return false;                   
            }//if 
           break; 
         }//case regexp 
        case "dontselect": 
         { 
            
            if(objValue.selectedIndex == null) 
            { 
              alert("BUG: dontselect command for non-select Item"); 
              return false; 
            } 

            if(objValue.selectedIndex == eval(cmdvalue)) 
            { 
             if(!strError || strError.length ==0) 
              { 
              strError = dispname;//+": Please Select one option "; 
              }//if                                                               
              alert(strError); 
              return false;                                   
             } 
             break; 
         }//case dontselect 
    }//switch 
    return true; 
}


//---------------------------------EMail Check ------------------------------------ 

/*  checks the validity of an email address entered 
*   returns true or false 
*   
*/ 

function validateEmailv2(email)
{
// a very simple email validation checking. 
// you can add more complex email checking if it helps 
    if ( email == "" ) return true;	
    var splitted = email.match("^(.+)@(.+)$");
    if(splitted == null) return false;
    if(splitted[1] != null )
    {
      var regexp_user=/^\"?[\w-_\.]*\"?$/;
      if(splitted[1].match(regexp_user) == null) return false;
    }
    if(splitted[2] != null)
    {
      var regexp_domain=/^[\w-\.]*\.[A-Za-z]{2,4}$/;
      if(splitted[2].match(regexp_domain) == null) 
      {
	    var regexp_ip =/^\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\]$/;
	    if(splitted[2].match(regexp_ip) == null) return false;
      }// if
      return true;
    }
return false;
}

function validateEmailv2_2(email_e)
{
// a very simple email validation checking. 
// you can add more complex email checking if it helps 
    if ( email_e == "" ) return true;	
    var splitted = email_e.match("^(.+)@(.+)$");
    if(splitted == null) return false;
    if(splitted[1] != null )
    {
      var regexp_user=/^\"?[\w-_\.]*\"?$/;
      if(splitted[1].match(regexp_user) == null) 
      return false;
    }
    if(splitted[2] != null)
    {
      var regexp_domain=/^[\w-\.]*\.[A-Za-z]{2,4}$/;
      if(splitted[2].match(regexp_domain) == null) 
      {
	    var regexp_ip =/^\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\]$/;
	    if(splitted[2].match(regexp_ip) == null) 
	    return false;
      }// if
      return true;
    }
return false;
}

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID 0")
		   return false;
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID 1")
		   return false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID 2")
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID 3")
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID 4")
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID 5" )
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID 6")
		    return false;
		 }else{
		 	return true;
		 }

 		 return false;					
}
function Trim(s) 
{
  // Remove leading spaces and carriage returns
  
  while ((s.substring(0,1) == ' ') || (s.substring(0,1) == '\n') || (s.substring(0,1) == '\r'))
  {
    s = s.substring(1,s.length);
  }
 // Remove trailing spaces and carriage returns

  while ((s.substring(s.length-1,s.length) == ' ') || (s.substring(s.length-1,s.length) == '\n') || (s.substring(s.length-1,s.length) == '\r'))
  {
    s = s.substring(0,s.length-1);
  }
  return s;
}   
	
	
function isDate (year, month, day)
{       

    var intYear = parseInt(year);
    var intMonth = parseInt(month);
    var intDay = parseInt(day);

var daysInMonth = new Array();
daysInMonth[1] = 31;
daysInMonth[2] = 29;   // must programmatically check this
daysInMonth[3] = 31;
daysInMonth[4] = 30;
daysInMonth[5] = 31;
daysInMonth[6] = 30;
daysInMonth[7] = 31;
daysInMonth[8] = 31;
daysInMonth[9] = 30;
daysInMonth[10] = 31;
daysInMonth[11] = 30;
daysInMonth[12] = 31;

    // catch invalid days, except for February
    if (intDay > daysInMonth[intMonth]) return false; 

    if ((intMonth == 2) && (intDay > daysInFebruary(intYear))) return false;

    return true;
}

function daysInFebruary (year)
{
    return (  ((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0) ) ) ? 29 : 28 );
}
function Trim(s) 
{
  // Remove leading spaces and carriage returns
  
  while ((s.substring(0,1) == ' ') || (s.substring(0,1) == '\n') || (s.substring(0,1) == '\r'))
  {
    s = s.substring(1,s.length);
  }

  // Remove trailing spaces and carriage returns

  while ((s.substring(s.length-1,s.length) == ' ') || (s.substring(s.length-1,s.length) == '\n') || (s.substring(s.length-1,s.length) == '\r'))
  {
    s = s.substring(0,s.length-1);
  }
  return s;
} 




