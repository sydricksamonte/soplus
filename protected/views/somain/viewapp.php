<?php $DocNo = $model->DocNo;
      $DocNoString =  substr($DocNo, 0, 2) . '-' . substr($DocNo, 2, 4)  . '-' . substr($DocNo, 6); 
      
      $mType = new Sotype;
      if (substr($model->DocNo, 0, 2)  != 'FA')
      {
        $Stype = $mType->getDetails($model->Classification);  
      }
      else
      {
        $Stype = 'FOR APPROVAL FORM'; 
      }
?>
<page backtop="10mm">
   <page_header> 
     <div align="center">
    <table class="page_header" style= "width:480px; border-style:solid; border-width:5px;">
        <tr>
            <td style="padding-right:40px">
               <?php echo $DocNoString;?>
            </td>
            <td style="padding-right:630px">
                 Page [[page_cu]] of [[page_nb]]
            </td>
            <td>
                <b></b>
                <br/><?php echo date('m/d/y'); ?>&nbsp;&nbsp;&nbsp; <?php echo date('h:i a'); ?>
            </td>

        </tr>
    </table>
    
     </div>        
       <br><br><br> 
    </page_header>
    
    <div align="left">
    <table style= "width:680px; border-style:solid; border-width:1px;" >
        <tr>
            <td align="left" style="width:620px;">
              <div style="width:auto; border-style:solid; border-width:1px; font-size:32px;"> <?php echo $Stype; ?></div>
            </td>
            <td>
                 <div style="font-size:18px;">&nbsp;&nbsp;&nbsp; <?php echo $DocNoString;?> </div>
                <br>&nbsp;&nbsp;&nbsp;Unison&nbsp;&nbsp;&nbsp;<?php if ($model->FANo != NULL){echo '('.$model->FANo.')';}?>
            </td>
            
        </tr>
    </table>
    </div>
    <?php if ($model->DeliverTo != NULL){?>
    <div align="left">
    <table style= "width:480px; border-style:solid; border-width:1px;" >
        <tr>
            <td align="left" style="width:400px;">
              <div style="width:auto;"><i><b> Deliver To:&nbsp;<?php echo $model->DeliverTo; ?></b></i></div>
            </td>
        </tr>
    </table>
    </div>
    <?php }else {}?>
    <br>
    <br>
     <div align="left">
    <table style="width:480px; border-style:solid; border-width:0px;">
        <tr>
            <td style="padding-right:42px">
                Customer
            </td>
            <td style="width:350px">
                :  <?php echo $model->Customer;?>
            </td>
            <td style="padding-right:10px">
                Sales Exec
            </td>
            <td style="width:119px">
                : <?php echo $model->AcctOf1; if($model->AcctOf2 != NULL){echo ' / '.$model->AcctOf2; }?>
            </td>
            <td style="padding-right:16px">
                Type
            </td>
            <td style="width:80px">
                : <?php echo $model->Classification;?>
            </td>

        </tr>
    </table>
    <table style="width:480px; border-style:solid; border-width:0px;">
        <tr><td colspan="6"><br></td></tr>
       <tr>
            <td style="padding-right:9px">
                Contact Person
            </td>
            <td style="width:350px">
                : <?php echo $model->ContactPerson;?>
            </td>
            <td style="padding-right:4px">
                Date Placed
            </td>
            <td style="width:117px">
                : <?php $date = $model->DatePlaced; echo date('M d, Y',strtotime($date));?>
            </td>
            <td style="padding-right:10px">
                Terms
            </td>
            <td style="width:80px">
                : <?php echo $model->Terms;?>
            </td>

        </tr>
    </table>
    <table style="width:480px; border-style:solid; border-width:0px;">
      <tr><td colspan="6"><br></td></tr>
         <tr>
            <td style="padding-right:45px">
                Tel No(s)
            </td>
            <td style="width:350px">
                : <?php echo $model->TelNo;?>
            </td>
            <td style="padding-right:4px">
                Exp Date of Del
            </td>
            <td style="width:100px">
                : <?php if (DateTime::createFromFormat('m/d/y', $model->DeliverDte) !== FALSE) {
                    $date2 = $model->DeliverDte; 
                    if ($date2 != NULL){ echo date('M d, Y',strtotime($date2));}
                    }
                    else
                    {
                        echo $model->DeliverDte;
                    }?>
            </td>
            <td style="padding-right:10px">
                Mode
            </td>
            <td style="width:90px">
                : <?php echo $model->PayMode;?>
            </td>
        </tr>

        <tr><td colspan="6"><br></td></tr>
    </table>
    <table style="width:580px; border-style:solid; border-width:0px;">
         <tr>
            <td style="padding-right:50px">
                Address  
            </td>
            <td style="width:480px">
            <?php echo $model->Address;?>
            </td>
        </tr>
    </table>
    </div>
    <br>
    <table style= "width:900px;">
        <tr><td colspan="6">
            <div style="text-align:center; width:950px; border-style:solid; border-width:1px;"></div>
            </td>
        </tr>
    </table>
    <table style="width:950px; border-style:solid; border-width:0px;">
        <tr>
            <td style="width:60px">
                <b>QTY</b>
            </td>
            <td style="width:60px">
                <b>Unit</b>
            </td>
            <td style="width:510px">
                <b>Description</b>
            </td>
            <td style="width:90px">
                <b>Unit Price</b>
            </td>
            <td style="width:90px">
                <b>Total</b>
            </td>
            <td style="width:80px">
                <b>Com</b>
            </td>
        </tr>
    </table>
    <table style= "width:480px;">
        <tr><td colspan="6">
            <div style="text-align:center; width:950px; border-style:solid; border-width:1px;"></div>
            </td>
        </tr>
    </table>
    <table style="width:480px; border-style:solid; border-width:0px;">
       <?php  $total = 0; $soDe = $this->getSoDetail($model->DocNo);
            foreach($soDe as $s): ?>
        <tr>
            <td style="width:60px">
               <?php echo $s['Qty']; ?>
            </td>
            <td style="width:60px">
                <?php echo $s['UnitMeas']; ?>
            </td>
            <td style="width:510px">
                <div> <?php  echo nl2br($s['ItemDesc']); ?> </div>
                <div><?php  if ($s['War_Parts'] != NULL and $s['War_Onsite'] != NULL and $s['War_Labor'] != NULL){
                    echo 'WARRANTY P-'.$s['War_Parts'].' L-'.$s['War_Labor'].' O-'.$s['War_Onsite'];
                    }?>
                </div>
            </td>
            <td style="width:90px">
                <?php if ($s['UnitPrice']!=null){echo number_format($s['UnitPrice'], 2, '.', ','); }?>
            </td>
            <td style="width:90px">
                <?php if ($s['UnitPrice']!=null){$totalP =  $s['Qty'] * $s['UnitPrice']; $total = $total + $totalP; echo number_format($totalP, 2, '.', ',');} ?>
            </td>
            <td style="width:80px">
                <?php echo $s['FullComm']; ?>
            </td>
        </tr> 
       
    </table>
   <table style= "width:480px;">
        <tr><td colspan="6">
            <div  style="text-align:center; width:950px; border-style:solid; border-width:1px;"></div>
            </td>
        </tr>
        <?php     endforeach;?>
    </table>
    <br>
    <table style="width:480px; border-style:solid; border-width:0px;">
        <tr>
            <td style="width:460px">
                 <font style="font-size:16px"> </font>
            </td>
            <td style="width:360px">
               <font style="font-size:16px">  <?php echo 'Grand Total:&nbsp;&nbsp;&nbsp;'. number_format($total, 2, '.', ','); ?> </font>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <br>

    <table style="width:880px; border-style:solid; border-width:0px;">
        <tr>
            <td style="width:650px">
                <font style="font-size:15px"> <i><?php if($model->Approved == 'YES'){ 
                    echo 'Note: Original document is signed and approved by '.$model->ApprovedBy.' on '.date('M d, Y',strtotime($model->ApprovedDateTime)).' at '.date('h:i a',strtotime($model->ApprovedDateTime)); } ?></i>
                </font>
            </td>
            <td style="width:300px">
                <i><?php if($model->Approved == 'YES'){ 
                    echo 'Originally faxed on '.date('M d, Y h:i a',strtotime($model->IssueDte)); } ?>
                </i>
     
            </td>
        </tr>
    </table>
 </page>