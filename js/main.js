$(function(){
	$('#brand').change(function(){
	 color = $('#brand :selected').val();
	 document.getElementById('num_1').style.color = 'white';
	 document.getElementById('num_1').style.background = '#175B80';
})
	$('#model').change(function(){
		color = $('#model :selected').val();
		document.getElementById('num_2').style.color = 'white';
		document.getElementById('num_2').style.background = '#175B80';
})
	$('#group').change(function(){
		color = $('#group :selected').val();
		document.getElementById('num_3').style.color = 'white';
		document.getElementById('num_3').style.background = '#175B80';
})
	$('#type').change(function(){
		color = $('#type :selected').val();
		document.getElementById('num_4').style.color = 'white';
		document.getElementById('num_4').style.background = '#175B80';
})
	$('#chose_zap').change(function(){
		color = $('#chose_zap :selected').val();
		document.getElementById('num_5').style.color = 'white';
		document.getElementById('num_5').style.background = '#175B80';
})

	$('#model').change(function(){
		color = $('#model :selected').val();
		document.getElementById('num_span_1').style.background = '#175B80';
})
	$('#group').change(function(){
		color = $('#group :selected').val();
		document.getElementById('num_span_2').style.background = '#175B80';
})
	$('#type').change(function(){
		color = $('#type :selected').val();
		document.getElementById('num_span_3').style.background = '#175B80';
})
	$('#chose_zap').change(function(){
		color = $('#chose_zap :selected').val();
		document.getElementById('num_span_4').style.background = '#175B80';
})
});
$(document).ready(function()
{
    var brand_list=
    [
        "Volvo", "Saab", "Opel", "Audi", "BMW", "Jeep", "KIA", "MG", "Mini"
    ];
    $("#brand").select2({
        data:brand_list
    });
    var model_list=
    [
        "i3- sun 14-2253", "Saab", "Opel", "Audi", "BMW", "Jeep", "KIA", "MG", "Mini"
    ];
    $("#model").select2({
        data:model_list
    });
    var group_list=
    [
        "Для двигателя", "Saab", "Opel", "Audi", "BMW", "Jeep", "KIA", "MG", "Mini"
    ];
    $("#group").select2({
        data:group_list
    });
    var type_list=
    [
        "Поршневой вал", "Saab", "Opel", "Audi", "BMW", "Jeep", "KIA", "MG", "Mini"
    ];
    $("#type").select2({
        data:type_list
    });
    var chose_zap_list=
    [
        "Поршень", "Saab", "Opel", "Audi", "BMW", "Jeep", "KIA", "MG", "Mini"
    ];
    $("#chose_zap").select2({
        data:chose_zap_list
    });

});
$(document).ready(function(){
	$('.slider_cat').slick({
		mobileFirst: true,
		arrows:true,
		dots:true,
		slidesToShow:1.5,
		rows:2,
		autoplay:true,
		speed:1000,
		autoplaySpeed:5000,
		responsive:[
			{
				breakpoint: 768,
				settings: {
					slidesToShow:4,
					rows:1
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow:2
				}
			}
		]
	});
});

$(document).ready(function(){
	$('.slider_lat').slick({
		arrows:true,
		dots:true,
		slidesToShow:5,
        rows:2,
		autoplay:true,
		speed:1000,
		autoplaySpeed:5000,
		responsive:[
			{
				breakpoint: 768,
				settings: {
					slidesToShow:2
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow:2
				}
			}
		]
	});
});

$(document).ready(function(){
	const scrollRight = document.querySelector('#scroll_btn_back');
	const scrollLeft = document.querySelector('#scroll_btn_go');
	const brands_resp = document.querySelector('#brands_resp');

	scrollLeft.onclick = function (e) {
	  e.preventDefault();
	  brands_resp.scrollTo(2000, 0);
	};
	scrollRight.onclick = function (e) {
		e.preventDefault();
		brands_resp.scrollTo(0, 0);
	  };
});

$(document).ready(function() {
	$('.burger_menu').click(function(){
        $('.burger_wrapper').toggleClass('show');
		$('.burger_menu').toggleClass('burger_menu_active');
		$('.header_second').toggleClass('position_fixed_header');
		//document.getElementById('header_second').style.position = 'fixed';
	});
	$('.phone_resp').click(function(){
        $('.contacts_burger_wrapper').toggleClass('show');
		$('.phone_resp').toggleClass('phone_resp_active');
		$('.header_second').toggleClass('position_fixed_header');
	});
	$('.zoom_resp').click(function(){
        $('.search_burger_wrapper').toggleClass('show');
		$('.zoom_resp').toggleClass('zoom_resp_active');
		$('.header_second').toggleClass('position_fixed_header');
	});
});