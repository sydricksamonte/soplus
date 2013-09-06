
<page backtop="10mm">
   <page_header> 
     <div align="left">
    <table class="page_header">
        <tr>
            <td style="width:790px">
                 Page [[page_cu]] of [[page_nb]] &nbsp; &nbsp; &nbsp; &nbsp; SALES REPORT
            </td>
            <td > 
                <div style="text-align:center; width:120px; border-style:solid; border-width:1px;">     
                    <?php echo 'GENERATED ON <br>'.date('m/d/y'); ?>
                           <?php echo date('h:i a'); ?>
                </div>
            </td>
        </tr>
    </table>
     </div>        
       <br><br><br> 
    </page_header>
 <div align="left">
    
        <?php 
        foreach ($model as $m => $val):
         
                
                $sd = new SoDetail;
                $sd = $sd->getDetails($val['DocNo']);
                ?>
        <table class="page_header" style= "width:480px; border-style:solid; border-width:5px;">
            <tr>
                <td style="padding-right:50px; font-size: larger;">
                    <i> <?php 
                           echo  strtoupper($val['name']);?>
                    </i>
                </td>
            </tr>
        </table><table class="page_header" style= "width:480px; border-style:solid; border-width:5px;">
            <tr>
                <td style="padding-right:20px">
                   <?php if ($val['name'] == NULL)
                    {
                    echo 'QUERY RETURNED NO RESULT';
                    }
                    ?>
                </td>
                <td style="padding-right:50px">
                    <?php echo $val['Customer'];?>
                </td>
                <td style="padding-right:50px">
                    <?php echo date('m/d/y', strtotime($val['IssueDte']));?>
                </td>
                <td style="padding-right:50px">
                    <?php echo $val['DocNo'];?>
                </td>
            </tr>
        </table>
        <table class="page_header" style= "width:480px; border-style:solid; border-width:5px;">
            <tr>
                <td style="width:50px">
                   <b> </b>
                </td>
                <td style="padding-right:100px">
                   <b> Quantity</b>
                </td>
                <td style="padding-right:400px">
                    <b> Item Description</b>
                </td>
                <td style="width:70px">
                    <b> Amount</b>
                </td>
                <td style="padding-right:70px">
                    <b> Total Amount</b>
                </td>
            </tr>
        </table>    
        <?php  foreach ($sd as $s => $soD): ?>
     <table class="page_header" style= "width:480px; border-style:solid; border-width:5px;">
         <tr>
            <td style="width:60px">
               
            </td>
            <td style="width:100px">
                <?php echo $soD['Qty'];?>
            </td>
            <td style="width:500px; border-style:solid; border-width:0px; padding-right:30px">
                <?php $desc_temp = str_replace(">",".",$soD['ItemDesc']);
                echo str_replace("<",".",$desc_temp);
                ?>
                <?php echo $val['DocNo'];?>
            </td>
            <td style="width:70px">
                <?php if ($soD['UnitPrice'] > 0) { echo number_format($soD['UnitPrice'], 2, '.', ','); }?>
            </td>
            <td style="width:70px">
               <?php if ($soD['UnitPrice'] > 0) { echo number_format(($soD['UnitPrice']*$soD['Qty']), 2, '.', ','); }?>
            </td>
        </tr>
    </table>
     <?php endforeach;?>
     <table style= "width:480px;">
        <tr><td colspan="6">
            <div style="text-align:center; width:950px; border-style:solid; border-width:1px;"></div>
            </td>
        </tr>
    </table>
     <br>
     <?php endforeach; ?>
     </div>  
 </page>