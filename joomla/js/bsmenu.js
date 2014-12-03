// JavaScript Document
// add id: bsmenu on the main Joomla menu.
// 'list style image' added with no existing image to solve problems with IE!
// class 'disabled' added to a 'li' parent (according to Bootstrap), of a 'a href' with 'disabled' added in Joomla 'Link CSS Style'.

(function($){   
    		$(document).ready(function(){
      			$('#bsmenu').addClass('navbar-nav');
      			$('#bsmenu .parent').addClass('dropdown');
      			$('#bsmenu .parent > a').addClass('dropdown-toggle');
      			$('#bsmenu .parent > a').attr('data-toggle', 'dropdown');
      			$('#bsmenu .parent > a').append('<span class="caret"></span>');
      			$('#bsmenu .parent > ul').addClass('dropdown-menu');
				$('#bsmenu .parent > ul').attr('style', 'list-style-image: url("x") !important;');
				$('#bsmenu a.disabled').parent().addClass('disabled');
    		});
})(jQuery);