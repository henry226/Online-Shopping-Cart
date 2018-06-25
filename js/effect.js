//TextArea word counts
$(document).ready(function() {
	$("#wordCount").on('keyup', function() {
	var words = this.value.match(/\S+/g).length;
	//console.log(words);
	if (words > 200) {
		var str = $(this).val().split(/\s+/, 200).join(" ");
		console.log(str);
		$(this).val(str);
		alert("No more than 10 words!");
	}
	else {
	  $('#counter').text(words);
	  $('#left').text(10-words);
	}
	});
}); 
	
// Mouseover slideup then slidedow effect
$(function() {
	$('.core1').on('mouseenter', function() {
		$('.core1').slideUp(2000).slideDown(2000);
	});

	$('.core2').on('mouseenter', function() {
		$('.core2').fadeToggle(2000).fadeToggle(2000);
	});

	$('.location1').on('click', function() {
		$('.locationshow').fadeToggle(2000);
	});

	$('.location2').on('dblclick', function() {
		$('.locationshow2').slideToggle(2000);
	});
});

// text hint
function Suggestions(input) {
	var xhttp;

	if (input.length === 0) { 
		document.getElementById("hints").innerHTML = "";
		return;
	}

	xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function() {
		if (this.readyState === 4 && this.status === 200) {
		  document.getElementById("hints").innerHTML = this.responseText;
		}
	};

	xhttp.open("GET", "Names.php?q="+input, true);
	xhttp.send();   
}

