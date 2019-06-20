<?php  
  $dev = false;
  //$dev = true;
  $folder = '';
 
  if (!$dev) {
    $folder = '/site/custom_scripts/styles/';
  }
?>
    <link rel="stylesheet" type="text/css" href="<?php echo $folder; ?>mc-search-programs.css?v=1" media="all" />
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">
    
    <div class="search-area"> <a name="major"></a>
      <div class="container">
        <h3>What do you want to study?</h3>
        <p>Search by keywords or interests to explore which of Messiah's 85+ academic programs would be a good fit for you.</p>
        <div class="search ie-fix">
          <form action="/majors-minors-programs" method='get'>
            <fieldset>
              <input class="btn-search ie-fix" type="submit" value="go" id='search-for-programs'>
              <div class="input">
                <input class="txt search-for-program show-search" id="show-search" type="text" name='search' value="Search for programs:" aria-labelledby="search-for-programs">
              </div>
            </fieldset>
          </form>
        </div><!-- / search -->
        <div class="btn-holder">
          <a class="btn ie-fix ug-prg" href="/majors-minors-programs"><span>View all </span>Undergraduate Programs</a><a class="btn ie-fix grad-prg" href="http://www.messiah.edu/info/20436/degrees">
          <span>View all </span>Graduate Programs</a>
        </div>
      </div>
    </div>    
      
    <div id="components">
      <div class="search-box full-screen" id="large-search-panel" style="display:none">
        <div class="back">
            <p>Back to programs</p>
        </div>

        <p class="title">Search by program names or interests:</p>
        
        <div class="block ie-fix">
            <div id="auto-complete" class="search-suggest" unselectable="on"></div>

            <input class="txt" type="text" id="program_search" name="program_search" value="" autocomplete="off">

            <input type="hidden" name="ga_count" value="1"><input type="hidden" name="ga_id" value="259d568a-d302-48b8-ad94-af8ae98d1820">
            <input class="btn-cancel" type="submit" value="x" id="cancel-search" style="display:none">

            <div class="auto-suggest-panel" style="display:none">
                <div class="sugg-info">
                    <p>Suggested search terms:</p>
                </div>
                <div class="auto-suggest-items">
                </div>
            </div>
        </div>
      </div>
    </div>
  
    <script id="autocomplete-template" type="text/x-jQuery-tmpl">
        <div id="autocomplete-item-${id}" class="auto-suggest" data-keyword="${keyword}"><span>${selection}</span>${rest}</div>
    </script>

    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-search-programs.js?v=2"></script>
