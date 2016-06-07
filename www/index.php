<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="utf-8">
      <title>House Photos</title>
      <link rel="shortcut icon" href="logo.png" type="image/x-icon">
      </link>
      <link rel="stylesheet" type="text/css" href="../css/screen.css"/>
   
      <link rel="stylesheet" type="text/css" href="css/default.css" />
      <link rel="stylesheet" type="text/css" href="css/bookblock.css" />
      <!-- custom demo style -->
      <link rel="stylesheet" type="text/css" href="css/demo4.css" />
      <script src="js/modernizr.custom.js"></script>
   </head>
   <body>
   <div id="leng">
             <ul class="leng">
			   <a href="en/index.php"><img src="en/en-icon.png" alt="en logo"></a>
			   <a href="index.php"><img src="ru-icon.png" alt="ru logo"></a>
            </ul>
   </div>
      <div id="header">
      <nav id="head">
            <ul>
               <li><a href="index.php"title="главная">главная</a></li>
               <li><a href="subfolder/photogallery.html"title="фотогалерея">фотогалерея</a></li>
               <li><a href="php/comments.php"title="коментарии">коментарии</a></li>
               <li><a href="subfolder/about.html"title="О нас">О нас</a></li>
            </ul>
         </nav>
      </div>
      <div class="container">
      <div class="bb-custom-wrapper">
         <div id="bb-bookblock" class="bb-bookblock">
            <div class="bb-item">
               <div class="bb-custom-side">		
               </div>
               <div class="bb-custom-side">
                  <img src="images/1/1.jpg" alt="image01" width="360" height="539"/></a>
               </div>
            </div>
            <div class="bb-item">
               <div class="bb-custom-side">
                  <img src="images/1/2.jpg" alt="image02" width="360" height="539"/></a>
               </div>
               <div class="bb-custom-side">
                  <img src="images/1/3.jpg" alt="image03" width="360" height="539"/></a>
               </div>
            </div>
            <div class="bb-item">
               <div class="bb-custom-side">
                  <img src="images/1/4.jpg" alt="image04" width="539" height="360"/></a>
               </div>
               <div class="bb-custom-side">
                  <img src="images/1/5.jpg" alt="image05" width="539" height="360"/></a>
               </div>
            </div>
            <div class="bb-item">
               <div class="bb-custom-side">
                  <img src="images/1/6.jpg" alt="image06" width="539" height="360"/></a>
               </div>
               <div class="bb-custom-side">
                  <img src="images/1/7.jpg" alt="image07" width="539" height="360"/></a>
               </div>
            </div>
            <div class="bb-item">
               <div class="bb-custom-side">
                  <img src="images/1/8.jpg" alt="image08" width="539" height="360"/></a>
               </div>
               <div class="bb-custom-side">
                  <img src="images/1/9.jpg" alt="image09" width="539" height="360"/></a>
               </div>
            </div>
			
         </div>
         <nav>
            <a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
            <a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
            <a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
            <a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
         </nav>
      </div>

		</div><!-- /container -->
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/jquery.bookblock.js"></script>
		<script>
			var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#bb-nav-next' ),
						$navPrev : $( '#bb-nav-prev' ),
						$navFirst : $( '#bb-nav-first' ),
						$navLast : $( '#bb-nav-last' )
					},
					init = function() {
						config.$bookBlock.bookblock( {
							speed : 1000,
							shadowSides : 0.8,
							shadowFlip : 0.4
						} );
						initEvents();
					},
					initEvents = function() {
						
						var $slides = config.$bookBlock.children();

						// add navigation events
						config.$navNext.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'next' );
							return false;
						} );

						config.$navPrev.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						} );

						config.$navFirst.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'first' );
							return false;
						} );

						config.$navLast.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'last' );
							return false;
						} );
						
						// add swipe events
						$slides.on( {
							'swipeleft' : function( event ) {
								config.$bookBlock.bookblock( 'next' );
								return false;
							},
							'swiperight' : function( event ) {
								config.$bookBlock.bookblock( 'prev' );
								return false;
							}
						} );

						// add keyboard events
						$( document ).keydown( function(e) {
							var keyCode = e.keyCode || e.which,
								arrow = {
									left : 37,
									up : 38,
									right : 39,
									down : 40
								};

							switch (keyCode) {
								case arrow.left:
									config.$bookBlock.bookblock( 'prev' );
									break;
								case arrow.right:
									config.$bookBlock.bookblock( 'next' );
									break;
							}
						} );
					};

					return { init : init };

			})();
		</script>
		<script>
				Page.init();
		</script>
      <div id="footer">&copy; House Photos 2016 <br>Created by - Igor Mashchykevych</div>
   </body>
</html>