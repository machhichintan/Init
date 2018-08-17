<?php 

?>
		</div>
	</div>  

	<script type="text/javascript">
    //lastSlideIndex = 1;
    $('#carousel').on('slide.bs.carousel', function() {
        currentIndex = $('div.active').index() + 2;
        //console.log(currentIndex);
        //$('.num').html(''+currentIndex+'/'+totalItems+'');
        if(currentIndex == 3){
          $(".cooming_soon_part").hide();
        }
      //lastSlideIndex = currentIndex;
    });
  </script>
<?php wp_footer(); ?>
</body>
</html>