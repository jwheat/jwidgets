<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/bottom_supplements.php';
    ?>
    
  </div>
<?php
    if ($oneColumnLayout == false) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/site/custom_scripts/mcnews/mcnews_column.php';
    }
?>

     
<?php
     if (!isset($indexPage) || !$indexPage) {
         ?>
        </div>
        </div>
        </div>
        </div>
<?php
     } ?>

<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/structure/footer.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/closing_javascript.php';

    if (defined('ANALYTICS_INCLUDE') && ANALYTICS_INCLUDE != '') {
        //print ANALYTICS_INCLUDE;
    }
?>
		</div>
        
    </body>
</html>