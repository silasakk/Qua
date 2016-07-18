jQuery(function(){


    jQuery('body').on('keyup','.qty input,.unit_price input',function(){
        var grand_total = 0;
        jQuery('.qty').each(function(index){
            var qty = jQuery('.qty input').eq(index).val();
            var unit_price = jQuery('.unit_price input').eq(index).val();
            var sumsub = qty * unit_price;
            grand_total += sumsub;
            jQuery('[data-name="amount_in_bath"] input').eq(index).val(sumsub);
        });
        jQuery('[data-name="grand_total"] input').val(grand_total);
    });
    jQuery('body').on('keyup','[data-name="1st_installment__percent"] input',function(){
        var install = parseInt(jQuery(this).val());
        var total = parseInt(jQuery('[data-name="grand_total"] input').val());
        var sum = total * install / 100;

        jQuery('[data-name="1st_installment_value"] input').val(sum);
    });
    jQuery('body').on('keyup','[data-name="2nd_installment_percent"] input',function(){
        var install = parseInt(jQuery(this).val());
        var total = parseInt(jQuery('[data-name="grand_total"] input').val());
        var sum = total * install / 100;

        jQuery('[data-name="2nd_installment_value"] input').val(sum);
    });
    jQuery('body').on('keyup','[data-name="3rd_installment_percent"] input',function(){
        var install = parseInt(jQuery(this).val());
        var total = parseInt(jQuery('[data-name="grand_total"] input').val());
        var sum = total * install / 100;

        jQuery('[data-name="3rd_installment_value"] input').val(sum);
    });


    jQuery('.disable-if-js input').prop('readonly',true);
    // setup autocomplete function pulling from currencies[] array
    var url = ajaxurl.url + "?action=search_customer";
    jQuery('.search_customer .acf-input-wrap').append('<div id="outputcontent"></div>');
    jQuery('.search_customer input').autocomplete({
        source: url,
        select: function (suggestion,value) {

            jQuery('[data-name="contact_person"] input').val(value.item.client_contact_person);
            jQuery('[data-name="address"] textarea').val(value.item.client_address);
            jQuery('[data-name="telephone"] input').val(value.item.client_phone);
            jQuery('[data-name="fax"] input').val(value.item.client_fax);
            jQuery('[data-name="mobile"] input').val(value.item.client_tel);
            jQuery('[data-name="email"] input').val(value.item.client_email);


        }
    });




});