
jQuery(document).ready(function() {
	
	
	jQuery( ".wbl-title h3" ).each(function() {
		jQuery(this).on("click", function() {
			jQuery(this).parent('.wbl-title').parent('.wbl-raid').toggleClass("toggled"); // Adding/Removing "toggled" class when the title is clicked.
		});
	});
	
	
	
});