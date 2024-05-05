// start => spinner and button function
	function buttons(button, type) {
		if (type === 'start') {
			$('.spinner').show();
			$('#close-button').attr('disabled', 'true');
			$('#' + button).attr('disabled', 'true');

		}

		if (type === 'finish') {
			$('.spinner').hide();
			$('#close-button').removeAttr('disabled');
			$('#' + button).removeAttr('disabled');
		}
	}
// end
//SweetAlert2 Toast
	const toast = Swal.mixin({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 5000
	});
// end
// start => function for adding "," very 3 digits in amount automatically
function FormatCurrency(ctrl) {
	//Check if arrow keys are pressed - we want to allow navigation around textbox using arrow keys
	if (event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) {
			return;
	}

	var val = ctrl.value;

	val = val.replace(/,/g, "")
	ctrl.value = "";
	val += '';
	x = val.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';

	var rgx = /(\d+)(\d{3})/;

	while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}

	ctrl.value = x1 + x2;
}

function CheckNumeric() {
	// digit 0=>9
	// dot
	return event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode == 46;
}
// end

$(function () {

	// token is use for every form submit
	// prevent csrf attacks
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	// end
	//start => keeps the active bootstrap-tab open on page reload and page back
		$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
			localStorage.setItem('activeTab', $(e.target).attr('href'));
		});
		var activeTab = localStorage.getItem('activeTab');
		if (activeTab) {
			$('a[data-bs-toggle="tab"][href="'+ activeTab +'"]').tab('show');
		}
	// end

})