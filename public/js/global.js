
/*
 *	Triggered on user event	
 */
function createAccount(){
	$("#login_container").animate({
		opacity: 0,
	}, 500, function() {
	 	$("#login_container").hide();
	 	$("#create_account_container").fadeIn();
	});
}
function backToLogin(){
	$("#create_account_container").animate({
		opacity: 0,
	}, 500, function() {
	 	$("#create_account_container").hide();
	 	$("#login_container").fadeIn();
	});
}


/* Form submit */
$("#login_form").keypress(function(e) {
  if (e.keyCode == 13) {
    $(this).closest("form").submit();
  }
});