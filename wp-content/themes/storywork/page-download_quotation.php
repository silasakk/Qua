<?php
$post_id = get_query_var('post_id');

require ABSPATH . '/vendor/autoload.php';


$mpdf = new mPDF('th', '', '0', 'thaisan', 0, 0, 0, 0);
$html = load_template_part('report-template/quotation');
$mpdf->writeHTML($html);
$mpdf->Output(get_post_type($post_id) . '-' . $post_id . '.pdf', 'I');
?>