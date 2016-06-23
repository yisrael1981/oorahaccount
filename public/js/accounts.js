//general functions
function ajaxpost(url,senddata,  returnedString) {
//local
	//$.post( 'http://localhost/laravel/oorahaccount/public/account/' +url, senddata)
	$.post( '/newtuition/public/account/' +url, senddata)
		.done(function( data ) {
			if ($.trim(data) == "Success") {
				alert(returnedString);
				location.reload();
			} else {
				if (data == "Error") {
					alert("Please check your information and try again");
				} else {
					alert(data);
				}

			}
	})
  .fail(function() {
    alert("Please check your information and try again");
  })
	;

}
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
		$('#hideDelete').hide();
		$('#hideDelete').before($('div[id=' + addressID + '] span[data-type="address"]').text() + "<br>" +
			 $('div[id=' + addressID + '] span[data-type="city"]').text() + ' '
			 + $('div[id=' + addressID + '] span[data-type="state"]').text() +
			  ' ' + $('div[id=' + addressID + '] span[data-type="zip"]').text());

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
		ajaxpost("senddefaultaddress", {'adrid' :$('input[name="defaultaddr"]:checked').val(),'accountid':$('#accountid').text() },"Your information has been edited")
		
		});



	$('#form1 .insert').click(function() {
		ajaxpost('sendnewaddress', $( "#form1" ).serialize(),"Your information has been added!"  )
	});

	$('#form1 .edit').click(function() {
		ajaxpost("sendeditaddress", $( "#form1" ).serialize(),"Your information has been edited" )
	 
	});
	$('#form1 .delete').click(function() {
		ajaxpost("senddeleteaddress", $( "#form1" ).serialize(),"Your information has been deleted" )
	 
	});
//end address section
//start telephone section 

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
		if ($('#page').val() == "ind") {
			ajaxpost("sendnewtelind", $( "#form2" ).serialize() ,"Your information has been added");
		} else {
			ajaxpost("sendnewtelaccount", $( "#form2" ).serialize() ,"Your information has been added");
		}
	});

	$('#form2 .edit, #form2 .delete').click(function() {
	 	ajaxpost( "sendedittel",  $( "#form2" ).serialize() ,"Your information has been edited");
	
	});
	//date of birth
	$('#formdb .insert').click(function() {
		ajaxpost( "newdob",  $( "#formdb" ).serialize() ,"Your information has been edited");
	});

});//end general function


//end telephone section 