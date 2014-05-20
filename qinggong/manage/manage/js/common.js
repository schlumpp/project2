/*这个js用于menu.php，即后台页面的左导航
updater 陈烘
update  2013.5.20*/
		$(document).ready(function() {
					// Store variables
					var accordion_head = $('.accordion > li > a' ),
			
						accordion_body = $('.accordion li > .sub-menu');
					// Open the first tab on load
					accordion_head.first().addClass('active').next().slideDown('normal');
					// Click function
					accordion_head.on('click', function(event) {
						// Disable header links
						event.preventDefault();
						// Show and hide the tabs on click
						if ($(this).attr('class') != 'active'){
							accordion_body.slideUp('normal');
							$(this).next().stop(true,true).slideToggle('normal');
							accordion_head.removeClass('active');
							//$(this).find('span').removeClass().addClass('addicon2'); 
							$(this).addClass('active');
						}
					});
		});
