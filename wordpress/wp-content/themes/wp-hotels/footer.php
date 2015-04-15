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
			<p>По вопросам сотрудничества пишите:  <a href="mailto:viktoriya.dovhan@hotels24.ua">viktoriya.dovhan@hotels24.ua</a></p>
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
		var morebutton = $( ".headnav li.morebutton" );
		morebutton.click(function() {

		  $( ".nav-more-block" ).toggle( "fast", function() {

		  });
		  $('.bkblock01').toggleClass( "head-go-botton" );
		  $('.headnav li:last-child').toggleClass( "current-menu-item" );
		  event.preventDefault();
		});
		// open-close .more in nav

		var count = document.getElementsByTagName('article').length;
		var mailform = document.getElementsByID('mailing-form');
		if (count < 10 ) {
			mailform.className = mailform.className + " mailing-form-hide";
		};
	</script>
</body>
</html>