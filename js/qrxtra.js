$(document).ready(function(){
						let tkit = $('div.toolkit li > a');
						tkit.click(function(){
							let activekit = $(this);
								tkit.removeClass('active_toolkit');
								activekit.toggleClass('active_toolkit');
								
								
								let typ = $(this).data('typ');
									let typKumm = '.item-card.'+typ;
									$('div.item-card').slideUp();
									$(typKumm).slideDown();
									
						});
							let qr_type = $('.qr-type ul >li > a');
						qr_type.click(function(){
							let activeqr = $(this);
								qr_type.removeClass('active_qr');
								activeqr.toggleClass('active_qr');
								
								let tyx = $(this).data('tyx');
									let typKumm = '.prop-card.'+tyx;
									$('div.prop-card').slideUp();
									$(typKumm).slideDown();
									
						});
						
						$('.abatu').on('click', function(){
							$('.modal.aboutus').modal("show");
						});
						
						$('.modalclor').on('click', function(){
							$('.modal.aboutus').modal("hide");
						});
					});