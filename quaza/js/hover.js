
	 $("button").hover(function() {
  	$(this).removeClass("btn-default").addClass("btn-danger");

		});
		 $("#default-btn-1").hover(function() {	
		var txt3 = "All information on this course will be lost. ";
		var newDiv3 = $('<div style=\"position: absolute; top: -50px; right: 0px; background-color: #444; padding: 6px; width: 180px; height: 60px; color: #fff;\"></div>').text(txt3);
		$('.default-btn-1').append(newDiv3);
});
		 $("#default-btn-2").hover(function() {	
		var txt3 = "All information on this course will be lost. ";
		var newDiv3 = $('<div style=\"position: absolute; top: -50px; right: 0px; background-color: #444; padding: 6px; width: 180px; height: 60px; color: #fff;\"></div>').text(txt3);
		$('.default-btn-2').append(newDiv3);
});
		 
		 $("#default-btn-3").hover(function() {	
		var txt3 = "All information on this course will be lost. ";
		var newDiv3 = $('<div style=\"position: absolute; top: -50px; right: 0px; background-color: #444; padding: 6px; width: 180px; height: 60px; color: #fff;\"></div>').text(txt3);
		$('.default-btn-3').append(newDiv3);
});
		 
		 $("#default-btn-4").hover(function() {	
		var txt3 = "All information on this course will be lost. ";
		var newDiv3 = $('<div style=\"position: absolute; top: -50px; right: 0px; background-color: #444; padding: 6px; width: 180px; height: 60px; color: #fff;\"></div>').text(txt3);
		$('.default-btn-4').append(newDiv3);
});
		 
		 $("#default-btn-5").hover(function() {	
		var txt3 = "All information on this course will be lost. ";
		var newDiv3 = $('<div style=\"position: absolute; top: -50px; right: 0px; background-color: #444; padding: 6px; width: 180px; height: 60px; color: #fff;\"></div>').text(txt3);
		$('.default-btn-5').append(newDiv3);
});
		 
		 $("#default-btn-6").hover(function() {	
		var txt3 = "All information on this course will be lost. ";
		var newDiv3 = $('<div style=\"position: absolute; top: -50px; right: 0px; background-color: #444; padding: 6px; width: 180px; height: 60px; color: #fff;\"></div>').text(txt3);
		$('.default-btn-6').append(newDiv3);
});
		 
		 $("#default-btn-7").hover(function() {	
		var txt3 = "All information on this course will be lost. ";
		var newDiv3 = $('<div style=\"position: absolute; top: -50px; right: 0px; background-color: #444; padding: 6px; width: 180px; height: 60px; color: #fff;\"></div>').text(txt3);
		$('.default-btn-7').append(newDiv3);
});
		 
	 	 $("button").mouseout(function() {
		$(".default-btn-1").empty();
		$(".default-btn-2").empty();
		$(".default-btn-3").empty();
		$(".default-btn-4").empty();
		$(".default-btn-5").empty();
		$(".default-btn-6").empty();
		$(".default-btn-7").empty();
		$(this).removeClass("btn-danger").addClass("btn-default");
		});