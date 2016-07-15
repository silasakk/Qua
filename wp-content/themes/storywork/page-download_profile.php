<?php
$user_id = get_query_var( 'user_id');

require ABSPATH.'/vendor/autoload.php';

/*require_once(ABSPATH.'/vendor/spipu/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','fr');
$content = load_template_part('report-template/client-profile');
$html2pdf->WriteHTML($content);
$html2pdf->Output('exemple.pdf');*/

$mpdf = new mPDF('th', 'A4', '0', 'thaisan',0,0,0,0);
//get_template_part('report-template/client-profile');
$html = load_template_part('report-template/client-profile');
$mpdf->writeHTML( $html );
$mpdf->Output();
?>