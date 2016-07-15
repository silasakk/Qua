
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
        font-size: 16px;
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
        width: 84%;
        margin: 0 auto;


    }
    .box{
        width: 100%;
        float:left;
        padding: 10px 10px 20px 10px;
        border:2px solid #000;
    }
    .bar-input{
        border-bottom: 1px solid #000;
    }
    .label-en{
        font-size: 12px;
    }
    table,.table{
        width: 100%;
        margin: 5px 0;
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
<h1 class="sub-top-head">Client Profile / ประวัติลูกค้า</h1>
<div class="container">
    <div class="box">
        <div class="pull-left " style="width: 30%">
            <table class="table">
                <tr>
                    <td width="110" class="text-right p-r-10 p-l-10">
                        <div class="label-th">ลำดับที่</div>
                        <div class="label-en">Profile No.</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php echo $user_id; ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="pull-left" style="width: 70%">
            <table class="table">
                <tr>
                    <td width="110" class="text-right p-r-10 p-l-10">
                        <div class="label-th">ลักษณะงาน</div>
                        <div class="label-en">Job Title</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php the_field('job_title',$user_id) ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
<div class="container">
    <h2 class="head-black">
        Client information / ข้อมูลลูกค้า
    </h2>
</div>
<div class="container">
    <div class="box">
        <div>
            <div class="pull-left " style="width: 100%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ประเถท</div>
                            <div class="label-en">Type</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_type',$user_id) ?>
                        </td>
                    </tr>
                </table>



            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 50%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ชื่อ-นามสกุล</div>
                            <div class="label-en">Name</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_name',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 50%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ธุรกิจ/สินค้า/บริการ</div>
                            <div class="label-en">Business/Product/Service</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_service_type',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 50%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ชื่อบริษัท</div>
                            <div class="label-en">Company Name</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('company_name',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 50%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">เลขติดต่อนิติบุคคล</div>
                            <div class="label-en">Company No.</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('company_no',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 100%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ที่อยู่</div>
                            <div class="label-en">Address</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_address',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 33%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">โทรศัพท์</div>
                            <div class="label-en">Phone</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_phone',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width:  33%">

                <table class="table">
                    <tr>
                        <td width="90" class="text-right p-r-10 p-l-10">
                            <div class="label-th">อีเมล์</div>
                            <div class="label-en">Email</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_email',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width:  32%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">บุคคลติดต่อ</div>
                            <div class="label-en">Contact Person</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_contact_person',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 33%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">โทรสาร</div>
                            <div class="label-en">Fax</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_fax',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width:  33%">

                <table class="table">
                    <tr>
                        <td width="90" class="text-right p-r-10 p-l-10">
                            <div class="label-th">มือถือ</div>
                            <div class="label-en">Cell Phone</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_tel',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width:  32%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">เบอร์บุคคลติดต่อ</div>
                            <div class="label-en">Contact No.</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_contact_no',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 33%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">เฟซบุ๊ค</div>
                            <div class="label-en">Facebook</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_facebook',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width:  33%">

                <table class="table">
                    <tr>
                        <td width="90" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ลาย ไอดี</div>
                            <div class="label-en">Line ID</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_line_id',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width:  32%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">หน้าเว็บ</div>
                            <div class="label-en">Webpage</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_website',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="head-black">
        Bank Account Information / ข้อมูลทางบัญชี
    </h2>
</div>
<div class="container">
    <div class="box">
        <div>
            <div class="pull-left " style="width: 50%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ธนาคาร</div>
                            <div class="label-en">Bank Name</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_bank_name',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 50%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">เลขที่บัญชี</div>
                            <div class="label-en">Account No.</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_bank_',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 50%">

                <table class="table">
                    <tr>
                        <td width="110" class="text-right p-r-10 p-l-10">
                            <div class="label-th">สาขา</div>
                            <div class="label-en">Branch</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_bank_branch',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <h2 class="head-black">
        Other Information / ข้อมูลจำเพาะอื่นๆ
    </h2>
</div>
<div class="container">
    <div class="box" style="height: 100px;">
        <?php the_field('client',$user_id) ?>
    </div>
</div>

</body>
</html>
