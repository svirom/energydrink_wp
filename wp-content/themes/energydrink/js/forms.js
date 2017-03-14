jQuery(function($)
{
$(document).ready(function(){


//contacts form
  $('#contacts_form').submit(send_form);

  function send_form() {
    var t = $(this);
    var fields = 'input.required';
    event.preventDefault();
    t.find(fields).each(function() {
      if ($(this).val() == 0) {
        $(this).addClass('error');
      } else {
        $(this).removeClass('error');
      }
    });
    if (t.find('.error').length > 0) { 
      return false;
    } else {
      var form_data = t.serialize();
      var ajaxurl = '/wp-admin/admin-ajax.php';
      $.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {
          data: form_data,
          action: 'form',
          sel: $('#contacts_select option:selected').val(),
          name: $('#contacts_name').val(),
          full_name: $('#contacts_full_name').val(),
          email: $('#contacts_email').val(),
          tel: $('#contacts_tel').val(),
          message: $('#contacts_message').val(),
        },
        beforeSend: function(){
          $('.on_send').css('display', 'block');
        },
        success: function() {
          $('.on_send').css('display', 'none');
          $('.popup').fadeIn(300);
          t.find('input:not([type="submit"])').each(function() {
            $(this).val('');
          });
          t.find('textarea').val('');
        },
        error: function() {
          $('.on_send').css('display', 'none');
          alert("It's not OK");
        }

      });
    }
    return false;
  }

//partners form
  $('#partners_form').submit(send_form2);

  function send_form2() {
    var t2 = $(this);
    var fields2 = 'input.required';
    event.preventDefault();
    t2.find(fields2).each(function() {
      if ($(this).val() == 0) {
        $(this).addClass('error');
      } else {
        $(this).removeClass('error');
      }
    });
    if (t2.find('.error').length > 0) { 
      return false;
    } else {
      var form_data = t2.serialize();
      var ajaxurl = '/wp-admin/admin-ajax.php';
      $.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {
          data: form_data,
          action: 'form2',
          pcity: $('#partners_city').val(),
          pname: $('#partners_name').val(),
          ptel: $('#partners_tel').val(),
          pemail: $('#partners_email').val(),
        },
        beforeSend: function(){
          $('.on_send').css('display', 'block');
        },
        success: function() {
          $('.on_send').css('display', 'none');
          $('.popup').fadeIn(300);
          t2.find('input:not([type="submit"])').each(function() {
            $(this).val('');
          });
        },
        error: function() {
          $('.on_send').css('display', 'none');
          alert("It's not OK");
        }

      });
    }
    return false;
  }

//calculator
  $('#classic_big').closest('td').prev('td').text(0);
  $('#classic_small').closest('td').prev('td').text(0);
  $('#original_big').closest('td').prev('td').text(0);
  $('#original_small').closest('td').prev('td').text(0);
  $('#classic_big').closest('td').prev('td').prev('td').text(0);
  $('#classic_small').closest('td').prev('td').prev('td').text(0);
  $('#original_big').closest('td').prev('td').prev('td').text(0);
  $('#original_small').closest('td').prev('td').prev('td').text(0);
  $('#classic_big').closest('td').prev('td').prev('td').prev('td').find('span').text(75.3);
  $('#classic_small').closest('td').prev('td').prev('td').prev('td').find('span').text(63.6);
  $('#original_big').closest('td').prev('td').prev('td').prev('td').find('span').text(75.3);
  $('#original_small').closest('td').prev('td').prev('td').prev('td').find('span').text(63.6);
	$('#calc_form .total_weight').text(0);
	$('#calc_form .total_volume').text(0);
	$('#calc_form .total_value').text(0);
	$('#classic_big').val() == 0;
	$('#classic_small').val() == 0;
	$('#original_big').val() == 0;
	$('#original_small').val() == 0;
	
	$('#calc_form table').change(function(){
		var classic_big = $('#classic_big').val();
		var classic_small = $('#classic_small').val();
		var original_big = $('#original_big').val();
		var original_small = $('#original_small').val();
		var total_weight = 0;
		var total_volume = 0;
		var total_value = 0;
    var classic_big_value = $('#classic_big').closest('td').prev('td');
    var classic_small_value = $('#classic_small').closest('td').prev('td');
    var original_big_value = $('#original_big').closest('td').prev('td');
    var original_small_value = $('#original_small').closest('td').prev('td');
    var classic_big_number = $('#classic_big').closest('td').prev('td').prev('td');
    var classic_small_number = $('#classic_small').closest('td').prev('td').prev('td');
    var original_big_number = $('#original_big').closest('td').prev('td').prev('td');
    var original_small_number = $('#original_small').closest('td').prev('td').prev('td');
    var classic_big_price = $('#classic_big').closest('td').prev('td').prev('td').prev('td').find('span');
    var classic_small_price = $('#classic_small').closest('td').prev('td').prev('td').prev('td').find('span');
    var original_big_price = $('#original_big').closest('td').prev('td').prev('td').prev('td').find('span');
    var original_small_price = $('#original_small').closest('td').prev('td').prev('td').prev('td').find('span');
    

		total_weight += parseInt(classic_big*12);
		$('#calc_form .total_weight').text(total_weight);
		total_weight += parseInt(classic_small*6);
		$('#calc_form .total_weight').text(total_weight);
		total_weight += parseInt(original_big*12);
		$('#calc_form .total_weight').text(total_weight);
		total_weight += parseInt(original_small*6); 
		$('#calc_form .total_weight').text(total_weight);

    total_volume1 = parseInt(classic_big*24);
    total_volume2 = parseInt(classic_small*12);
    total_volume3 = parseInt(original_big*24);
    total_volume4 = parseInt(original_small*12);
    $('#calc_form .total_volume').text(((total_volume1/2000)+(total_volume2/4000)+(total_volume3/2000)+(total_volume4/4000)).toFixed(1));

    if ((total_volume1/2000) >= 1) {
      $(classic_big_price).text(65);
    } else {
      $(classic_big_price).text(75.3);
    }
    if ((total_volume2/4000) >= 1) {
      $(classic_small_price).text(53);
    } else {
      $(classic_small_price).text(63.6);
    }
    if ((total_volume3/2000) >= 1) {
      $(original_big_price).text(65);
    } else {
      $(original_big_price).text(75.3);
    }
    if ((total_volume4/4000) >= 1) {
      $(original_small_price).text(53);
    } else {
      $(original_small_price).text(63.6);
    }

    var classic_big_price_v = $('#classic_big_p').text();
    var classic_small_price_v = $('#classic_small_p').text();
    var original_big_price_v = $('#original_big_p').text();
    var original_small_price_v = $('#original_small_p').text();

    total_price1 = parseFloat(classic_big_price_v*24).toFixed(2);
    classic_big_value.text(total_price1*classic_big);

    total_price2 = parseFloat(classic_small_price_v*12).toFixed(2);
    classic_small_value.text(total_price2*classic_small);

    total_price3 = parseFloat(original_big_price_v*24).toFixed(2);
    original_big_value.text(total_price3*original_big);

    total_price4 = parseFloat(original_small_price_v*12).toFixed(2);
    original_small_value.text(total_price4*original_small);
		 
    $('#calc_form .total_value').text(((total_price1*classic_big) + (total_price2*classic_small) + (total_price3*original_big) + (total_price4*original_small)).toFixed(2));

    classic_big_number.text(parseInt(classic_big*24));
    classic_small_number.text(parseInt(classic_small*12));
    original_big_number.text(parseInt(original_big*24));
    original_small_number.text(parseInt(original_small*12)); 
    
	})
 
//calc form
  $('#calc_form').submit(send_form3);

  function send_form3() {
    var t3 = $(this);
    var fields3 = 'input:not([type="submit"])';
    event.preventDefault();
    
    var form_data = $('#calc_form').serialize();
    var ajaxurl = '/wp-admin/admin-ajax.php';
      $.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {
          data: form_data,
          action: 'form3',
          calcemail: $('#calc_email').val(),
          calctel: $('#calc_tel').val(),
          classic_big: $('#classic_big').val(),
          classic_small: $('#classic_small').val(),
          original_big: $('#original_big').val(),
          original_small: $('#original_small').val(),
        },
        beforeSend: function(){
          $('.on_send').css('display', 'block');
        },
        success: function() {
          $('.on_send').css('display', 'none');
          $('.popup').fadeIn(300);
          t3.find(fields3).each(function() {
            $(this).val('');
          });
          $('#calc_form .total_weight').text(0);
		      $('#calc_form .total_volume').text(0);
		      $('#calc_form .total_value').text(0);
          $('#classic_big').closest('td').prev('td').text(0);
          $('#classic_small').closest('td').prev('td').text(0);
          $('#original_big').closest('td').prev('td').text(0);
          $('#original_small').closest('td').prev('td').text(0);
          $('#classic_big').closest('td').prev('td').prev('td').text(0);
          $('#classic_small').closest('td').prev('td').prev('td').text(0);
          $('#original_big').closest('td').prev('td').prev('td').text(0);
          $('#original_small').closest('td').prev('td').prev('td').text(0);
          $('#classic_big').closest('td').prev('td').prev('td').prev('td').find('span').text(75.3);
          $('#classic_small').closest('td').prev('td').prev('td').prev('td').find('span').text(63.6);
          $('#original_big').closest('td').prev('td').prev('td').prev('td').find('span').text(75.3);
          $('#original_small').closest('td').prev('td').prev('td').prev('td').find('span').text(63.6);
        },
        error: function() {
          $('.on_send').css('display', 'none');
          alert("It's not OK");
        }

      });
    
    return false;
  }

});

});