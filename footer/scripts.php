	<!-- //footer -->    
	<!-- Include jQuery & Filterizr -->
    <!-- <script src="js/jquery.filterizr.js"></script> -->
    <script src="js/controls.js"></script>


    <script type="text/javascript">
    	
    	// Slideshow Apartment Images
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function currentDiv(n) {
		  showDivs(slideIndex = n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		     x[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
		  }
		  x[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " w3-opacity-off";
		}


    </script>
	<!--//gallery-->
	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js -->

	<!-- banner Slider starts Here -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 3
		  $("#slider3").responsiveSlides({
			auto:false,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	
		});
	</script>
	<!-- //End-slider-script -->
	<!-- jarallax -->  
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax --> 
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
	    //$(document).on("scroll", onScroll);
	    
	    //smoothscroll
	    $('.navbar-nav > li > a[href^="#"]').on('click', function (e) {
	        e.preventDefault();
	        $(document).off("scroll");
	        
	        $('.navbar-nav > li > a').each(function () {
	            $(this).removeClass('active');
	        })
	        $(this).addClass('active');


	        var target = this.hash,
	            menu = target;
	        $target = $(target);
	        $('html, body').stop().animate({
	            'scrollTop': $target.offset().top
	        }, 1000, 'swing', function () {
	            window.location.hash = target;
	        });
	    });
	});

	var status = "less";

	function toggleText()
	{
	    var text='<p class="w3-text-black"> - Cras justo odio; </p><p class="w3-text-black"> - Dapibus ac facilisis in; </p><p class="w3-text-black"> - Morbi leo risus; </p><p class="w3-text-black"> - Porta ac consectetur ac;</p><p class="w3-text-black"> - Vestibulum at eros;</p>';
	    
	    if (status == "less") {
	        document.getElementById("textArea").innerHTML=text;
	        document.getElementById("toggleButton").innerText = "Ver Menos";
	        status = "more";
	    } else if (status == "more") {
	        document.getElementById("textArea").innerHTML = "";
	        document.getElementById("toggleButton").innerText = "Ver Mais";
	        status = "less"
	    }
	}

	function toggleText2()
	{
	    var text='<p class="w3-text-black"> - Cras justo odio; </p><p class="w3-text-black"> - Dapibus ac facilisis in; </p><p class="w3-text-black"> - Morbi leo risus; </p><p class="w3-text-black"> - Porta ac consectetur ac;</p><p class="w3-text-black"> - Vestibulum at eros;</p>';
	    
	    if (status == "less") {
	        document.getElementById("textArea2").innerHTML=text;
	        document.getElementById("toggleButton2").innerText = "Ver Menos";
	        status = "more";
	    } else if (status == "more") {
	        document.getElementById("textArea2").innerHTML = "";
	        document.getElementById("toggleButton2").innerText = "Ver Mais";
	        status = "less"
	    }
	}

	function toggleText3()
	{
	    var text='<p class="w3-text-black"> - Cras justo odio; </p><p class="w3-text-black"> - Dapibus ac facilisis in; </p><p class="w3-text-black"> - Morbi leo risus; </p><p class="w3-text-black"> - Porta ac consectetur ac;</p><p class="w3-text-black"> - Vestibulum at eros;</p>';
	    
	    if (status == "less") {
	        document.getElementById("textArea3").innerHTML=text;
	        document.getElementById("toggleButton3").innerText = "Ver Menos";
	        status = "more";
	    } else if (status == "more") {
	        document.getElementById("textArea3").innerHTML = "";
	        document.getElementById("toggleButton3").innerText = "Ver Mais";
	        status = "less"
	    }
	}




	</script>


	<!-- //Custom-JavaScript-File-Links -->

	<script>
    	setTimeout(function() {$(".back").fadeOut(); });
	</script>


	<script type="text/javascript">
// Submeter dados no formulario Contactos
$("#info_contact").submit(function(e){
$(".back").show();
$(".load").show();
e.preventDefault();
dataValue = $(this).serialize();
console.log(dataValue);
$.ajax({ url:'info/resp.php',
data:dataValue,
    type:'POST', 
    cache: false,
    success:function(data){
    	console.log(data);
       if(data == 0)
      {
          $(".back").hide();
          $(".load").show();
        $('.debug-url').html("O Pedido de Informações foi submtido com sucesso. Verifique a mensagem no email: <b>"+$(".email").val()+"</b>.");
          $('#info_contact')[0].reset();
          $("#mensagem_ok").trigger('click');
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
     }
     else
     {
      $(".back").hide();
      $(".load").show();
      $('.debug-url').html("Por favor verifique os seguintes campos:<br><br>"+data+"<br> e tente novamente.");
        $('#Modalko').modal();
     }
     
   },
 error:function(){
     $(".back").hide();
     $(".load").show();
     $('.debug-url').html("O Pedido de Informações não foi submtido com sucesso. Verifique a conexão WI-FI e tente novamente.");
        $('#Modalko').modal();
    }
  });


});


$('.btn-samsung-galaxy-a8').on('click', function()
{
	$("html, body").animate({ scrollTop: $("#contact").offset().top-50 }, 1000);

	$(".txtarea").val('Buy Now - Samsung Galaxy A8');
});

$('.btn-samsung-galaxy-s8').on('click', function()
{
	$("html, body").animate({ scrollTop: $("#contact").offset().top-50 }, 1000);

	$(".txtarea").val('Buy Now - Samsung Galaxy S8');
});

$('.btn-samsung-galaxy-a10').on('click', function()
{
	$("html, body").animate({ scrollTop: $("#contact").offset().top-50 }, 1000);

	$(".txtarea").val('Buy Now - Samsung Galaxy A10');
});

</script>


	<!-- //smooth-scrolling-of-move-up -->    
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='js/css3-animate-it.js'></script>
    <script src="js/bootstrap.js"></script>