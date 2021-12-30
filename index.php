<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include ('tcpdf/tcpdf_min/tcpdf.php');
    $obj_pdf = new TCPDF('P',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("PDF FLy Paradise");
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
    $obj_pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
    $obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    $obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 061', PDF_HEADER_STRING);
    $obj_pdf->AddPage();





    $content = file_get_contents('html/first_page.html');


        


    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->AddPage();
    $content = file_get_contents('html/second_page.html');
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->lastPage();

    $obj_pdf->AddPage();
    $content = file_get_contents('html/third_page.html');
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->lastPage();

    $obj_pdf->AddPage();
    $content = file_get_contents('html/fourth_page.html');
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->lastPage();

    $obj_pdf->AddPage();
    $content = file_get_contents('html/fifth_page.html');
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->lastPage();

    $obj_pdf->AddPage();
    $content = file_get_contents('html/sixth_page.html');
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->lastPage();

    $obj_pdf->AddPage();
    $content = file_get_contents('html/seventh_page.html');
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->lastPage();

    $obj_pdf->AddPage();
    $content = file_get_contents('html/eight_page.html');
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->lastPage();

    $obj_pdf->AddPage();
    $content = file_get_contents('html/ninth_page.html');
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->lastPage();

    $obj_pdf->AddPage();
    $content = file_get_contents('html/last_page.html');
    $obj_pdf->writeHTML($content, true, false, true, false, '');
    $obj_pdf->lastPage();







    $obj_pdf->Output('example_061.pdf', 'I');

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

