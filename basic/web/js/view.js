function addAmount(number) {
		var quality = $('#unit_' + number).val();
		quality = quality != '' ? quality : 0
		var currency = $('#Qulaity_' + number).val();
		var total_amount = Number(quality) * Number(currency);

		$('#Price_' + number).text(total_amount);
		$('#Price_value_' + number).val(total_amount);
		calculateTotal();
	}
	
	
function calculateTotal()
{
	var subAmount = 0;
	$('input[name="Price[]"]').each(function () {
        let thisSubAmount = $(this).val();
        subAmount = subAmount+Number(thisSubAmount);
    });
	$('#idSubtotal').val(subAmount);
	$('#idTotal').val(subAmount);
	$('#idAmountPaid').val(subAmount);

}  

$('#idInvoiceFrom').ajaxForm({
        beforeSubmit: function(arr, $form, options) {
        },
        success: function(data) {
            $.fn.updateURL('responseEvent', 'success');
            $.fn.resetForm();
        },
        error: function (error) {
			let errorMsg = error.responseJSON.message;
			let formFields = ["iDownPaymentvalue","iPaymentTermsValue","szAprFinancing","szSubject", 'szMessageBody', 'iLateDayCount','iCustomerRecipients','iRecurringDayCount'];
			for (let i = 0; i < formFields.length; i++) {
				let key = formFields[i];
				if (errorMsg.hasOwnProperty(key)) {
					if (errorMsg[key].length > 0) {
						let errorMessage = '';
						errorMsg[key].forEach((element) => {
							errorMessage += element;
						});
						$('#'+key+'_span').html('<i class="fa fa-times-circle"></i>'+errorMessage);
					}
				}
			}
		},
    });
