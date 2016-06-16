<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\InsertTuition;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Carbon;
use Redirect;
use Validator;

class TuitionController extends Controller
{
	 /*
	 public function __construct(){
	 	$this->middleware('auth');

	 }*/
/*
	public function index() {
		return view('child');
		}
	*/	
//right now there really isn't a store, only editing because everyone comes with partly started
	//if we switch to use a create, then double check all inserted fields.
	public function store(Request $request) {
		$tuition = new InsertTuition();

$tuition -> LoginId=Input::get('LoginId');
$tuition ->Completed=Input::get('Completed');
$tuition ->Gender=Input::get('Gender');
$tuition ->LastName=Input::get('LastName');
$tuition ->FirstName=Input::get('FirstName');
$tuition ->HebrewName=Input::get('HebrewName');
$tuition ->Address=Input::get('Address');
$tuition ->Apt=Input::get('Apt');
$tuition ->City=Input::get('City');
$tuition ->State=Input::get('State');
$tuition ->Zip=Input::get('Zip');
$tuition ->Country=Input::get('Country');
$tuition ->SameAddress=Input::get('SameAddress');
$tuition ->StudentHome=Input::get('StudentHome');
$tuition ->StudentEmail=Input::get('StudentEmail');
$tuition ->StudentCell=Input::get('StudentCell');

$tuition ->SSN=Input::get('SSN');
$tuition ->Citizenship=Input::get('Citizenship');
$tuition ->CitizenshipOther=Input::get('CitizenshipOther');

$tuition ->PlaceOfBirth=Input::get('PlaceOfBirth');
$tuition ->ChildStaysWith=Input::get('ChildStaysWith');
$tuition ->DOB=Input::get('DOB');
$tuition ->StudentRelStatus=Input::get('StudentRelStatus');
$tuition ->ConversionRabbi=Input::get('ConversionRabbi');
$tuition ->School=Input::get('School');
$tuition ->SchoolAddress=Input::get('SchoolAddress');
$tuition ->SchoolCity=Input::get('SchoolCity');
$tuition ->SchoolState=Input::get('SchoolState');
$tuition ->Grade=Input::get('Grade');
$tuition ->SchoolPhone=Input::get('SchoolPhone');
$tuition ->SchoolFax=Input::get('SchoolFax');
$tuition ->AmericanOfficePhone=Input::get('AmericanOfficePhone');
$tuition ->AmericanContactFirst=Input::get('AmericanContactFirst');
$tuition ->AmericanContactLast=Input::get('AmericanContactLast');
$tuition ->AmericanContactTitle=Input::get('AmericanContactTitle');
$tuition ->SemAdvName=Input::get('SemAdvName');
$tuition ->SemAdvPhone=Input::get('SemAdvPhone');
$tuition ->WhyInterested=Input::get('WhyInterested');
$tuition ->FullSchoolAmt=Input::get('FullSchoolAmt');
$tuition ->FinAidFromSchool=Input::get('FinAidFromSchool');
$tuition ->DueToSchool=Input::get('DueToSchool');
$tuition ->ParentPay=Input::get('ParentPay');
$tuition ->FinAidFromOther=Input::get('FinAidFromOther');
$tuition ->FinAidOtherDetail=Input::get('FinAidOtherDetail');
$tuition ->PHSFund1=Input::get('PHSFund1');
$tuition ->PHSStatus1=Input::get('PHSStatus1');
$tuition ->PHSAmount1=Input::get('PHSAmount1');
$tuition ->PHSFund2=Input::get('PHSFund2');
$tuition ->PHSStatus2=Input::get('PHSStatus2');
$tuition ->PHSAmount2=Input::get('PHSAmount2');
$tuition ->PHSFund3=Input::get('PHSFund3');
$tuition ->PHSStatus3=Input::get('PHSStatus3');
$tuition ->PHSAmount3=Input::get('PHSAmount3');
$tuition ->PHSIsFirst=Input::get('PHSIsFirst');
$tuition ->PHSOtherPrograms=Input::get('PHSOtherPrograms');
$tuition ->PHSHowLong=Input::get('PHSHowLong');
$tuition ->PHSPlans=Input::get('PHSPlans');
$tuition ->PrevS1Name=Input::get('PrevS1Name');
$tuition ->PrevS1Loc=Input::get('PrevS1Loc');
$tuition ->PrevS1Qty=Input::get('PrevS1Qty');
$tuition ->PrevS1SchoolYear=Input::get('PrevS1SchoolYear');
$tuition ->PrevS2Name=Input::get('PrevS2Name');
$tuition ->PrevS2Loc=Input::get('PrevS2Loc');
$tuition ->PrevS2Qty=Input::get('PrevS2Qty');
$tuition ->PrevS2SchoolYear=Input::get('PrevS2SchoolYear');
$tuition ->OtherSchools=Input::get('OtherSchools');
$tuition ->HSNextYear=Input::get('HSNextYear');
$tuition ->HappyWithSchool=Input::get('HappyWithSchool');
$tuition ->HappyReason=Input::get('HappyReason');
$tuition ->SpecialEdCurrent=Input::get('SpecialEdCurrent');
$tuition ->SpecialEdRecommend=Input::get('SpecialEdRecommend');
$tuition ->SpecialEdDetail=Input::get('SpecialEdDetail');
$tuition ->IntShabbaton=Input::get('IntShabbaton');
$tuition ->IntDaycamp=Input::get('IntDaycamp');
$tuition ->IntOvernight=Input::get('IntOvernight');
$tuition ->PrevDC=Input::get('PrevDC');
$tuition ->PrevON=Input::get('PrevON');
$tuition ->CampName=Input::get('CampName');
$tuition ->CampCity=Input::get('CampCity');
$tuition ->RateSecular=Input::get('RateSecular');
$tuition ->RateHebrew=Input::get('RateHebrew');
$tuition ->RateSocial=Input::get('RateSocial');
$tuition ->ParentMarital=Input::get('ParentMarital');
$tuition ->visitation=Input::get('visitation');
$tuition ->FatherTitle=Input::get('FatherTitle');
$tuition ->FatherLastName=Input::get('FatherLastName');
$tuition ->FatherFirstName=Input::get('FatherFirstName');
$tuition ->FatherAddress=Input::get('FatherAddress');

$tuition ->FatherCity=Input::get('FatherCity');
$tuition ->FatherState=Input::get('FatherState');
$tuition ->FatherZip=Input::get('FatherZip');
$tuition ->FatherCountry=Input::get('FatherCountry');
$tuition ->FatherHome=Input::get('FatherHome');
$tuition ->FatherCell=Input::get('FatherCell');
$tuition ->FatherWork=Input::get('FatherWork');
$tuition ->FatherEmail=Input::get('FatherEmail');

$tuition ->FatherOccupation=Input::get('FatherOccupation');
$tuition ->FatherCitizenship=Input::get('FatherCitizenship');
$tuition ->FatherCitizenshipOther=Input::get('FatherCitizenshipOther');
$tuition ->FatherReligiousStatus=Input::get('FatherReligiousStatus');
$tuition ->FatherConversionRabbi=Input::get('FatherConversionRabbi');
$tuition ->FatherEdBackground=Input::get('FatherEdBackground');
$tuition ->FatherEthnicity=Input::get('FatherEthnicity');
$tuition ->FatherAffiliation=Input::get('FatherAffiliation');
$tuition ->FatherIntJudiasm=Input::get('FatherIntJudiasm');
$tuition ->MotherTitle=Input::get('MotherTitle');
$tuition ->MotherLastName=Input::get('MotherLastName');
$tuition ->MotherFirstName=Input::get('MotherFirstName');
$tuition ->MotherAddress=Input::get('MotherAddress');

$tuition ->MotherCity=Input::get('MotherCity');
$tuition ->MotherState=Input::get('MotherState');
$tuition ->MotherZip=Input::get('MotherZip');
$tuition ->MotherCountry=Input::get('MotherCountry');
$tuition ->MotherHome=Input::get('MotherHome');
$tuition ->MotherCell=Input::get('MotherCell');
$tuition ->MotherWork=Input::get('MotherWork');
$tuition ->MotherEmail=Input::get('MotherEmail');

$tuition ->MotherOccupation=Input::get('MotherOccupation');
$tuition ->MotherCitizenship=Input::get('MotherCitizenship');
$tuition ->MotherCitizenshipOther=Input::get('MotherCitizenshipOther');
$tuition ->MotherReligiousStatus=Input::get('MotherReligiousStatus');
$tuition ->MotherConversionRabbi=Input::get('MotherConversionRabbi');
$tuition ->MotherEdBackground=substr(Input::get('MotherEdBackground'),0,200);
$tuition ->MotherEthnicity=Input::get('MotherEthnicity');
$tuition ->MotherAffiliation=Input::get('MotherAffiliation');
$tuition ->MotherIntJudiasm=Input::get('MotherIntJudiasm');
$tuition ->Child1a=Input::get('Child1a');
$tuition ->Child1b=Input::get('Child1b');
$tuition ->Child1c=Input::get('Child1c');
$tuition ->Child1d=Input::get('Child1d');
$tuition ->Child1e=Input::get('Child1e');
$tuition ->Child1f=Input::get('Child1f');
$tuition ->Child1g=Input::get('Child1g');
$tuition ->Child2a=Input::get('Child2a');
$tuition ->Child2b=Input::get('Child2b');
$tuition ->Child2c=Input::get('Child2c');
$tuition ->Child2d=Input::get('Child2d');
$tuition ->Child2e=Input::get('Child2e');
$tuition ->Child2f=Input::get('Child2f');
$tuition ->Child2g=Input::get('Child2g');
$tuition ->Child3a=Input::get('Child3a');
$tuition ->Child3b=Input::get('Child3b');
$tuition ->Child3c=Input::get('Child3c');
$tuition ->Child3d=Input::get('Child3d');
$tuition ->Child3e=Input::get('Child3e');
$tuition ->Child3f=Input::get('Child3f');
$tuition ->Child3g=Input::get('Child3g');
$tuition ->Child4a=Input::get('Child4a');
$tuition ->Child4b=Input::get('Child4b');
$tuition ->Child4c=Input::get('Child4c');
$tuition ->Child4d=Input::get('Child4d');
$tuition ->Child4e=Input::get('Child4e');
$tuition ->Child4f=Input::get('Child4f');
$tuition ->Child4g=Input::get('Child4g');
$tuition ->Child5a=Input::get('Child5a');
$tuition ->Child5b=Input::get('Child5b');
$tuition ->Child5c=Input::get('Child5c');
$tuition ->Child5d=Input::get('Child5d');
$tuition ->Child5e=Input::get('Child5e');
$tuition ->Child5f=Input::get('Child5f');
$tuition ->Child5g=Input::get('Child5g');
$tuition ->SynAffiliation=Input::get('SynAffiliation');
$tuition ->SynName=Input::get('SynName');
$tuition ->SynRabbi=Input::get('SynRabbi');
$tuition ->RabbiTel=Input::get('RabbiTel');
$tuition ->IntFamShabbaton=Input::get('IntFamShabbaton');
$tuition ->Ref1Name=Input::get('Ref1Name');
$tuition ->Ref1Number=Input::get('Ref1Number');
$tuition ->Ref1Type=Input::get('Ref1Type');
$tuition ->Ref1Notes=Input::get('Ref1Notes');
$tuition ->Ref1Notes=Input::get('ref1officenum');
$tuition ->Ref1Notes=Input::get('ref1cellnum');
$tuition ->Ref1Notes=Input::get('ref1email');
$tuition ->Ref1Notes=Input::get('ref2officenum');
$tuition ->Ref1Notes=Input::get('ref2cellnum');
$tuition ->Ref1Notes=Input::get('ref2email');
$tuition ->Ref1Notes=Input::get('ref3officenum');
$tuition ->Ref1Notes=Input::get('ref3cellnum');
$tuition ->Ref1Notes=Input::get('ref3email');

$tuition ->Ref2Name=Input::get('Ref2Name');
$tuition ->Ref2Number=Input::get('Ref2Number');
$tuition ->Ref2Type=Input::get('Ref2Type');
$tuition ->Ref2Notes=Input::get('Ref2Notes');
$tuition ->Ref3Name=Input::get('Ref3Name');
$tuition ->Ref3Number=Input::get('Ref3Number');
$tuition ->Ref3Type=Input::get('Ref3Type');
$tuition ->Ref3Notes=Input::get('Ref3Notes');
$tuition ->SchoolOrIndividual=Input::get('SchoolOrIndividual');
$tuition ->HearAboutUsName=Input::get('HearAboutUsName');
$tuition ->HearAboutUsNumber=Input::get('HearAboutUsNumber');
$tuition ->Comments=Input::get('Comments');
$tuition ->SchoolYear=Input::get('SchoolYear');
$tuition ->PassportID=Input::get('PassportID');

$tuition ->PreAppId=Input::get('PreAppId');
$tuition ->ParentId=Input::get('ParentId');


		$tuition->save();
return 'Information has been saved';
		//return Redirect::route('events.index')->with('message', 'New event was created');

			}
	public function update($id, Request $request){

		
			$tuition = InsertTuition::findOrFail($id);
		
$tuition ->Completed=Input::get('Completed');

$tuition ->Gender=Input::get('Gender');
$tuition ->LastName=Input::get('LastName');
$tuition ->FirstName=Input::get('FirstName');
$tuition ->HebrewName=Input::get('HebrewName');
$tuition ->Address=Input::get('Address');
$tuition ->Apt=Input::get('Apt');
$tuition ->City=Input::get('City');
$tuition ->State=Input::get('State');
$tuition ->Zip=Input::get('Zip');
$tuition ->Country=Input::get('Country');
$tuition ->SameAddress=Input::get('SameAddress');
$tuition ->StudentHome=Input::get('StudentHome');
$tuition ->StudentEmail=Input::get('StudentEmail');
$tuition ->StudentCell=Input::get('StudentCell');

$tuition ->SSN=substr(Input::get('SSN'),0,15);
$tuition ->Citizenship=Input::get('Citizenship');
$tuition ->CitizenshipOther=Input::get('CitizenshipOther');

$tuition ->PlaceOfBirth=Input::get('PlaceOfBirth');
$tuition ->ChildStaysWith=Input::get('ChildStaysWith');
$date = Carbon\Carbon::createFromFormat('d/m/Y', Input::get('DOB'));
$tuition ->DOB=$date;
$tuition ->StudentRelStatus=Input::get('StudentRelStatus');
$tuition ->ConversionRabbi=Input::get('ConversionRabbi');
$tuition ->School=Input::get('School');
$tuition ->SchoolAddress=Input::get('SchoolAddress');
$tuition ->SchoolCity=Input::get('SchoolCity');
$tuition ->SchoolState=Input::get('SchoolState');
$tuition ->Grade=Input::get('Grade');
$tuition ->SchoolPhone=Input::get('SchoolPhone');
$tuition ->SchoolFax=Input::get('SchoolFax');
$tuition ->AmericanOfficePhone=Input::get('AmericanOfficePhone');
$tuition ->AmericanContactFirst=Input::get('AmericanContactFirst');
$tuition ->AmericanContactLast=Input::get('AmericanContactLast');
$tuition ->AmericanContactTitle=Input::get('AmericanContactTitle');
$tuition ->SemAdvName=Input::get('SemAdvName');
$tuition ->SemAdvPhone=Input::get('SemAdvPhone');
$tuition ->WhyInterested=Input::get('WhyInterested');
$tuition ->FullSchoolAmt=Input::get('FullSchoolAmt');
$tuition ->FinAidFromSchool=Input::get('FinAidFromSchool');
$tuition ->DueToSchool=Input::get('DueToSchool');
$tuition ->ParentPay=Input::get('ParentPay');
$tuition ->FinAidFromOther=Input::get('FinAidFromOther');
$tuition ->FinAidOtherDetail=Input::get('FinAidOtherDetail');
$tuition ->PHSFund1=Input::get('PHSFund1');
$tuition ->PHSStatus1=Input::get('PHSStatus1');
$tuition ->PHSAmount1=Input::get('PHSAmount1');
$tuition ->PHSFund2=Input::get('PHSFund2');
$tuition ->PHSStatus2=Input::get('PHSStatus2');
$tuition ->PHSAmount2=Input::get('PHSAmount2');
$tuition ->PHSFund3=Input::get('PHSFund3');
$tuition ->PHSStatus3=Input::get('PHSStatus3');
$tuition ->PHSAmount3=Input::get('PHSAmount3');
$tuition ->PHSIsFirst=Input::get('PHSIsFirst');
$tuition ->PHSOtherPrograms=Input::get('PHSOtherPrograms');
$tuition ->PHSHowLong=Input::get('PHSHowLong');
$tuition ->PHSPlans=Input::get('PHSPlans');
$tuition ->PrevS1Name=Input::get('PrevS1Name');
$tuition ->PrevS1Loc=Input::get('PrevS1Loc');
$tuition ->PrevS1Qty=Input::get('PrevS1Qty');
$tuition ->PrevS1SchoolYear=Input::get('PrevS1SchoolYear');
$tuition ->PrevS2Name=Input::get('PrevS2Name');
$tuition ->PrevS2Loc=Input::get('PrevS2Loc');
$tuition ->PrevS2Qty=Input::get('PrevS2Qty');
$tuition ->PrevS2SchoolYear=Input::get('PrevS2SchoolYear');
$tuition ->OtherSchools=Input::get('OtherSchools');
$tuition ->HSNextYear=Input::get('HSNextYear');
$tuition ->HappyWithSchool=Input::get('HappyWithSchool');
$tuition ->HappyReason=Input::get('HappyReason');
$tuition ->SpecialEdCurrent=Input::get('SpecialEdCurrent');
$tuition ->SpecialEdRecommend=Input::get('SpecialEdRecommend');
$tuition ->SpecialEdDetail=Input::get('SpecialEdDetail');
$tuition ->IntShabbaton=Input::get('IntShabbaton');
$tuition ->IntDaycamp=Input::get('IntDaycamp');
$tuition ->IntOvernight=Input::get('IntOvernight');
$tuition ->PrevDC=Input::get('PrevDC');
$tuition ->PrevON=Input::get('PrevON');
$tuition ->CampName=Input::get('CampName');
$tuition ->CampCity=Input::get('CampCity');
$tuition ->RateSecular=Input::get('RateSecular');
$tuition ->RateHebrew=Input::get('RateHebrew');
$tuition ->RateSocial=Input::get('RateSocial');
$tuition ->ParentMarital=Input::get('ParentMarital');
$tuition ->visitation=Input::get('visitation');
$tuition ->FatherTitle=Input::get('FatherTitle');
$tuition ->FatherLastName=Input::get('FatherLastName');
$tuition ->FatherFirstName=Input::get('FatherFirstName');
$tuition ->FatherAddress=Input::get('FatherAddress');

$tuition ->FatherCity=Input::get('FatherCity');
$tuition ->FatherState=Input::get('FatherState');
$tuition ->FatherZip=Input::get('FatherZip');
$tuition ->FatherCountry=Input::get('FatherCountry');
$tuition ->FatherHome=Input::get('FatherHome');
$tuition ->FatherCell=Input::get('FatherCell');
$tuition ->FatherWork=Input::get('FatherWork');
$tuition ->FatherEmail=Input::get('FatherEmail');

$tuition ->FatherOccupation=Input::get('FatherOccupation');
$tuition ->FatherCitizenship=Input::get('FatherCitizenship');
$tuition ->FatherCitizenshipOther=Input::get('FatherCitizenshipOther');
$tuition ->FatherReligiousStatus=Input::get('FatherReligiousStatus');
$tuition ->FatherConversionRabbi=Input::get('FatherConversionRabbi');
$tuition ->FatherEdBackground=substr(Input::get('FatherEdBackground'),0,200);
$tuition ->FatherEthnicity=Input::get('FatherEthnicity');
$tuition ->FatherAffiliation=Input::get('FatherAffiliation');
$tuition ->FatherIntJudiasm=Input::get('FatherIntJudiasm');
$tuition ->MotherTitle=Input::get('MotherTitle');
$tuition ->MotherLastName=Input::get('MotherLastName');
$tuition ->MotherFirstName=Input::get('MotherFirstName');
$tuition ->MotherAddress=Input::get('MotherAddress');

$tuition ->MotherCity=Input::get('MotherCity');
$tuition ->MotherState=Input::get('MotherState');
$tuition ->MotherZip=Input::get('MotherZip');
$tuition ->MotherCountry=Input::get('MotherCountry');
$tuition ->MotherHome=Input::get('MotherHome');
$tuition ->MotherCell=Input::get('MotherCell');
$tuition ->MotherWork=Input::get('MotherWork');
$tuition ->MotherEmail=Input::get('MotherEmail');

$tuition ->MotherOccupation=Input::get('MotherOccupation');
$tuition ->MotherCitizenship=Input::get('MotherCitizenship');
$tuition ->MotherCitizenshipOther=Input::get('MotherCitizenshipOther');
$tuition ->MotherReligiousStatus=Input::get('MotherReligiousStatus');
$tuition ->MotherConversionRabbi=Input::get('MotherConversionRabbi');
$tuition ->MotherEdBackground=substr(Input::get('MotherEdBackground'),0,200);
$tuition ->MotherEthnicity=Input::get('MotherEthnicity');
$tuition ->MotherAffiliation=Input::get('MotherAffiliation');
$tuition ->MotherIntJudiasm=Input::get('MotherIntJudiasm');
$tuition ->Child1a=Input::get('Child1a');
$tuition ->Child1b=Input::get('Child1b');
$tuition ->Child1c=Input::get('Child1c');
$tuition ->Child1d=Input::get('Child1d');
$tuition ->Child1e=Input::get('Child1e');
$tuition ->Child1f=Input::get('Child1f');
$tuition ->Child1g=Input::get('Child1g');
$tuition ->Child2a=Input::get('Child2a');
$tuition ->Child2b=Input::get('Child2b');
$tuition ->Child2c=Input::get('Child2c');
$tuition ->Child2d=Input::get('Child2d');
$tuition ->Child2e=Input::get('Child2e');
$tuition ->Child2f=Input::get('Child2f');
$tuition ->Child2g=Input::get('Child2g');
$tuition ->Child3a=Input::get('Child3a');
$tuition ->Child3b=Input::get('Child3b');
$tuition ->Child3c=Input::get('Child3c');
$tuition ->Child3d=Input::get('Child3d');
$tuition ->Child3e=Input::get('Child3e');
$tuition ->Child3f=Input::get('Child3f');
$tuition ->Child3g=Input::get('Child3g');
$tuition ->Child4a=Input::get('Child4a');
$tuition ->Child4b=Input::get('Child4b');
$tuition ->Child4c=Input::get('Child4c');
$tuition ->Child4d=Input::get('Child4d');
$tuition ->Child4e=Input::get('Child4e');
$tuition ->Child4f=Input::get('Child4f');
$tuition ->Child4g=Input::get('Child4g');
$tuition ->Child5a=Input::get('Child5a');
$tuition ->Child5b=Input::get('Child5b');
$tuition ->Child5c=Input::get('Child5c');
$tuition ->Child5d=Input::get('Child5d');
$tuition ->Child5e=Input::get('Child5e');
$tuition ->Child5f=Input::get('Child5f');
$tuition ->Child5g=Input::get('Child5g');
$tuition ->SynAffiliation=Input::get('SynAffiliation');
$tuition ->SynName=Input::get('SynName');
$tuition ->SynRabbi=Input::get('SynRabbi');
$tuition ->RabbiTel=Input::get('RabbiTel');
$tuition ->IntFamShabbaton=Input::get('IntFamShabbaton');
$tuition ->Ref1Name=Input::get('Ref1Name');
$tuition ->Ref1Number=Input::get('Ref1Number');
$tuition ->Ref1Type=Input::get('Ref1Type');
$tuition ->Ref1Notes=Input::get('Ref1Notes');
$tuition ->Ref2Name=Input::get('Ref2Name');
$tuition ->Ref2Number=Input::get('Ref2Number');
$tuition ->Ref2Type=Input::get('Ref2Type');
$tuition ->Ref2Notes=Input::get('Ref2Notes');
$tuition ->Ref3Name=Input::get('Ref3Name');
$tuition ->Ref3Number=Input::get('Ref3Number');
$tuition ->Ref3Type=Input::get('Ref3Type');
$tuition ->Ref3Notes=Input::get('Ref3Notes');
$tuition ->SchoolOrIndividual=Input::get('SchoolOrIndividual');
$tuition ->HearAboutUsName=Input::get('HearAboutUsName');
$tuition ->HearAboutUsNumber=Input::get('HearAboutUsNumber');
$tuition ->Comments=Input::get('Comments');
$tuition ->SchoolYear=Input::get('SchoolYear');
$tuition ->PassportID=Input::get('PassportID');
			$tuition->update();
//			return 'Information has been updated';
return Redirect::to('http://www.oorah.org/tuition/childlist.asp');
		//return Redirect::route('events.index')->with('message','Event was updated');
			}
			
   public function show ($id) {
		return view('child');	

		//return view('show');
		//	$event_lists = eventList::all();
		//return view('listing')->with('event_lists', $event_lists);
	
	}/*
	public function create () {
		
		return view('form');
	
	}*/
	public function edit($id) {
		$application = insertTuition::findOrFail($id);
		return view('form')->with('application', $application);
					
		}
		public function destroy($id) {
		
			$application = insertTuition::findOrFail($id)->delete();
return 'form was deleted';
			
			}

}
