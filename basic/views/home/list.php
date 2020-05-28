

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
	<div class="alert alert-success alert-dismissable">
		 <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		 <?= Yii::$app->session->getFlash('success') ?>
	</div>
<?php endif; ?>

<div >
<a href="<?php echo Url::to(['home/index'])?>" class="btn btn-info pull-right">Add</a>
</div>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Organiziation Name</th>
      <th scope="col">Conatct Number</th>
      <th scope="col">Invoice</th>
      <th scope="col">Amount Paid</th>
	  <th scope="col">Action </th>
    </tr>
  </thead>
  <tbody>
    
	
		<?php if(!empty($arDetails)) {?>
			<?php foreach($arDetails as $row) { ?>
			<tr>
				<?php $id = base64_encode($row->id); ?>
				<td ><a href="<?php echo Url::to(['home/edit/', 'id'=>$id ])?>"><?php echo $row->Organiziation ?></a></th>
				<td><a href="<?php echo Url::to(['home/edit/', 'id'=>$id ])?>"><?php  echo $row->Conatct ?></a></td>
				<td><a href="<?php echo Url::to(['home/edit/', 'id'=>$id ])?>"><?php  echo $row->invoiceid ?></a></td>
				<td><a href="<?php echo Url::to(['home/edit/', 'id'=>$id ])?>"><?php echo $row->AmountPaid  ?></a></td>
				<td>
					<a href="javascript:void(0)" onclick="openModel(<?php echo $row->invoiceid?>, <?php echo $row->id?>)">Send Email</a>
				</td>
			</tr>
			<?php } ?>
		<?php } ?>
	
     
    
  </tbody>
</table>


<div id="email" class="modal fade " role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-sm">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Invoice id <span id="invoiceId"></span></h4>
	  </div>
	  <div class="modal-body">
		<form id="emailForm" class="appnitro top_label" method="post" data-highlightcolor="#FFF7C0" action="<?php echo Url::to(['home/email'])?>">
			<input type="text" class="form-control" placeholder="Enter email" name="email" >
			<input type="hidden" name="id" id="idInvoice" value="">
			<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Send with PDF</label>
			</div>
			<div >
				<button type="submit" id="button" class="btn btn-info">Send</button>
			</div>
		  </form>
	  </div>
	 
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" onclick="cancel()">Close</button>
	  </div>
	</div>
</div>
</div>

<script>
function openModel(invoiceid, id)
{
	$('#invoiceId').text(invoiceid);
	$('#idInvoice').val(id);
	$('#email').modal('show');
	
}

function cancel()
{
	location.reload();
}
</script>