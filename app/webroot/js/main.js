var uniqueLang = [];

$.ajax({ 
    type: 'GET', 
    url: 'https://api.github.com/users/jazibobs/repos', 
    dataType: 'json',
    success: function (data) { 
        $.each(data, function(index, element) {
        	if (checkIfUnique(element.language) == true && element.language != null) {
	        	$('.git-info').append($('<span>', {text: element.language}));
	        	$('.git-info').append(' ');
        	}
       	});
    }
});

function checkIfUnique(element) {
	if ($.inArray(element, uniqueLang) == -1) {
		uniqueLang.push(element);
		return true;
	}  else {
		return false;
	}
}