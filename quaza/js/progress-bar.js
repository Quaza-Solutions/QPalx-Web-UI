$(document).ready(function() {

var progressbarB = $('#progressbar'),
max = progressbarB.data('max'),
time = (1000 / max) * 5,
valueB = progressbarB.val();

var loadingB = function() {
valueB += 1;
addValueB = progressbarB.val(valueB);

$('.progress-value').html(valueB + '%');
if (valueB == max) {
clearInterval(animateB);
}
};

var animateB = setInterval(function() {
loadingB();
}, time);

});

$(document).ready(function() {

var progressbar = $('#progressbar-2'),
max = progressbar.data('max'),
time = (1000 / max) * 5,
value = progressbar.val();

var loading = function() {
value += 1;
addValue = progressbar.val(value);

$('.progress-value-2').html(value + '%');
if (value == max) {
clearInterval(animate);
}
};

var animate = setInterval(function() {
loading();
}, time);


});