

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr >
    <td height="50" colspan="3" align="center" bgcolor="#000000" style="color:#fff; letter-spacing:7px; font-family:Arial, Helvetica, sans-serif;">INVOICE</td>
  </tr>
  <tr>
    <td width="347">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif;">&lt;organization name&gt;</td>
    <td colspan="2" rowspan="3"><table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif;">Invoice #</td>
        <td><?php echo $data['']?></td>
        </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif;">Date</td>
        <td><?php echo $data['']?></td>
        </tr>
      <tr>
        <td style="font-family:Arial, Helvetica, sans-serif;">Amount Due</td>
        <td><?php echo $data['']?></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif;">&lt;Address&gt;</td>
  </tr>
  <tr>
    <td valign="top" style="font-family:Arial, Helvetica, sans-serif;">&lt;Contact Number&gt;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#E5E5E5" style="font-family:Arial, Helvetica, sans-serif;">Item</td>
        <td bgcolor="#E5E5E5" style="font-family:Arial, Helvetica, sans-serif;">Description</td>
        <td bgcolor="#E5E5E5" style="font-family:Arial, Helvetica, sans-serif;">Unit Cost</td>
        <td bgcolor="#E5E5E5" style="font-family:Arial, Helvetica, sans-serif;">Quality</td>
        <td bgcolor="#E5E5E5" style="font-family:Arial, Helvetica, sans-serif;">Price</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>
