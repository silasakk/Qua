<?php
$user_id = get_query_var( 'user_id');

require ABSPATH.'/vendor/autoload.php';

$mpdf = new mPDF('th', 'A4', '0', 'kanit',0,0,0,0);
$html = load_template_part('report-template/client-profile');
$mpdf->writeHTML( $html );
$mpdf->Output();
?>