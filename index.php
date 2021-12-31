<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include ('tcpdf/tcpdf_min/tcpdf.php');
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, "px", PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetCreator("Fly Paradise");
    $preapp = "";
    $pdf->SetAuthor('Mumin Farooq');
    $pdf->SetTitle('Fly Paradise Quotation Brochure ');
    $pdf->SetSubject('Application Form');
    $pdf->SetMargins(10, 10, 10);
    $pdf->SetPrintHeader(false);
    $pdf->SetPrintFooter(false);
    $pdf->SetFooterMargin(30);
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    $pdf->setImageScale(1);
    $pdf->setFontSubsetting(true);

    $pdf->AddPage();

    $html = '<style type="text/css">
                    .table{width: 100% !important;border-collapse:collapse; }.logo-section{width: 50%;}.logo{width: 120px;}.heading{width: 80%;}.title{font-size: 18px;}.text-secondary{color: #aaa;}.text-danger{color: #044643;}.bordered th,.bordered td{border: .7em solid #044643;}.text-small{font-size: 5px;color: #121212;}.userImage{border: .2em solid #202020;width: 215px; padding: 2px;}.wrapper{display: grid;   background-color: #fff;color:#444; }.box{background-color: #AAC9C4;color:#121212;width:30%;border-radius:5px;height:70px;font-size:130%;}
                
                </style>';
    $html .= '<table class="table" cellpadding="5">
                    <tr>
                        <th class="logo-section"><img src="html/11.png " class="logo" /></th>
                        <td class="heading title">
                             <small class="text-secondary">| <strong>It feels good to be lost in the right direction</strong></small>
                        </td>
                    </tr>
                </table>';
    $html.='<table class="table" cellpadding="5">
                    <tr>
                        <th colspan="4">&nbsp;</th>
                        <td style="border-bottom: 1px solid black" colspan="2"><strong>Trip Id : </strong> <span class="text-danger"> <b> </b></span></td>
                    </tr>
                    <tr class="">
                        <th style="" colspan="2">Date of Journey  :
						<small style="font-size: 10px"><strong style="color:#000;">22-09-2019</strong></small></th>
                        
                         <th style="border-left: 1px solid #ccc" colspan="2">Tour Company  :
						<small style="font-size: 10px"><strong style="color:#000;">Fly Paradise</strong></small></th>
                     
                            
                    </tr>
                    <tr class="">
                         <th style="" colspan="2">Exceutive Person  :
						<small style="font-size: 10px"><strong style="color:#000;">Fly Paradise</strong></small></th>
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">Company Location  :
						<small style="font-size: 10px"><strong style="color:#000;">  Kashmir</strong></small></th>
                          <th  style="border-left: 1px solid #ccc" colspan="2">Mobile  :
						<small style="font-size: 10px"><strong style="color:#000;">  9906543728</strong></small></th>
                    </tr>
                    <tr class="">
                         <th style="" colspan="2">Total Reviews  :
						<small style="font-size: 10px"><strong style="color:#000;">357</strong></small></th>
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">Total Trips  :
						<small style="font-size: 10px"><strong style="color:#000;">  560 </strong></small></th>
                    </tr>
                   
                </table>';
    $html  .= '<div  class="wrapper">
  <div style="" class="box">
        
          <p style="font-size: 12px;" ><p>Dear <strong>Jhanvi</strong></p><p>Greetings from Travelsetu.com!Fly Paradise Travels Private Limited,</p> designed below holiday package for your requested trip on Travelsetu.com, if you need any modifications in travel package you can contact Fly Paradise Travels Private Limited on 9906444456 keep your Trip ID: 1979231684 as a reference while contacting with executive</p>
  
</div>
<div style="height:.1em;"></div>
<table class="table" cellpadding="4" cellspacing="0">
     <tr class="">
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">Total Booking Amount  :
						<small style="font-size: 10px"><strong style="color:#000;"> Rs 12560 </strong></small></th>
                         <th style="" colspan="2">Advance Amount to pay for trip confirmation :
						<small style="font-size: 10px"><strong style="color:#000;">6022</strong></small></th>
                        
                    </tr>
</table>
<div style="height:.1em;"></div>

 
</div>';
    $html.='<div style="height:.1em;"></div>';
    $html.='<table class="table " cellspacing="0" cellpadding="4">
                <tr>
                    <th colspan="4"><strong style="color:indianred">Summary</strong> 
					<small class="text-small">
					</small>
</th>
                </tr>
               <tr class="">
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">Total Duration  :
						<small style="font-size: 10px"><strong style="color:#000;"> 5 Nights & 6 Days </strong></small></th>
                         <th style="border-left: 1px solid #ccc" colspan="2">Adults :
						<small style="font-size: 10px"><strong style="color:#000;">2</strong></small></th>
                        
               </tr>
                <tr class="">
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">Total Start Date  :
						<small style="font-size: 10px"><strong style="color:#000;"> 19/11/2021 </strong></small></th>
                         <th style="border-left: 1px solid #ccc" colspan="2">kids :
						<small style="font-size: 10px"><strong style="color:#000;">0</strong></small></th>
                        
                    </tr>
               <tr class="">
                        
                         <th  style="border-left: 1px solid #ccc" colspan="2">Total Start City  :
						<small style="font-size: 10px"><strong style="color:#000;"> Srinagar </strong></small></th>
                           
                    </tr>
              ';


    $html.='</table>';
    $html.='<div style="height:.01em;"></div>';
    $html.='<table class="table " cellspacing="0" cellpadding="4">
                    <tr>
                        <th style="color:indianred" colspan="6"> <strong>Accomodation</strong></th>
                    </tr>
                    <tr>
                        <th>Rooms  : 1</th>
                        <td style="border-left: 1px solid #ccc" colspan="5">Extra Bed : 0</td>
                    </tr>
                    <div style="height:.1em;"></div>
                    <tr>
                        <th style="border-bottom: 2px solid #ccc">Destinations</th>
                         <td>&nbsp;</td>
                        <th style="border-bottom: 2px solid #ccc">HotelHouseboat</th>
                        <td>&nbsp;</td>
                        <td style="border-bottom: 2px solid #ccc">Type</td>
                    </tr>
                    <tr>
                        <td>Srinagar 2 Nights</td>
                         <td>&nbsp;</td>
                        <th >Hotel Royal Arabia</th>
                        <td>&nbsp;</td>
                        <td >Super Deluxe Room</td>
                    </tr>
                     <tr>
                        <td>Srinagar 2 Nights</td>
                         <td>&nbsp;</td>
                        <th >Hotel Royal Arabia</th>
                        <td>&nbsp;</td>
                        <td >Super Deluxe Room</td>
                    </tr>
                      <tr>
                        <td>Srinagar 2 Nights</td>
                         <td>&nbsp;</td>
                        <th >Hotel Royal Arabia</th>
                        <td>&nbsp;</td>
                        <td >Super Deluxe Room</td>
                    </tr>
                 
            </table>';
    $html.='<div style="height:.01em;"></div>';
    $html.='<div style="height:.01em;"></div>';
    $html.='<div style="border: .1em solid indianred">';
    $html.='<table  class="" cellspacing="0" cellpadding="4">
                    <tr class="">
                        <th style="color: indianred" colspan="2"><strong>Vehicle Type</strong> </th>
                    </tr>
                   <tr>
                            <td>Etios/ Similar Non A/C</td>
                    </tr>
                </table>
                </div>';

    $html.='<div style="height:.01em;"></div>';
    $html .= '<div style="width= 100%">
                <div  style="background-color: white;width: 50%;border:1px solid indianred; padding=5px;text-align: center;" class="box">
                <strong style="color: indianred">Inclusions</strong>
        
                <ul style="font-size: 10px;width= 50%">Accomodation</ul>
                 <ul style="font-size: 10px;">Candle Light Dinner</ul>
                   <ul style="font-size: 10px;">Meals</ul>
                    <ul style="font-size: 10px;">Honeymoon</ul>
                    <ul style="font-size: 10px;">Pick up and drop</ul>
                      <ul style="font-size: 10px;">Welcome Drink on Arrival</ul>
                      <div>
                        <strong style="color: indianred">Exclusions</strong>
        
                <ul style="font-size: 10px;text-align: right">Accomodation</ul>
                 <ul style="font-size: 10px;">Candle Light Dinner</ul>
                   <ul style="font-size: 10px;">Meals</ul>
                    <ul style="font-size: 10px;">Honeymoon</ul>
                    <ul style="font-size: 10px;">Pick up and drop</ul>
                      <ul style="font-size: 10px;">Welcome Drink on Arrival</ul>
                </div>
                    
                

            </div>
             
              
            </div>';


    $html.='<table class="table" cellspacing="0" cellpadding="4">
                <tr>
                    <td width="80%">
                    
                       <strong style="color: indianred">Itenary</strong>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <small>5 Nights & 6 Days | Destinations : Srinagar (3 nights) Pahalgam (1 night ) Srinagar Houseboat (1 night </small>
                        <div style="border: 1px solid indianred;background-color: white" class="box">
                            <h5>Day 1: ARRIVAL - SRINAGAR LOCAL SIGHTSEEING     - 19th, Nov 2021</h5>
                            <p style="font-size: 11px">
                            Night stay: Srinagar After breakfast, leave for full day excursion trip to Sonamarg. Situated at an altitude of 9000 Ft. Sonamarg – 84 Kms is also called as “The meadow of gold” has, as its backdrop, snowy mountains against a cerulean sky. The Sindh River that meanders through the valley abounds with trout and mahaseer. Ponies can be hired for the trip up to Thajiwas glacier, which is a major local attraction during the summer. Return to Srinagar for & overnight stay in Hotel , Hotel Royal Arabia OR Hotel Shefaf OR (Super-Deluxe) - Day Inclusions:  Breakfast  Dinner
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="border: 1px solid indianred;background-color: white" class="box">
                            <h5>Day 1: ARRIVAL - SRINAGAR LOCAL SIGHTSEEING     - 19th, Nov 2021</h5>
                            <p style="font-size: 11px">
                            Night stay: Srinagar After breakfast, leave for full day excursion trip to Sonamarg. Situated at an altitude of 9000 Ft. Sonamarg – 84 Kms is also called as “The meadow of gold” has, as its backdrop, snowy mountains against a cerulean sky. The Sindh River that meanders through the valley abounds with trout and mahaseer. Ponies can be hired for the trip up to Thajiwas glacier, which is a major local attraction during the summer. Return to Srinagar for & overnight stay in Hotel , Hotel Royal Arabia OR Hotel Shefaf OR (Super-Deluxe) - Day Inclusions:  Breakfast  Dinner
                            </p>
                        </div>
                    </td>
                </tr>
            </table>';
    $pdf->writeHTML($html);
    $pdf->Output('application_form.pdf');


}
?>

<html>
<head>

</head>
<body>
<form method="POST">
    <button type="submit" name="button">Generate</button>
</form>
</body>
</html>

