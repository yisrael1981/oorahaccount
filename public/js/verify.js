
function verify() {
	step = 0;
themessage = "";
	if (document.form1.Ref1Name.value=="") {
	themessage =  " Reference 1 Name";step = 6;
	}
	if (document.form1.Ref1Number.value=="") {
	themessage =  " Reference 1 Phone Number";step = 6;
	}
	if (document.form1.Ref1Type.value=="") {
	themessage =  " Reference 1 Type";step = 6;
	}
	if (document.form1.Ref2Name.value=="") {
	themessage =  " Reference 1 Name";step = 6;
	}
	if (document.form1.Ref2Number.value=="") {
	themessage =  " Reference 1 Phone Number";step = 6;
	}
	if (document.form1.Ref2Type.value=="") {
	
	step = 6;themessage =  " Reference 1 Type";
	}

	if (document.form1.HearAboutUsName.value=="") {
	step = 6;
	themessage =  " Hear About Us";
	}
	if (document.form1.HearAboutUsNumber.value=="") {
	step = 6;
	themessage =  " Hear About's Number";
	}
		if (document.form1.Ref1Type.value=="Relative" && document.form1.Ref2Type.value=="Relative"  ) {
	step = 6;
	themessage =  " Only 1 Reference can be a relative";
	}


	
			if (document.getElementById("SchoolOrIndividual_0").checked == false &&  document.getElementById("SchoolOrIndividual_1").checked == false) {
	step=6;
	themessage =  "  How did you hear about us?";
	}

	
	if (document.form1.School.value=="") {
	themessage =  " School";
	step=5;}
	if (document.form1.Grade.value != "PHS") {
if (document.form1.SchoolPhone.value=="") {
	themessage =  " School Phone Number";
	step=5;}
}
	if (document.form1.Grade.value == "PHS") {
if (document.form1.AmericanOfficePhone.value=="") {
	themessage =  " American School Phone Number";
	
	step=5;}
}

if (document.form1.PrevS1Name.value=="" || document.form1.PrevS1Loc.value=="" || document.form1.PrevS1Qty.value=="") {
	themessage =  " Previous School Information";
	
	step=5;}
if (document.form1.PrevS2Name.value=="" || document.form1.PrevS2Loc.value=="" || document.form1.PrevS2Qty.value=="") {
	themessage =  " Previous School Information";
step=5;
	}

if (document.form1.Grade.value != "PHS") {
if ((document.getElementById("SpecialEdCurrent_0").checked == true || document.getElementById("SpecialEdRecommend_0").checked == true) && document.form1.SpecialEdDetail.value=="") {
	themessage =  " Explain Special Services";
step=5;
	}
}	

	

		if (document.getElementById("SynAffiliation_0").checked == true &&  document.form1.SynName.value == "")  {
	themessage =  " Name of Synagogue ";step=4;
	}
		if (document.getElementById("SynAffiliation_0").checked == true &&  document.form1.SynRabbi.value == "")  {
	themessage =  " Name of Rabbi ";step=4;
	}

if (document.getElementById("SynAffiliation_0").checked == false &&  document.getElementById("SynAffiliation_1").checked == false)  {
	themessage =  " Synagogue Affiliation";step=4;
	}

if (document.getElementById("IntFamShabbaton_0").checked == false &&  document.getElementById("IntFamShabbaton_1").checked == false) {
	themessage =  " Interested in a Shabbaton";step=4;
	}


if (document.form1.MotherTitle.value=="") {
	themessage =  "Mother's Title";
	step=3;}

	if (document.form1.MotherLastName.value=="") {
	themessage =  "Mother's Last Name";
	step=3;}

	if (document.form1.MotherFirstName.value=="") {
	themessage =  "Mother's First Name";
	step=3;}

	if (document.form1.MotherAddress.value=="") {
	themessage =  "Mother's Address";
	step=3;}

	if (document.form1.MotherCity.value=="") {
	themessage =  "Mother's City";
	step=3;}

	if (document.form1.MotherState.value=="") {
	themessage =  "Mother's State";
	step=3;}
	
if (document.form1.MotherZip.value=="") {
	themessage =  "Mother's Zip";
step=3;	}
	
	if (document.form1.MotherHome.value=="") {
	themessage =  "Mother's Home Phone Number";
	step=3;}

	if (document.form1.MotherEmail.value=="") {
	themessage =  "Mother's Email";
	step=3;}

	if (document.form1.MotherOccupation.value=="") {
	themessage =  "Mother's Occupation";
	step=3;
	}

if 	(document.getElementById("MotherCitizenship_0").checked == false && document.getElementById("MotherCitizenship_1").checked == false  && document.getElementById("MotherCitizenship_2").checked == false && document.form1.MotherCitizenship1.value=="")  {

	themessage =  "Mother's Citizenship";
	}
if 	( document.getElementById("MotherCitizenship_2").checked == true && document.form1.MotherCitizenship1.value=="")  {
step=3;
	themessage =  "Mother's Other Citizenship";
	}
	if (document.form1.MotherReligiousStatus.value=="") {
	themessage =  "Mother's Religious Status";
step=3;	}

	if (document.form1.MotherReligiousStatus.value=="Converted" && document.form1.MotherConversionRabbi.value=="") {
	themessage =  "Mother's Conversion Rabbi";
step=3;
	}
 

 
	if (document.form1.MotherEthnicity.value=="") {
	themessage =  "Mother's Ethnicity";
	step=3;
	}


	if (document.form1.MotherAffiliation.value=="") {
	themessage =  "Mother's Affiliation";
step=3;
	}

			if (document.getElementById("MotherIntJudiasm_0").checked == false &&  document.getElementById("MotherIntJudiasm_1").checked == false)  {
	themessage =  "Mother's Want to Learn More";
step=3;
			}



	if (document.form1.FatherTitle.value=="") {
	themessage =  "Father's Title";step=2;
	}

	if (document.form1.FatherLastName.value=="") {
	themessage =  "Father's Last Name";step=2;
	}

	if (document.form1.FatherFirstName.value=="") {
	themessage =  "Father's First Name";step=2;
	}

	if (document.form1.FatherAddress.value=="") {
	themessage =  "Father's Address";step=2;
	}

	if (document.form1.FatherCity.value=="") {
	themessage =  "Father's City";step=2;
	}

	if (document.form1.FatherState.value=="") {
	themessage =  "Father's State";
	step=2;}
	
if (document.form1.FatherZip.value=="") {
	themessage =  "Father's Zip";
step=2;	}
	
	if (document.form1.FatherHome.value=="") {
	themessage =  "Father's Home Phone Number";
	step=2;}

	if (document.form1.FatherEmail.value=="") {
	themessage =  "Father's Email";
	step=2;}

	if (document.form1.FatherOccupation.value=="") {
	themessage =  "Father's Occupation";
	step=2;}
if 	(getRadioValue(document.form1.FatherCitizenship) == null)  {
step=2;
	themessage =  "Father's Citizenship";
	}
if 	( document.getElementById("FatherCitizenship_2").checked == true && document.form1.FatherCitizenship1.value=="")  {

	themessage =  "Father's Other Citizenship";
step=2;	}

if 	(getRadioValue(document.form1.FatherReligiousStatus) == null)  {

	themessage =  "Father's Religious Status";
	step=2;}

	if (document.form1.FatherReligiousStatus.value=="Converted" && document.form1.FatherConversionRabbi.value=="") {
	themessage =  "Father's Conversion Rabbi";
	step=2;}
 
	if (document.form1.FatherEthnicity.value=="") {
	themessage =  "Father's Ethnicity";
	step=2;}

	if (document.form1.FatherAffiliation.value=="") {
	themessage =  "Father's Affiliation";
step=2;
	}
if 	(getRadioValue(document.form1.FatherIntJudiasm) == null)  {
	themessage =  " Want to Learn More";
step=2;
			}



	if (document.form1.LastName.value=="") {
	themessage = themessage + " Last Name";step=1;
	}

if (document.form1.FirstName.value=="") {
	themessage =  " First Name";step=1;
	}

if (document.form1.HebrewName.value=="") {
	themessage =  " Hebrew Name";
	step=1;}

if (document.form1.Address.value=="") {
	themessage =  " Address";
	step=1;}

if (document.form1.City.value=="") {
	themessage =  " City";
	step=1;}

if (document.form1.State.value=="") {
	themessage =  " State";
	step=1;}


if (document.form1.Zip.value=="") {
	themessage =  " Zip";
	step=1;}

if (document.form1.StudentHome.value=="") {
	themessage =  " Phone Number";
step=1;
	}


if 	(getRadioValue(document.form1.Citizenship) == null)  {
step=1;	themessage =  " Citizenship";
	}

if (document.form1.PlaceOfBirth.value=="") {
	themessage =  " Country of Birth";
step=1;	}


if (document.form1.ParentMarital.value=="") {
	themessage =  " Parents Marital Status";
	step=1;}

if (document.form1.Gender.value=="") {
	themessage =  " Gender";
step=1;	}
	
	if (!checkDate(document.form1.DOB.value)){
	themessage =  " Invalid Date of Birth";
	step=1;
		
	}
	if (document.form1.DOB.value=="" || document.form1.DOB.value=="01/01/1900") {
	themessage =  " Date of Birth";
	step=1;
	}
		if (document.form1.Grade.value=="") {
	themessage =  " Grade";
	step=1;}
		if (document.form1.StudentRelStatus.value=="") {
	themessage =  " Religious Status";
step=1;
	}
		if (document.form1.StudentRelStatus.value=="Converted" && document.form1.ConversionRabbi.value=="") {
	themessage =  " Conversion Rabbi";
step=1;
	}


if (themessage == "" ) {
$('#Completed').val('1');
	document.form1.submit();
} else {

alert("You are required to complete the following fields: " + themessage);

	 $('#myWizard a[href="#step' + step + '"]').tab('show') ;
return false;
   }
}


function getRadioValue (radioButtonOrGroup) {
  var value = null;
  if (radioButtonOrGroup.length) { // group 
    for (var b = 0; b < radioButtonOrGroup.length; b++)
      if (radioButtonOrGroup[b].checked)
        value = radioButtonOrGroup[b].value;
  }
  else if (radioButtonOrGroup.checked)
    value = radioButtonOrGroup.value;
  return value;
}
            
               function checkDate(field)
  {
    var allowBlank = true;
    var minYear = 1962;
    var maxYear = (new Date()).getFullYear();

    var errorMsg = "";

    // regular expression to match required date format
    re = /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/;

    if(field != '') {
      if(regs = field.match(re)) {
        if(regs[2] < 1 || regs[2] > 31) {
          errorMsg = "Invalid value for day: " + regs[2];
        } else if(regs[1] < 1 || regs[1] > 12) {
          errorMsg = "Invalid value for month: " + regs[1];
        } else if(regs[3] < minYear || regs[3] > maxYear) {
          errorMsg = "Invalid value for year: " + regs[3] + " - must be between " + minYear + " and " + maxYear;
        }
      } else {
        errorMsg = "Invalid date format " ;
      }
    } else if(!allowBlank) {
      errorMsg = "Empty date not allowed!";
    }

    if(errorMsg != "") {
  return false;
    } else {
    return true;	
    }

    
  }


