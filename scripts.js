$(document).ready(function() {

// ["Label" , "website link" , "bar color" , "bar image"]
	var social = [
	["facebook", 	"https://www.facebook.com/jennifer.anton.10", "#3B5998", "Sidebar/images/facebook.png"],
	 ["google+", 	"https://plus.google.com/u/0/113722826017096199348/posts", 		"#dd4b39", "images/google_plus.png"],
	 ["github", 	"https://github.com/sensei100", 		"#171515", "images/github.png"],
	 ["linkedin", 	"https://www.linkedin.com/in/jenniferanton","#0e76a8", "images/linkedin.png"],
	 ["twitter", 	"https://twitter.com/jensensei", 	"#55acee", "images/twitter.png"],
	 ["wordpress", 	"http://jenniferanton.com", "#d54e21", "images/wordpress.png"],
	 ];

////////////////////////////////////////////////	
//// DO NOT EDIT ANYTHING BELOW THIS LINE! /////
////////////////////////////////////////////////
		
	$("#socialside").append('<ul class="mainul"></ul>');
	
	/// generating bars
	for(var i=0;i<social.length;i++){
	$(".mainul").append("<li>" + '<ul class="scli" style="background-color:' + social[i][2] + '">' +
						'<li>' + social[i][0] + '<img src="' + social[i][3] + '"/></li></ul></li>');
	 				}
	
	/// bar click event
	$(".scli").click(function(){
		var link = $(this).text();		
		for(var i=0;i<social.length;i++){
			if(social[i][0] == link){
				window.open(social[i][1]);
			}
		}		
	});
	
	/// mouse hover event
	$(".scli").mouseenter(function() {	
		$(this).stop(true);	
		$(this).clearQueue();
			$(this).animate({
				left : "160px"
			}, 500);
				
	});

	/// mouse out event
	$(".scli").mouseleave(function(){
		$(this).animate({
			left:"0px"
		},700,'easeOutBounce');
	});

});


var modalContainer = $("#modal-container");
 
var hideModal = function() {
  modalContainer.hide();
};
 
var showModal = function() {
  modalContainer.show();
};
 
var modalShowButton = $("#show");
modalShowButton.on("click", showModal);
 
var modalCloseButton = $("#hide");
modalCloseButton.on("click", hideModal);
 
$(document).on("keyup", function(evt) {
  evt = evt || window.event; // support IE
 
  // if escape key is pressed, hide the modal
  if (evt.keyCode === 27) {
    hideModal();
  }
});
 
var handleNewsletterSignup = function(evt) {
  
 
  var newsletterHeader = $("#newsletter-header");
 
  var newsletterForm = $("#myForm");
  newsletterForm.hide(); // hide the form
 
  newsletterHeader.text("Thank you for signing up!");
 
  setTimeout(hideModal, 2000);
};
 
var newsletterForm = $("#newsletter-signup");
newsletterForm.on("submit", handleNewsletterSignup);

var showButton = $("#show");
var hideButton = $("#hide");


