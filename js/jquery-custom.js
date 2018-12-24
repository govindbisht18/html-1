$(document).ready(function(){
	//wow animation
	var wow = new WOW({
		boxClass: "wow",
		animateClass: "animated",
		offset: 0,
		mobile: !0,
		live: !0,
		callback: function(e) {},
		scrollContainer: null
	});
	wow.init();
	
	//navbar header
	$('.navbar-toggle').click(function(){
		$('#navbar').slideToggle();
	});
	
	//banner search form
	$('.basic_toggle').hide();
	$('.advance_toggle').on('click', function(){
		$(this).hide();
		$('.basic_toggle').fadeIn(600);
		$('.basic_search_form').hide();
		$('.advance_search_form').fadeIn(600);
	});
	$('.basic_toggle').on('click', function(){
		$(this).hide();
		$('.advance_toggle').fadeIn(600);
		$('.advance_search_form').hide();
		$('.basic_search_form').fadeIn(600);
	});

	$('.search_tabs_nav li a').on("click", function(e){
		$('.search_tabs_nav li a').parent().removeClass('active');
		$(this).parent().addClass('active');
		$('.tab_pane').removeClass('active');
		e.preventDefault();
		var x = $(this).attr('class');
		$('div.'+ x).addClass('active');
	})
	
	
	
	//home page user account
	$(".mya-tabs li").on("click", function() {
		var e = $(this).data('id');
		$(this).addClass('active').siblings('li').removeClass('active');
		$('.mya-tabs-content').find(e).slideDown().siblings('.mya-tab-pane').slideUp();
		
	})
	
	//top header search menu
	$('.search_btn_top').click(function(){
		$('.search_top').slideToggle();
	})
	$('.search_top .search_close').click(function(){
		$('.search_top').fadeOut();
	})	
	
	//header navbar active jquery
	$('.navbar_aside .nav li a').click(function(){
		//$('.navbar_aside .nav li a').parent('li').removeClass('active');
		$(this).parent('li').addClass('active');
	})
	
	//window scroll function for header fixed class
	$(window).scroll(function(){
		if($(window).scrollTop()> 80 ){
			//alert();
			$('.header').addClass('header_fixed');
		}
		else {
			$('.header').removeClass('header_fixed');
		}
	})
	
	
	//doctors page search section
	var searchTxt = document.querySelector('.doctors_search_btn span');
	//var searchFa = document.querySelector('.doctors_search_btn span .fa-times');
	$('.doctors_search_btn').on('click', function(){
		if( searchTxt.textContent === 'Close Search' ){
			searchTxt.textContent = 'Search';
		}
		else{
			searchTxt.textContent = 'Close Search';
		}
		$(this).find('.fa-times').toggleClass('fa-plus');
		$('.doctors_search .search_container').slideToggle();
	})
	
	
	//doctors pages grid & list view controller
	$('.toggleView').on('click', function(){
		$('.toggleView').removeClass('active');
		$(this).addClass('active');
	})
	$('.list_icon.toggleView').on('click', function(){
		$('.list_container .list_col').addClass('listview_col');
	})
	$('.grid_icon.toggleView').on('click', function(){
		$('.list_container .list_col').removeClass('listview_col');
	})
	
	//tooltip script
	$('[data-toggle="tooltip"]').tooltip(); 
	
	
	
});
//end-document-ready


	
	
