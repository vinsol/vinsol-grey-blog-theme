<?php
/**
 * @package WordPress
 * @subpackage Starkers
 */
?>

	</div><!-- end content -->
			
		</div><!--end main-->
		<div class="page-bg-bottom"></div>
		
	</div><!-- end #top -->
	

	
</div><!-- end #wrapper -->

<div class='wrapper' id='footerwrap'>
      <div id="footer">
        <div class='cols'>
          <div class="col">
            <div class='title know'>
              <span>Share the <span class='blue'>knowledge</span></span>
            </div>
            <hr/>
            
          </div>
        
          <div class="col">
            <div class='title clients'>
              <span>Clients <span class='blue'>speak</span></span>
            </div>
            <hr/>
            
          </div>
        
          <div class="col">
            <div class='title twitter'>
              <span>Vinsol on <span class='blue'>Twitter</span></span>
            </div>
            <hr/>
            <div class='txt'>
                
                <script type="text/javascript" charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script type="text/javascript">
                      new TWTR.Widget({
                        version: 2,
                        type: 'search',
                        search: 'from:the_vinsol OR @the_vinsol',
                        interval: 30000,
                        title: '',
                        subject: '',
                        width: 310,
                        height: 165,
                        theme: {
                          shell: {
                            background: '#000000',
                            color: '#ffffff'
                          },
                          tweets: {
                            background: '#000000',
                            color: '#989898',
                            links: '#4bb6f8'
                          }
                        },
                        features: {
                          scrollbar: false,
                          loop: true,
                          live: true,
                          behavior: 'default'
                        }
                      }).render().start();
                    </script>
                
                
            </div>
            <span class='twitterFollow'><a href='http://www.twitter.com/the_vinsol'>Follow us on Twitter</a></span>
          </div>
        
        </div>
        <div class='btmFooter'>
          <div class='footerNav'>
            <a href='http://vinsol.com/'>Home</a> | 
            <a href='http://vinsol.com/about'>About Us</a> | 
            <a href='http://vinsol.com/Our_Services'>Our Services</a> | 
            <a href='http://vinsol.com/portfolio'>Portfolio</a> | 
            <a href='http://vinsol.com/testimonials'>Testimonials</a> | 
            <a href='http://vinsol.com/careers'>Careers</a> | 
            <a href='http://vinsol.com/blog'>Blog</a> | 
            <a href='http://vinsol.com/contact'>Contact Us</a> | 
            <a href='http://vinsol.com/sitemap'>Sitemap</a>
          </div>
          <div class='footerTxt'>
            Copyright &#xA9; 2000-2012 VinSol.com. All rights reserved<br/>
            Reproduction in whole or any form without express written permission is prohibited.
          </div>
        </div>
      </div>
      <!--end footer-->
    </div>

    <script type="text/javascript">


      $(document).ready( function(){

    	var testimonialUrl = 'http://vinsol.com/testimonials';
    		$.ajax(
    			   { 'url' : testimonialUrl,
    				 'type' : 'GET',
    				 'data' : { 'format' : 'json'},
    				 'dataType' : 'json',
    				 'success' : function(data){
    				   var id = Math.floor(Math.random()*(data.length-1));
    					 var newHTML = "<div class='txt'>" +
    					  "<span class='clientImg'><img src='../system/avatars/"+data[id].testimonial.id+"/small/"+data[id].testimonial.avatar_file_name+"'/></span>" + 
    					  "<span class='clientInfo'><a href='http://vinsol.com/testimonials'>"+data[id].testimonial.fullname+", "+data[0].testimonial.about+"</a></span>"
    					  + "<div class='txtBody'>"+ data[id].testimonial.comments.substring(0,180)+"...</div></div>" +
    					  "<a href='http://vinsol.com/testimonials' target='_blank' class='smallBtn'><strong>Read More</strong></a>";
    					  $('.cols .col:first').next().append(newHTML);
    					}
    				});

    	/*var url = 'http://api.meetup.com/2/events/?key=6c44664169336b58137f403044148&group_urlname=delhi-ruby&group_id=527930&status=upcoming&page=1&order=time&desc=true';

    	$.ajax(
    		   { 'url' :url,
    			 'type' : 'GET',
    			 'dataType' : 'jsonp',
    			 'success' : function(data){
    			    var newHTML = "<div class='txt'>" +
      				"<a href='"+data.results[0]['event_url']+"' target='_blank' class='txtTitle'>" + 
    				data.results[0]['name'].substring(0,60)+"...</a>"
      				+ "<div class='txtBody'>"+ data.results[0]['description'].substring(0,180)+"...</div></div>" +
    				"<a href='"+data.results[0]['event_url']+"' target='_blank' class='smallBtn'><strong>Read More</strong></a>";
    																																																					  				$(newHTML).appendTo('.cols .col:first');
    						   }
    			});*/


    		});
      </script>

<?php wp_footer(); ?>

</body>
</html>