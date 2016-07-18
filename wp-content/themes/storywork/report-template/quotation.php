
<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,700' rel='stylesheet' type='text/css'>
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js" ?>" type="text/javascript"></script>

</head>
<body>
<style>

    body{
        padding: 0;
        margin: 0;
        font-family: 'thaisan';
        font-size: 15px;
    }
    *{
        box-sizing: border-box;
    }
    .sub-top-head{
        background: #ccc;
        text-align: center;
        padding: 10px;
        line-height: 100%;
        margin-top: 0;
        margin-bottom: 24px;


    }
    .text-right{
        text-align: right;
    }
    .text-center{
        text-align: center;
    }
    .container{
        width: 92%;
        margin: 0 auto;


    }
    .box{
        width: 100%;
        float:left;
        padding: 10px 10px 20px 10px;
        border:2px solid #000;
    }
    .bar-input{
        border-bottom: 1px solid #666;
    }
    .label-en{
        font-size: 12px;
    }
    table,.table{
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }
    .table-quo .h  td{

        border-left: 1px solid #000;
        border-right: 1px solid #000;
    }
    .table-quo .h-item  td{

        border-left: 1px solid #000;
        border-right: 1px solid #000;
    }
    .table-quo .b  td{
        border: 1px solid #000;

    }
    .noborder td{
        border:none;
    }
    .intext{
        padding: 5px 10px;
        float: left;
        display: inline-block;
        border-bottom: 1px solid #333;

    }
    .p-r-10{
        padding-right: 10px;
    }
    .p-l-10{
        padding-left: 10px;
    }
    td{
        box-sizing: border-box;
    }
    th{
        border:1px solid #000;
        box-sizing: border-box;
        border-top:none;

    }
    .pull-left{
        float: left;
    }
    p{
        margin: 0;
        padding: 0;
    }
    .head-black{
        color: #fff;
        background: #000;
        text-align: center;
        padding: 10px 0;
        margin: 0;
        width:100%;
        float: left;
    }
    .header{
        background: #000;
        padding: 5px 0;
        margin: 0;
    }
</style>
<div class="header">
    <table>
        <tr>
            <td width="50%"  style="color: #ffffff;text-align: center" >
                <h1 style="font-size: 50px;padding: 0;margin: 0" >STORYWORK</h1>
            </td>
            <td width="50%" style="color: #fff">
                <p><strong>บริษัท สตอรี่เวิร์ค จำกัด (สำนักงานใหญ่)</strong></p>
                <p>20/7 ซอยประดิพัทธ์ 3 ถนนประดิพัทธ์ สามเสนใน พญาไท กรุงเทพฯ 10400</p>
                <p>โทร. 0835548487 แฟกซ์. 026185743 อีเมล์ info@storyworkbkk.com</p>
                <p>ทะเบียนนิติบุคคล 0105559060720</p>
            </td>
        </tr>
    </table>
</div>
<h1 class="sub-top-head">QUOTATION / ใบเสนอราคา</h1>
<div class="container">
    <div>
        <div style="width: 40%;float: left">
            <table class="table">
                <tr>
                    <td width="50" class="text-right p-r-10 p-l-10">
                        <div class="label-th">นามลูกค้า</div>
                        <div class="label-en">Customer</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php the_field('customer',$post_id) ?>
                    </td>
                </tr>
            </table>
        </div>
        <div style="width: 30%;float: left">
            <table class="table">
                <tr>
                    <td width="80" class="text-right p-r-10 p-l-10">
                        <div class="label-th">ชื่อผู้ติดต่อ</div>
                        <div class="label-en">Contact Person</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php the_field('contact_person',$post_id) ?>
                    </td>
                </tr>
            </table>
        </div>
        <div style="width: 30%;float: left">
            <table class="table">
                <tr>
                    <td width="80" class="text-right p-r-10 p-l-10">
                        <div class="label-th">วันที่เสนอโครงการ</div>
                        <div class="label-en">Date Proposed</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php the_field('date_proposed',$post_id) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div>
        <div style="width: 70%;float: left">
            <table class="table">
                <tr>
                    <td width="50" class="text-right p-r-10 p-l-10">
                        <div class="label-th">ที่อยู่</div>
                        <div class="label-en">Address</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php the_field('address',$post_id) ?>
                    </td>
                </tr>
            </table>
        </div>
        <div style="width: 30%;float: left">
            <table class="table">
                <tr>
                    <td width="80" class="text-right p-r-10 p-l-10">
                        <div class="label-th">เลขที่โครงการ</div>
                        <div class="label-en">Project Number</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php the_field('project_number',$post_id) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div>
        <div style="width: 25%;float: left">
            <table class="table">
                <tr>
                    <td width="50" class="text-right p-r-10 p-l-10">
                        <div class="label-th">โทรศัพท์</div>
                        <div class="label-en">Telephone</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php the_field('telephone',$post_id) ?>
                    </td>
                </tr>
            </table>
        </div>
        <div style="width: 25%;float: left">
            <table class="table">
                <tr>
                    <td width="50" class="text-right p-r-10 p-l-10">
                        <div class="label-th">โทรสาร</div>
                        <div class="label-en">Fax</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php the_field('fax',$post_id) ?>
                    </td>
                </tr>
            </table>
        </div>
        <div style="width: 25%;float: left">
            <table class="table">
                <tr>
                    <td width="50" class="text-right p-r-10 p-l-10">
                        <div class="label-th">มือถือ</div>
                        <div class="label-en">Mobile</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php the_field('mobile',$post_id) ?>
                    </td>
                </tr>
            </table>
        </div>
        <div style="width: 25%;float: left">
            <table class="table">
                <tr>
                    <td width="80" class="text-right p-r-10 p-l-10">
                        <div class="label-th">อีเมล์</div>
                        <div class="label-en">Email</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php the_field('email',$post_id) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div style="border: 1px solid #000;padding: 5px 20px 10px;margin-top: 20px;">
        <div>
            <div style="width: 20%;float: left;"><h3>รายละเอียดโครงการ<br>Project Information</h3></div>
            <div style="width: 80%;float: left;">
                <div>
                    <div style="width: 33%;float: left">
                        <table class="table">
                            <tr>
                                <td width="50" class="text-right p-r-10 p-l-10">
                                    <div class="label-th">ประเภท</div>
                                    <div class="label-en">Type</div>
                                </td>
                                <td class="bar-input text-center">
                                    <?php the_field('type',$post_id) ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="width: 33%;float: left">
                        <table class="table">
                            <tr>
                                <td width="50" class="text-right p-r-10 p-l-10">
                                    <div class="label-th">สินค้า</div>
                                    <div class="label-en">Product</div>
                                </td>
                                <td class="bar-input text-center">
                                    <?php the_field('product',$post_id) ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="width: 33%;float: left">
                        <table class="table">
                            <tr>
                                <td width="50" class="text-right p-r-10 p-l-10">
                                    <div class="label-th">สื่อ</div>
                                    <div class="label-en">Media</div>
                                </td>
                                <td class="bar-input text-center">
                                    <?php the_field('media',$post_id) ?>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div>
                    <div style="width: 100%;float: left">
                        <table class="table">
                            <tr>
                                <td width="50" class="text-right p-r-10 p-l-10">
                                    <div class="label-th">สรุปโครงการโยย่อ</div>
                                    <div class="label-en">Project summary</div>
                                </td>
                                <td class="bar-input text-center">
                                    <?php the_field('project_summary',$post_id) ?>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <table class="table table-quo">
        <tr>
            <th width="8%">ลำดับ<br>Number.</th>
            <th width="50%">รายละเอียดโครงงการ<br>Item Description</th>
            <th>จำนวนชิ้นงาน<br>Quatity</th>
            <th>ราคาต่อหน่วย<br>Unit Price</th>
             <th>จำนวนเงินบาท<br>Amount in Bath</th>
        </tr>
        <?php
        // check if the repeater field has rows of data
        if( have_rows('project_item',$post_id) ):

            // loop through the rows of data
            while ( have_rows('project_item',$post_id) ) : the_row();

                ?>
                <tr class="h-item">
                    <td style="text-align: center;height: 30px"><?php the_sub_field('no'); ?></td>
                    <td style="text-align: center;"><?php the_sub_field('item_description'); ?></td>
                    <td style="text-align: center;"><?php the_sub_field('quantity'); ?></td>
                    <td  style="text-align: center;"><?php the_sub_field('unit_price'); ?></td>
                    <td  style="text-align: center;"><?php the_sub_field('amount_in_bath'); ?></td>
                </tr>
                <?php


            endwhile;

        else :

            // no rows found

        endif;
        ?>
        <?php
        for ($i = 0 ; $i <= (10 - have_rows('project_item',$post_id)) ; $i++):

            ?>
            <tr class="h">
                <td style="height: 30px;"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php


        endfor;
        ?>

        <tr class="b">
            <td colspan="2" rowspan="3" style="padding: 10px;font-size: 12px">
                หมายเหตุ / Remarks :<br>
                1. ราคานี้ไม่รวมการรีทัชรูปภาพแบบซับซ้อน / การวาดภาพประกอบแบบซับซ้อน<br>
                2. ราคานี้รวมการแก้ไขการตัดต่อวีดีโอจำนวน <span class="intext"><?php the_field('fix_issue',$post_id) ?></span> ครั้ง การแก้ไขเพิ่มเติมมีค่าใช้จ่าย <span class="intext"><?php echo number_format(get_field('fix_issue_price',$post_id)) ?></span> ต่อครั้ง<br>
                3. เงื่อนไขการชำระ<br>
                <table class="noborder">
                    <tr>
                        <td width="10%"></td>
                        <td width="90%" style="font-size: 12px">3.1 ชำระเมื่อได้รับการอนุมัติเริ่มต้นโครงการและได้รับเงินมัดจำ <span class="intext"><?php the_field('1st_installment__percent',$post_id) ?></span>% (<span class="intext"><?php echo number_format(get_field('1st_installment_value',$post_id)) ?></span> บาท )</td>
                    </tr>
                    <tr>
                        <td width="10%"></td>
                        <td width="90%" style="font-size: 12px">3.1 ชำระเมื่อได้รับการอนุมัติเริ่มต้นโครงการและได้รับเงินมัดจำ <span class="intext"><?php the_field('2nd_installment_percent',$post_id) ?></span>% (<span class="intext"><?php echo number_format(get_field('2nd_installment_value',$post_id)) ?></span> บาท )</td>
                    </tr>
                    <tr>
                        <td width="10%"></td>
                        <td width="90%" style="font-size: 12px">3.1 ชำระเมื่อได้รับการอนุมัติเริ่มต้นโครงการและได้รับเงินมัดจำ <span class="intext"><?php the_field('3rd_installment_percent',$post_id) ?></span>% (<span class="intext"><?php echo number_format(get_field('3rd_installment_value',$post_id)) ?></span> บาท )</td>
                    </tr>
                </table>
                4. ยืนยันราคานี้ <span class="intext"><?php the_field('confirm_period') ?></span> วัน หลังจากวันออกใบเสนอราคา โปรดเช็คราคาอีกครั้งหากต้องการยืนยันราคาหลังจากวันที่กำหนด<br>
                5. ราคานี้รวมการส่งไฟล์ / CD จำนวน 2 ชุด หลังจากเสร็จสิ้นโครงการ


            </td>
            <td colspan="2" style="text-align: center">
                จำนวนเงินรวมทั้งสิ้น / Grand Total
            </td>
            <td style="text-align: center">
                <?php echo number_format(get_field('grand_total',$post_id)) ?>
            </td>
        </tr>
        <tr>

            <td colspan="2" style="text-align: center">

            </td>
            <td>

            </td>
        </tr>
        <tr>

            <td colspan="2" style="text-align: center">

            </td>
            <td>

            </td>
        </tr>

    </table>

    <div style="margin-top: 100px;">
        <div style="width: 25%;float: left;padding: 10px;">
            <div style="border-bottom: 1px solid #000"></div>
            <div><div style="width: 50%;float: left">(</div><div style="width: 50%;float: right;text-align: right">)</div></div>
            <div><div style="width: 30%;float: left">วันที่ / Date</div><div style="width: 70%;float: right;text-align: right;font-size: 16px">______ / ______ / ______</div></div>
            <div style="text-align: center">นามผู้รับผิดชอบโครงการ</div>
        </div>
        <div style="width: 25%;float: left;padding: 10px;">
            <div style="border-bottom: 1px solid #000"></div>
            <div><div style="width: 50%;float: left">(</div><div style="width: 50%;float: right;text-align: right">)</div></div>
            <div><div style="width: 30%;float: left">วันที่ / Date</div><div style="width: 70%;float: right;text-align: right;font-size: 16px">______ / ______ / ______</div></div>
            <div style="text-align: center">นามผู้ติดต่อ</div>
        </div>

        <div style="width: 25%;float: right;padding: 10px;">
            <div style="border-bottom: 1px solid #000;text-align: center"><img style="margin-top: -40px" src="<?php echo get_template_directory_uri()?>/images/sign.png" alt=""></div>
            <div><div style="width: 30%;float: left">วันที่ / Date</div><div style="width: 70%;float: right;text-align: right;font-size: 16px">______ / ______ / ______</div></div>
            <div style="text-align: center;line-height: 100%">Nattadej Poolsawad <br> <span style="font-size: 12px">Director</span> </div>
        </div>
    </div>



</div>


</body>
</html>
