function hrFunction1() {
	if( $("#hr-1").hasClass("black-hr-1") ) {
		$("#hr-1").removeClass("black-hr-1").addClass("green-hr-1");
		$("#hr-2").removeClass("green-hr-1").addClass("black-hr-1");
		$("#hr-3").removeClass("green-hr-1").addClass("black-hr-1");
} else {
		$("#hr-1").removeClass("black-hr-1").addClass("green-hr-1");
}
}

function hrFunction2() {
		$("#hr-1").removeClass("green-hr-1").addClass("black-hr-1");
		$("#hr-2").removeClass("black-hr-1").addClass("green-hr-1");
		$("#hr-3").removeClass("green-hr-1").addClass("black-hr-1");
}

function hrFunction3() {
	if( $("#hr-3").hasClass("black-hr-1") ) {
		$("#hr-3").removeClass("black-hr-1").addClass("green-hr-1");
		$("#hr-2").removeClass("green-hr-1").addClass("black-hr-1");
		$("#hr-1").removeClass("green-hr-1").addClass("black-hr-1");
} else {
		$("#hr-3").removeClass("black-hr-1").addClass("green-hr-1");
}
}
function hrFunctionA() {
	if( $("#hr-1").hasClass("black-hr-2") ) {
		$("#hr-1").removeClass("black-hr-2").addClass("blue-hr-1");
		$("#hr-2").removeClass("blue-hr-1").addClass("black-hr-2");
		$("#hr-3").removeClass("blue-hr-1").addClass("black-hr-2");
} else {
		$("#hr-1").removeClass("black-hr-1").addClass("blue-hr-2");
}
}

function hrFunctionB() {
		$("#hr-1").removeClass("blue-hr-1").addClass("black-hr-2");
		$("#hr-2").removeClass("black-hr-2").addClass("blue-hr-1");
		$("#hr-3").removeClass("blue-hr-1").addClass("black-hr-2");
}

function hrFunctionC() {
	if( $("#hr-3").hasClass("black-hr-2") ) {
		$("#hr-3").removeClass("black-hr-2").addClass("blue-hr-1");
		$("#hr-2").removeClass("blue-hr-1").addClass("black-hr-2");
		$("#hr-1").removeClass("blue-hr-1").addClass("black-hr-2");
} else {
		$("#hr-3").removeClass("black-hr-2").addClass("blue-hr-1");
}
}
