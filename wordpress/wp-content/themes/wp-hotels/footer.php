		</div>
		<!-- /.container -->
		
	</div>
	<!-- /wrapper -->

	<!-- footer -->
	<footer class="footer" role="contentinfo">
		
		<div class="mainfooter">
			<!-- copyright -->
			<p class="copyright">
				Перепечатка и использование любых материалов, размещенных на нашем сайте, возможны только с письменного разрешения, с указанием названия источника и наличием активной гиперссылки на Hotels24.ua.
			</p>
			<p>По вопросам сотрудничества пишите:  viktoriya.dovhan@hotels24.ua</p>
			<!-- /copyright -->
		</div>
		<!-- /.mainfooter -->
		
	</footer>
	<!-- /footer -->

	<div class="backhead bkblock0n">
	</div><!-- backhead bkblock0n -->
	<div class="backhead bkblock01">
		<div class="shadow"></div>
	</div><!-- backhead bkblock01 -->

	<?php wp_footer(); ?>
	<script>
		// open-close .more in nav
		var morebutton = $( ".headnav li:last-child" );
		morebutton.click(function() {
		  $( ".nav-more-block" ).toggle( "fast", function() {
		    // Animation complete.
		  });
		  $('.bkblock01').toggleClass( "head-go-botton" );
		  event.preventDefault();
		});
		// open-close .more in nav

		// in .widget-posters-grey display only first mounth
		var monthOctober = document.querySelector(".month-october");
		var monthNovember = document.querySelector(".month-november");

		monthOctober.classList.add("month-visible");
		monthNovember.classList.add("month-visible");
		// in .widget-posters-grey display only first mounth

	</script>
</body>
</html>