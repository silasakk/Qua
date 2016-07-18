<?php
$user_id = get_query_var('user_id');

require ABSPATH . '/vendor/autoload.php';


$mpdf = new mPDF('th', '', '0', 'thaisan', 0, 0, 0, 0);

if (get_post_type($user_id) == "customer")
    $html = load_template_part('report-template/client-profile');
if (get_post_type($user_id) == "supplier")
    $html = load_template_part('report-template/supplier-profile');
if (get_post_type($user_id) == "cast")
    $html = load_template_part('report-template/cast-profile');
$mpdf->writeHTML($html);
$mpdf->Output(get_post_type($user_id) . '-' . $user_id . '.pdf', 'I');
?>