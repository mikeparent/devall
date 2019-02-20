jQuery(document).ready(function($){

	var selectImage = $('.rwd_select_image');

	var frame;
	var selectImgBtn;
	var imgContainer;
	var imageInput;

	selectImage.on('click', function(){
		
		selectImgBtn = $(this);
		imgContainer = selectImgBtn.parent();
		imageInput = imgContainer.children('input');

		if ( frame ) {
			frame.open();
			return;
	    }
	    
	    // Create a new media frame
	    frame = wp.media({
			title: 'Select or Upload Media Of Your Chosen Persuasion',
			button: {
				text: 'Use this media'
			},
			multiple: false  // Set to true to allow multiple files to be selected
	    });

	    // When an image is selected in the media frame...
	    frame.on( 'select', function() {
	      
			// Get media attachment details from the frame state
			var attachment = frame.state().get('selection').first().toJSON();

			// Send the attachment URL to our custom image input field.
			imageInput.val(attachment.url);
			imgContainer.append( '<img src="'+attachment.url+'" alt="" style="max-width:100%;"/>' );
			selectImgBtn.hide();

	    });

	    // Finally, open the modal on click
    	frame.open();

	});

	$('body').on('click', '.rwd_remove_image', function(){
		var parent = $(this).parent();
		parent.children('input').val('');
		parent.children('img').remove();
		parent.children('.rwd_select_image').show();
	});

});