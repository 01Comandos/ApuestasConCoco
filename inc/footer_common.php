	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- RESPONSIVE SLIDES -->
    <script src="js/responsiveslides.js"></script>


	<!--SCRIPT PROPIOS-->
	<script>
	    $(document).ready(
	    	function() {

				//ACTIVAR SEARCH MOBILE
				$('#btn-search').click(function(){
					$("header .logo , .header-contain , nav").hide();
					$("#form-mobile").show();
				})

				// REGRESAR A MENU MOBILE
				$('.btn-arrow-nav').on('click', function(){
					$('header').toggleClass('show')
					$('nav').toggleClass('show')

					if(!$('nav').hasClass('shown')){
						$('nav').animate({
								maxHeight: '100%'
						}, 500)
							$('nav').addClass('shown')
					}
					else{
						$('nav').animate({
								maxHeight: '1.2em'
						}, 500)						
						$('nav').removeClass('shown')
					}
				})

				//ACTIVAR ENABLE APUESTA
				$('.btn-enable').parent().click(function(){
					$(this).find('.btn-enable').hide();
					$(this).parent().find('.link .btn-disable').show()
					$(this).parent().parent().parent().toggleClass('disable-bet')					
				})

				//ACTIVAR DISABLE
				$('.btn-disable').parent().click(function(){
					$(this).find('.btn-disable').hide();
					$(this).parent().find('.link .btn-enable').show()
					$(this).parent().parent().parent().toggleClass('disable-bet')					
				})

				$('.bet-house li').on('click', function(){
					if(!$(this).hasClass('checked')){
						$(this).parent().find('li').removeClass('checked')
						$(this).addClass('checked')
						$($(this).parent().parent().find('.selected img')[0]).attr('src', $($(this).find('img')[0]).attr('src'))
					}
				})

				//ACTIVAR MENU SELECTOR
				$('.selected').parent().click(function(){
					$(this).find('.bet-house').toggleClass('hiden');				
				})

				//ACTIVAR APUESTAS SIMPLES
				$('#tab-simple').click(function(){
					$("#bet-combinada").hide();
					$("#bet-simple").show();
					$('#tab-simple').parent().addClass('active');
					$('#tab-combinada').parent().removeClass('active');
				})

				//ACTIVAR APUESTAS COMBINADAS
				$('#tab-combinada').click(function(){
					$("#bet-simple").hide();
					$("#bet-combinada").show();
					$('#tab-simple').parent().removeClass('active');
					$('#tab-combinada').parent().addClass('active');
				})

				initCollapse();

				//ACTIVACION RSLIDES
				$(".rslides").responsiveSlides({
					auto: false,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "centered-btns"
				});

				$('.close').on('click', function(){
					$(this).closest( "li" ).remove()
				})
	    	
			}
	    );

	    //FUNCION COLLAPSE
	    function initCollapse(){
			for(var i=0; i<$('.collapsible-item').length; i++){
				
				var item = $('.collapsible-item')[i];
				$(item).find('.collapsible-body').attr('data-height', $(item).find('.collapsible-body').height())
				$(item).find('.collapsible-body').addClass('loaded')
			}

			$('.collapsible-item a').on('click', function(){
				var target = $(this).parent();
				if(!$(target).hasClass('shown')){
					$('.shown').find('.collapsible-body').animate({
						height: 'toggle'
					}, 500, collapse())
					
					$('.shown').removeClass('shown')
					
					function collapse(){
						$(target).find('.collapsible-body').animate({
							height: 'toggle'
						}, 500, function(){
							$(target).addClass('shown')
						})
					}
				}
				else{
					$(target).find('.collapsible-body').animate({
						height: 'toggle'
					}, 500)

					$(target).removeClass('shown')					
				}
			})			
		}

	</script>

