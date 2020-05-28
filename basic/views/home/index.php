

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<?php if (Yii::$app->session->hasFlash('success')): ?>
			<div class="alert alert-success alert-dismissable">
				 <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
				 <?= Yii::$app->session->getFlash('success') ?>
			</div>
		<?php endif; ?>
    <body id="main_body" class="no_guidelines">
        <div id="form_container" class="" >
            <form id="idInvoiceFrom" class="appnitro top_label" method="post" data-highlightcolor="#FFF7C0" action="<?php echo Url::to(['home/save'])?>">
                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                <div class="row">
				  <div class="col-md-6 mb-3">
					<label for="firstName">Organiziation Name</label>
					<input type="text" class="form-control" id="Organiziation" name="Organiziation"  placeholder="" value="" required="">
				  </div>
				</div>
				 <div class="row">
				  <div class="col-md-6 mb-3">
					<label for="firstName">Address</label>
					<input type="text" class="form-control" id="Address" name="Address"  placeholder="" value="" required="">
				  </div>
				</div>
				<div class="row">
				  <div class="col-md-6 mb-3">
					<label for="firstName">Conatct Number</label>
					<input type="text" class="form-control" id="" name="Conatct"  placeholder="" value="" required="">
				  </div>
				</div>
				
				<div class="row">
				  <div class="col-md-12">
					  <div class="col-md-6 mb-3">
						<label for="firstName">Billed Details </label>
					  </div>
					  <div class="col-md-6 mb-3">
						<div class="col-md-4">
							<label for="firstName" class="">Invoice #</label>
						</div>
						<div class="col-md-8">
							<input  type="text" class="form-control "col-md-8" id="" name="invoiceid"  placeholder="" value="" required="">
						</div>
					  </div>
				  </div>
				  
				  <div class="col-md-12 mb-3">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<div class="col-md-4">
							<label for="firstName" class="">Date</label>
						</div>
						<div class="col-md-8">
							<input  type="date" class="form-control "col-md-8" id="" name="date"  placeholder="" value="" required="">
						</div>
					</div>
				  </div>
				  
				  <div class="col-md-12 mb-3">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<div class="col-md-4">
							<label for="firstName" class="">Amount Due</label>
						</div>
						<div class="col-md-8">
							<input  type="text" class="form-control "col-md-8" id="" name="dueAmount"  placeholder="" value="0" required="">
						</div>
					</div>
				  </div>
				</div>
				<br/>
				<table class="table">
					<thead>
						<thead>
							<tr>
								<th>Close</th>
								<th scope="col">Item</th>
								<th scope="col">Description</th>
								<th scope="col">Unit Cost</th>
								<th scope="col">Quality</th>
								<th scope="col">Price</th>
							</tr>
						  </thead>
					</thead>
					<tbody id="addedRows">
						<tr>
							<td><a href="javascript:void(0)" class="btn btn-info" ><i class="fa fa-times" aria-hidden="true"></i></a></td>
							<td><input type="text" class="form-control required" name="Item[]" id="Item" value=""></td>
							<td><textarea id="form7" class="form-control required" name="Description[]" rows="3"></textarea></td>
							<td><input type="number" class="form-control addTotalAmount required" name="unit[]" id="unit_1" value="" onkeyup="addAmount(1)"></td>
							<td><input type="number" class="form-control addTotalAmount required" name="Qulaity[]" id="Qulaity_1" value="" onkeyup="addAmount(1)"></td>
							<td><span id="Price_1">0</span><input type="hidden" class="form-control" name="Price[]" id="Price_value_1" value=""></td>
						</tr>
					  </tbody>
				</table>
				<div class="col-sm-12">
				<div class="col-sm-5">
					<a href="javascript:void(0)" onclick="addMoreRows()" class="btn btn-info">Add Row</a> 
				</div>
				<div class="col-sm-7" style=" text-align: right; ">
					<div class="row">
					  <div class="col-md-12 mb-3">
						<div class="col-md-6"><label for="firstName">Sub Total</label></div>
						<div class="col-md-6"><input type="text" class="form-control" id="idSubtotal" name="subTotal"  placeholder="" value="" required=""></div>
					  </div>
					</div>
					
					<div class="row">
					  <div class="col-md-12 mb-3">
						<div class="col-md-6"><label for="firstName">Total</label></div>
						<div class="col-md-6"><input type="text" class="form-control" id="idTotal" name="Total"  placeholder="" value="" required=""></div>
					  </div>
					</div>
					
					<div class="row">
					  <div class="col-md-12 mb-3">
						<div class="col-md-6"><label for="firstName">Amount Paid</label></div>
						<div class="col-md-6"><input type="text" class="form-control" id="idAmountPaid" name="AmountPaid"  placeholder="" value="" required=""></div>
					  </div>
					</div>
					
					<input type="hidden" name="loopCounter" id="idHiddenrowCounter" value="">
					<div class="row">
					  <div class="col-md-12 mb-3">
						<div class="col-md-6"><label for="firstName">Balance Due</label></div>
						<div class="col-md-6"><input type="text" class="form-control" id="" name="BalanceDue"  placeholder="" value="0" required=""></div>
					  </div>
					</div>
				</div>
				</div>
				<button type="submit" id="submit" class="btn btn-info">Save</button>
            </form>
			
            <div id="footer"></div>
        </div>
		
	<script>
	var rowCount = 1;

	function addMoreRows() {
		
		rowCount ++;
		var a ="iQuality-'+rowCount+'";
		var b ="szCurrency-'+rowCount+'";
		var c ="amount-'+rowCount+'";
	   
		var recRow = '<tr id="rowCount'+rowCount+'"> <td >';
			recRow += '<a href="javascript:void(0);" class="btn btn-info" onclick="removeRow('+rowCount+');"><i class="fa fa-times" aria-hidden="true"></i></a></td>';
			recRow += '<td>';
			recRow += '<input type="text" class="form-control required" name="Item[]" id="Item" value="">';
			recRow += '</td>';
			recRow += '<td>';
			recRow += '<textarea id="form7" class="form-control required" name="Description[]" rows="3"></textarea>';
			recRow += '</td>';
			recRow += '<td>';
			recRow += '<input type="number" class="form-control addTotalAmount required" name="unit[]" id="unit_'+rowCount+'" value="" onkeyup="addAmount('+rowCount+')">';
			recRow += '</td>';
			recRow += '<td>';
			recRow += '<input type="number" class="form-control addTotalAmount required" name="Qulaity[]" id="Qulaity_'+rowCount+'" value="" onkeyup="addAmount('+rowCount+')">';
			recRow += '</td>';
			recRow += '<td>';
			recRow += '<span id="Price_'+rowCount+'">0</span><input type="hidden" class="form-control" name="Price[]" id="Price_value_'+rowCount+'" value="">';
			recRow += '</td>';
			recRow += ' </tr>';
		jQuery('#addedRows').append(recRow);
		$('#idHiddenrowCounter').val(rowCount);
		
	}
	function removeRow(removeNum) {
  
    if(removeNum!='1'){
        
        jQuery('#rowCount'+removeNum).remove();
        var iTotalCounter = $('#idHiddenrowCounter').val();
        iTotalCounter = iTotalCounter - 1;
        $('#idHiddenrowCounter').val(iTotalCounter);
        calculateTotal();
    }
	
	
   
}
	var AUTO_SAVE =1; 
	</script>	
		
    