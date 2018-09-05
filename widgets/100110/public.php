<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '1';
    $folder = '/site/custom_scripts/styles/';
  }
?>
          <link href="<?php echo $folder; ?>mc-recognitions.css?v=<?php echo $version; ?>" rel="stylesheet">
    
					<div id="recognition">

						<h1 class="banner-heading title">Recognitions</h1>

						<table class="rec-tabs">
			  				<tbody>
							  	<tr id="sections-container">
								</tr>
							</tbody>
						</table>

						<div id="category-container">
            </div>

					</div><!-- #recognition -->

          <script id="section-template" type="text/x-jQuery-tmpl">
              <td><a data-id="${categoryId}">${categoryName}</a></td>
          </script>

          <script id="category-template" type="text/x-jQuery-tmpl">
              <h2 id="title-${categoryId}" class="strike"><span>${categoryName}</span></h2>
              <div id="category-${categoryId}" class="storycard-container">
              </div>
          </script>
          
          <script id="storycard-template" type="text/x-jQuery-tmpl">
							<div class='storycard' data-url='http://www.google.com'>
								<div class='text-section'>
									<h2>${entry_title}</h2>
									<p class='storycard-caption'>${subheading}</p>
								</div>
                {{if image != '' }}
								<div class='storycard-img-container'>
									<img src='https://www.messiah.edu/images/${image}' class="${imageClass}"/>
                  {{if link != '' }}
                  <a href="${link}"><div class='storycard-read'>Read more</div></a>
                  {{/if}}
								</div>
                {{/if}}
							</div>            
          </script>
          
          <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>    
          <script type="text/javascript" src="<?php echo $folder; ?>mc-recognitions.js?v=<?php echo $version; ?>"></script>          