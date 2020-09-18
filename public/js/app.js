$('form.delete_object').submit(function(e){
	//submit is the event listener which checks for submission
	var confirmDelete = confirm("Are you sure you want to delete the question?");

	/* Will return a true or false value based on which the submission 
	will proceed or halt */
	return confirmDelete;

});