
<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
<h1 class="sub-top-head">Cast & Crew Profile / ประวัตินักแสดงและทีมงาน</h1>
<div class="container">
    <div class="box">
        <div class="pull-left " style="width: 30%">
            <table class="table">
                <tr>
                    <td width="80" class="text-right p-r-10 p-l-10">
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
                    <td width="80" class="text-right p-r-10 p-l-10">
                        <div class="label-th">ตำแหน่งงาน</div>
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
        Personal information / ข้อมูลส่วนตัว
    </h2>
</div>
<div class="container">
    <div class="box">

        <div style="margin-bottom: 10px;">
            <div class="pull-left " style="width: 50%">
                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ชื่อ-นามสกุล</div>
                            <div class="label-en">Full Name</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_fullname',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 50%">

                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">เลขติดต่อนิติบุคคล</div>
                            <div class="label-en">Card ID</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_card_id',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 40%">
                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ชื่อเล่น</div>
                            <div class="label-en">NickName</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_nickname',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 20%;background-color: #ccc">
                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">หน้าอก</div>
                            <div class="label-en">Bust</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_bust',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 20%;background-color: #ccc">
                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">สีผม</div>
                            <div class="label-en">Hair colo</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_hair_color',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 19%;background-color: #ccc">
                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ขนาดเสื้อ</div>
                            <div class="label-en">Top Size</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_top_size',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>




        <div>
            <div class="pull-left " style="width: 20%">

                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">อายุ</div>
                            <div class="label-en">Age</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_age',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 20%">

                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">เพศ</div>
                            <div class="label-en">Gender</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_gender',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 20%;background: #ccc">

                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">เอว</div>
                            <div class="label-en">Waist</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_waist',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 20%;background: #ccc">

                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">สีผิว</div>
                            <div class="label-en">Skin color</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_waist',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 19%;background: #ccc">

                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ขนาดกระโปรง</div>
                            <div class="label-en">Bottom size</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_waist',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 20%">
                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ส่วนสูง</div>
                            <div class="label-en">Height</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_height',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 20%">
                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">น้ำหนัก</div>
                            <div class="label-en">Weight</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_weight',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 20%;background-color: #ccc">
                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">สะโพก</div>
                            <div class="label-en">Hips</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_hips',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 20%;background-color: #ccc">
                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ความยาวผม</div>
                            <div class="label-en">Hair Length</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_hair_length',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 19%;background-color: #ccc">
                <table class="table">
                    <tr>
                        <td width="50" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ขนาดรองเท้า</div>
                            <div class="label-en">Shoe size</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('personal_shoe_size',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>


    </div>
</div>
<div class="container">
    <h2 class="head-black">
        Contact Information / ประสบการณ์ทำงาน
    </h2>
</div>
<div class="container">
    <div class="box">
        <div>
            <div class="pull-left " style="width: 100%">
                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ที่อยู่</div>
                            <div class="label-en">Address</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('contact_address',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div>
            <div class="pull-left " style="width: 33%">
                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">มือถือ</div>
                            <div class="label-en">Cell phone</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('contact_cell_phone',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 33%">
                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">อีเมล์</div>
                            <div class="label-en">Email</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('contact_email',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 33%">
                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">อินสตราแกรม</div>
                            <div class="label-en">Instagram</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('contact_instagram',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 33%">
                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">เฟสบุ๊ต</div>
                            <div class="label-en">Facebook</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('contact_facebook',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 33%">
                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">ลาย ไอดี</div>
                            <div class="label-en">Line ID</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('contact_line_id',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left " style="width: 33%">
                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">หน้าเว็บ</div>
                            <div class="label-en">Webpage</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('contact_webpage',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <h2 class="head-black">
        Education / ประวัติการศึกษาล่าสุด
    </h2>
</div>
<div class="container">
    <div class="box">

        <div class="pull-left " style="width: 50%">

            <table class="table">
                <tr>
                    <td width="80" class="text-right p-r-10 p-l-10">
                        <div class="label-th">สถาบัน</div>
                        <div class="label-en">Institute</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php echo get_field('education_institute',$user_id) ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="pull-left " style="width: 50%">

            <table class="table">
                <tr>
                    <td width="80" class="text-right p-r-10 p-l-10">
                        <div class="label-th">สาขา</div>
                        <div class="label-en">Major</div>
                    </td>
                    <td class="bar-input text-center">
                        <?php echo get_field('education_major',$user_id) ?>
                    </td>
                </tr>
            </table>
        </div>


    </div>
</div>
<div class="container">
    <h2 class="head-black">
        Experiences / ประสบการณ์ทำงาน
    </h2>
</div>
<div class="container">
    <div class="box">

        <?php
        // check if the repeater field has rows of data
        if( have_rows('experiences_list',$user_id) ):

            // loop through the rows of data
            while ( have_rows('experiences_list',$user_id) ) : the_row();
                ?>
                <div>
                    <div class="pull-left " style="width: 50%">

                        <table class="table">
                            <tr>
                                <td width="80" class="text-right p-r-10 p-l-10">
                                    <div class="label-th">ชื่องาน</div>
                                    <div class="label-en">Job Name</div>
                                </td>
                                <td class="bar-input text-center">
                                    <?php echo get_sub_field('job_name',$user_id) ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="pull-left " style="width: 50%">

                        <table class="table">
                            <tr>
                                <td width="80" class="text-right p-r-10 p-l-10">
                                    <div class="label-th">ลักษณะงาน</div>
                                    <div class="label-en">Job Detail</div>
                                </td>
                                <td class="bar-input text-center">
                                    <?php echo get_sub_field('job_detail',$user_id) ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php


            endwhile;

        else :

            // no rows found

        endif;?>


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
                        <td width="80" class="text-right p-r-10 p-l-10">
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
                        <td width="80" class="text-right p-r-10 p-l-10">
                            <div class="label-th">เลขที่บัญชี</div>
                            <div class="label-en">Account No.</div>
                        </td>
                        <td class="bar-input text-center">
                            <?php the_field('client_bank_no',$user_id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="pull-left " style="width: 50%">

                <table class="table">
                    <tr>
                        <td width="80" class="text-right p-r-10 p-l-10">
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
        Work Information / ลักษณะงานที่ทำได้
    </h2>
</div>
<div class="container">
    <div class="box" style="text-align: center;">
        <?php echo join(' , ',get_field('work',$user_id)) ?>
    </div>
    <div class="box" style="text-align: center;">
        <div style="width: 50%;float: left;">
            <?php if(get_field('id_card', $user_id)): ?>

                <img style="margin-top: 50px;border:1px solid #000;" src="<?php echo get_field('id_card', $user_id) ?>"  />


            <?php else: ?>
                บัตรประชาชน<br>
                ID Card.
            <?php endif; ?>
        </div>
        <div style="width: 50%;float: left;">
            <?php $images = get_field('member_picture',$user_id); ?>
            <table>
                <tr>
                    <td  style="padding: 50px;">
                        <?php if($images[0]): ?>
                            <img style="border:1px solid #000;" src="<?php echo $images[0]['url'] ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                    </td>
                    <td style="padding: 50px;">
                        <?php if($images[1]): ?>
                            <img style="border:1px solid #000;" src="<?php echo $images[1]['url'] ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 50px;">
                        <?php if($images[2]): ?>
                            <img style="border:1px solid #000;" src="<?php echo $images[2]['url'] ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                    </td>
                    <td style="padding: 50px;">
                        <?php if($images[3]): ?>
                            <img style="border:1px solid #000;" src="<?php echo $images[3]['url'] ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </div>
        
    </div>
</div>

</body>
</html>
