//code for addresses
$(function() {
	$(".editbtnAddress").click(function (){

	addressID = $(this).attr('data-type');	
	// the pull all data attributes from  div+number data-type[]
$('#InActive').val('0');
$('#TypeAddress option[value=' + $('div[id=' + addressID + '] span[data-type="type"]').text()+']').attr("selected",true);

$('#Address').val( $('div[id=' + addressID + '] span[data-type="address"]').text() );
$('#City').val( $('div[id=' + addressID+ '] span[data-type="city"]').text());
$('#State').val( $('div[id=' + addressID+ '] span[data-type="state"]').text());
$('#Zip').val( $('div[id=' + addressID+ '] span[data-type="zip"]').text());
$('#Country').val($('div[id=' + addressID + '] span[data-type="country"]').text());
$('#adrid').val(addressID);
$('#sbtbutn.edit').show();
$('#sbtbutn.insert, #sbtbutn.delete').hide();
		});
		//delete script

		$(".delbtnAddress").click(function (){

//if default, do not allow to delete
if ( $('input[name="defaultaddr"]:checked').val() == $(this).attr('data-type') ) {
		alert("You cannot delete an address that is default. Please switch the default address before deletion");
		return false;
		
			}
		//get number after word edit			
	// the pull all data attributes from  div+number data-type[]
$('#InActive').val('1');
	addressID = $(this).attr('data-type');	

$('#TypeAddress option[value=' + $('div[id=' + addressID+ '] span[data-type="type"]').text()+']').attr("selected",true);

$('#Address').val( $('div[id=' + addressID + '] span[data-type="address"]').text() );
$('#City').val( $('div[id=' + addressID + '] span[data-type="city"]').text());
$('#State').val( $('div[id=' + addressID + '] span[data-type="state"]').text());
$('#Zip').val( $('div[id=' + addressID + '] span[data-type="zip"]').text());
$('#Country').val($('div[id=' +addressID + '] span[data-type="country"]').text());
$('#adrid').val(addressID);
$('#sbtbutn.edit, #sbtbutn.insert').hide();
$('#sbtbutn.delete').show();


		});
		
	$('#newaddressbtn').click(function() {
		$('#sbtbutn.edit,#sbtbutn.delete').hide();
		$('#sbtbutn.insert').show();

		  $("#form1 input[type='text']").each(function() {
	$(this).val('') ;
		});    
		$('#InActive').val('0');        
	});
	
	$('#changedefaultbtn').click(function () {
			$.post( "//oorah.org/account/sendaddressdefault.php", {'adrid' :$('input[name="defaultaddr"]:checked').val()} )
  .done(function( data ) {
  if ($.trim(data) == "Success") {
		alert("Your information has been edited");
		}
  });

		});
	
});


$('#form1 .insert').click(function() {
	$.post( "//oorah.org/account/sendaddress.php", $( "#form1" ).serialize() )
  .done(function( data ) {
  if ($.trim(data) == "Success") {
		alert("Your information has been added");
	location.reload();
		} else {
					alert("Please check your information and try again");
			}
  });
});

$('#form1 .edit,#form1 .delete').click(function() {
	$.post( "//oorah.org/account/sendaddressedit.php", $( "#form1" ).serialize() )
  .done(function( data ) {
  if ($.trim(data) == "Success") {
		alert("Your information has been edited");
	location.reload();
		} else {
					alert("Please check your information and try again");
			}
  });
 
});
//end address section
//start telephone section 

$(function() {
	$(".edittelbtn").click(function (){
telid=$(this).attr('data-type') ;
$('#active').val('1');
typeval= $('div[id=' + telid+ '] span[data-type="type"]').text() ;
$('#Type option[value=' + typeval+']').attr("selected",true);
$('#Telephone').val( $('div[id=' + telid + '] span[data-type="tel"]').text() );
$('#telid').val(telid);
$('#sbtbutntel.edit').show();
$('#sbtbutntel.insert,#sbtbutntel.delete').hide();
	
		});
		//delete number
		$(".deltelbtn").click(function (){

telid=  $(this).attr('data-type');
		$('#active').val('0');
typeval= $('div[id=' + telid + '] span[data-type="type"]').text() ;
$('#Type option[value=' + typeval+']').attr("selected",true);
$('#Telephone').val( $('div[id=' + telid+ '] span[data-type="tel"]').text() );
$('#telid').val(telid);
$('#sbtbutntel.edit,#sbtbutntel.insert').hide();
$('#sbtbutntel.delete').show();
		});
		
		//insert new tel
	$('#newtelbtn').click(function() {
		$('#sbtbutntel.edit,#sbtbutntel.delete').hide();
		$('#sbtbutntel.insert').show();

		  $("#form2 input[type='text']").each(function() {
	$(this).val('') ;
		});            
	});

$('#form2 .insert').click(function() {

postpage =  "//www.oorah.org/account/telnew.php";
	if ($('#page').val() == "ind") {
		postpage =  "//www.oorah.org/accounttelindnew.php";
		
		}
	$.post(postpage, $( "#form2" ).serialize() )
  .done(function( data ) {
  if ($.trim(data) == "Success") {
		alert("Your information has been added");
	location.reload();
		}
  });
});

$('#form2 .edit','#form2 .delete').click(function() {
postpage =  "//www.oorah.org/account/teledit.php";
	
	$.post(postpage, $( "#form2" ).serialize() )
  .done(function( data ) {
  if ($.trim(data) == "Success") {
		alert("Your information has been edited");
	location.reload();
		}
  });
 
});
});


//end telephone section