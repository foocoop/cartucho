<?php
?>

</div>
<!-- End Page -->


<footer class="row">
<?php
$footer = "";
foo_div("","large-12 columns",$footer);
?>
</footer>


<?php wp_footer(); ?>

</body>
<script type="text/javascript">
 jQuery(document).ready(function($){
   $('.slider').mobilyslider({
     content: '.sliderul', // class for slides container
     children: 'li', // selector for children elements
     transition: 'horizontal',
     animationSpeed: 600, // slide transition speed (miliseconds)
     autoplay: true,
     autoplaySpeed: 3000,
     bullets: false,
     arrows: true
   });
 });

</script>
</html>