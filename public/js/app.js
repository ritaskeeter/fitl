$('form.delete_object').submit(function(e){
	//submit is the event listener which checks for submission
	var confirmDelete = confirm("Are you sure you want to delete the question?");

	/* Will return a true or false value based on which the submission 
	will proceed or halt */
	return confirmDelete;

});

//Toggle comments Edit section when Edit button is clicked
$('.edit-object').click(function(e){
	//To find parent list item or parent comment that the Edit button is linked to
	var $commentItem = $(this).closest('li');
	//Find the comment form to be displayed
	var $commentForm = $commentItem.find('form.edit-object-form');

	//If hide class is present toggle it and display form otherwise hide it
	$commentForm.toggleClass('collapse');
});
