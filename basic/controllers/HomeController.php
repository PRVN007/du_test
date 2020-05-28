<?php

namespace app\controllers;
use Yii;
use app\models\Invoice;
use app\models\Items;
use mPDF;
use yii\helpers\Url;


class HomeController extends \yii\web\Controller
{
    public function actionIndex()
    {

       return $this->render('index');
    }
	
	public function actionSave(){
		
		$arInput = Yii::$app->request->post();
		if(!empty($arInput['id']))
		{
			$id = base64_decode($arInput['id']); 
			$model= Invoice::findOne($id);
		}else{
			$model = new Invoice();
		}
		
		$model->szName = 'Testing';
		$model->Organiziation = $arInput['Organiziation'];
		$model->Address = $arInput['Address'];
		$model->Conatct = $arInput['Conatct'];
		$model->invoiceid = $arInput['invoiceid'];
		$model->date = $arInput['date'];
		$model->dueAmount = $arInput['dueAmount'];
		$model->subTotal = $arInput['subTotal'];
		$model->Total = $arInput['Total'];
		$model->created_at = date('Y-m-d');
		$model->updated_at = date('Y-m-d');
		$model->AmountPaid = $arInput['AmountPaid'];
		$model->BalanceDue = $arInput['BalanceDue'];
		if($model->validate()){
			$model->save();
			
			if(!empty($model->id))
			{
				
					$loopCounter = $arInput['loopCounter'];
                    $Item = $arInput['Item'];
                    $Description = $arInput['Description'];
                    $unit = $arInput['unit'];
                    $Qulaity = $arInput['Qulaity'];
                    $Price = $arInput['Price'];
                    
                    $i=0;
					
                    for($i=0;  $i<$loopCounter; $i++)
                    {
                        
                        $item = $Item[$i]; 
                        $Description = $Description[$i]; 
                        $unit = $unit[$i]; 
                        $Qulaity = $Qulaity[$i]; 
                        $Price = $Price[$i]; 
                        //$id = 0;
						
                        $invoiceItem = new Items(); 
                         
                       $invoiceItem->idInvoice = $model->id;
                       $invoiceItem->Item = $item;
                       $invoiceItem->Description = $Description;
                       $invoiceItem->unit = $unit;
                       $invoiceItem->Qulaity = $Qulaity;
                       $invoiceItem->Price = $Price;
						$invoiceItem->created_at = date('Y-m-d');
						$invoiceItem->updated_at = date('Y-m-d');
                       $invoiceItem->save();
					   echo 'hello'; die;
                    }
			}
			Yii::$app->session->setFlash('success', "Data has been saved successfully!. ");
			return $this->redirect('list');
		} else {
			
			$errors = $model->errors;
			return $this->render('index', array('errore' => $errors));
		}
		
	}
	
	public function actionEdit($id)
	{
		$id = base64_decode($id); 
		$data = Invoice::findOne($id);
		return $this->render('index', array('data' => $data));		
	}
	
	public function actionList()
	{
		$arDetails = Invoice::find()->all();
		return $this->render('list', array('arDetails' => $arDetails));
	}
	
	
	public function actionEmail()
	{
		
		$arInput = Yii::$app->request->post();
		if(!empty($arInput['id']) && !empty($arInput['email']))
		{
			
			$this->generatePDF($arInput['id']);
			$url =  Url::to(['home/edit', 'id' => base64_encode($arInput['id'])], true); 
			$message ='';
			$message .= 'Thank you! Your submission to';
			$message .= '<h1>You data has been saved<h1>';
			$message .= 'has been saved.';
			$message .= 'You can resume the form at any time by clicking the link below:<br/>'.$url;
			Yii::$app->mailer->compose()
				->setFrom('from@domain.com')
				->setTo($arInput['email'])
				->setSubject('Test example')
				->setHtmlBody($message)
				//->$message->attach('/path/to/source/file.pdf');
				->send();
		}
		else
		{
			
		}
	}
	
	function GeneratePDF($id)
	{
		//$data = Invoice::leftJoin('states','invoice.id=items.idInvoice')->where(['invoice.id'=>$id]);
		//require_once __DIR__ . '/vendor/autoload.php';
		// $mpdf = new mPDF();
		//$mpdf->WriteHTML('This is testing');
		//return $mpdf->Output('./tests/pdf_file_name.pdf', 'F');
		
	}
	
	
}
