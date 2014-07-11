<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('GivMobile') . ' | ' . 'Error'; ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		//echo $this->Html->css('all');
		echo $this->Html->css('customer.datatable');
		echo  (strtolower($this->name) != 'support') ? $this->Html->css('jquery-ui/jquery-ui-1.8.20.custom') : null;

		echo (strtolower($this->name) != 'support' || $this->params['action'] == 'map' || $this->params['action'] == 'coverage') ? $this->Html->script('jquery-1.7.2.min') : null;
                echo (strtolower($this->name) != 'support') ?  $this->Html->script('feedback.js') : null;
		echo (strtolower($this->name) != 'support') ? $this->Html->script('jquery-ui-1.8.20.custom.min') : null;
		echo (strtolower($this->name) != 'support') ? $this->Html->script('jquery.dataTables-1.9.2.min') : null;
		echo (strtolower($this->name) != 'support') ? $this->Html->script('jquery.maskedinput-1.3.min') : null;
		echo (strtolower($this->name) != 'support') ? $this->Html->script('jquery.form') : null;

		echo $this->fetch('meta');
		echo $this->fetch('css');
                
                echo $this->fetch('script');
            
  
      ?>        
       	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
	<meta name="viewport" content="width=1000" />
        <meta name="MobileOptimized" content="1000" /> <!-- Windows Phone -->
        <title>GIVMobile</title>
        <link rel="stylesheet" media="all" href="/css/all.css" type="text/css" />>
        <?php //echo (strtolower($this->name) == 'plans' || strtolower($this->name) == 'pages') ? '<link href="/css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet" />' : null; ?>
        <!-- <link href="/css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet" /> -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600italic,600,700,700italic,800,800italic,300italic' rel='stylesheet' type='text/css' />
        <?php echo (strtolower($this->name) == 'support' && $this->params['action'] == 'faq') ? '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>' : null; ?> 
        <!-- <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script> -->
        <?php //echo (strtolower($this->name) == 'plans' || strtolower($this->name) == 'pages') ? '<script type="text/javascript" src="/js/jquery.main.js"></script>' : null; ?>
        <?php echo (strtolower($this->name) != 'customers' && $this->params['action'] != 'map' && $this->params['action'] != 'get_hist' && $this->params['action'] != 'get_contrib_hist' 
                && $this->params['action'] != 'get_contrib_detail' && $this->params['action'] != 'update_shipping' && $this->params['action'] != 'view_hist') ? '<script type="text/javascript" src="/js/jquery.main.js"></script>' : null; ?>


<!-- This script fixes the webkit rounding bug, i.e. divs randomly jumping in chrome -->
<script type="text/javascript">
$(document).ready(function() {
    reCenterViewport();
})

$(window).resize(function() {
    reCenterViewport();
})

function reCenterViewport() {
        if ($.browser.webkit)   {
                var html = $('html');
                html.css('margin-left', '0');
                if ($(document).width()%2 > 0) {
                        html.css('margin-left', '-1px');
                }
        }
}
</script>

<?php //Analytics
if(env('HTTP_HOST') == 'givmobile.com') 
{
 echo '
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-547798-13\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>';
}
?>

</head>
<body class="<?php echo strtolower($this->name); ?>">

<?php
                        echo $this->element('header');
                ?>
        <!-- wrapper -->
        <div id="wrapper">
                <div id="page">
                        <!-- main -->
                        <div id="main">
                                <div id="feedback">
                                        <?php echo (strtolower($this->name) != 'support') ? $this->Html->image("https://assets.zendesk.com/external/zenbox/images/tab_support.png", array('id' => 'feedback-button')) : null; ?>
                                </div>


                                <?php echo (strtolower($this->name) != 'support') ? $this->element('Zendesk.ticket-form') : null;

                                echo '
                                <!-- twocolumns -->
                                <div id="twocolumns">
                                        <!-- headline -->
                                        <div class="headline">
                                                <form class="search-form" action="#">
                                                        <!--<fieldset>
                                                                <legend class="none">form</legend>
                                                                <input tabindex="9" accesskey="4" type="text" value="Search the site" title="text" />
                                                                <input tabindex="10" type="submit" value="Search" />
                                                        </fieldset>-->
                                                        <!--<fieldset>-->
                                                        <div class="search-results">
                                                              <script>
                                                                          (function() {
                                                                            var cx = \'018250365592696400256:h1oma7ayueq\';
                                                                            var gcse = document.createElement(\'script\');
                                                                            gcse.type = \'text/javascript\';
                                                                            gcse.async = true;
                                                                            gcse.src = (document.location.protocol == \'https:\' ? \'https:\' : \'http:\') +
                                                                                \'//www.google.com/cse/cse.js?cx=\' + cx;
                                                                            var s = document.getElementsByTagName(\'script\')[0];
                                                                            s.parentNode.insertBefore(gcse, s);
                                                                          })();
                                                                        </script>
                                                                        <gcse:searchbox-only></gcse:searchbox-only>
                                                        </div>
                                                        <!-- </fieldset>-->
                                                </form>
                                                <h1>Error</h1>
                                        </div>
				
					<h2 class="h2">NO MORE. 404. NO MORE. 404.</h2>	
					';?> 


                                   

                        </div>

                </div>
                
                <?php echo $this->element('/Footer/bottom-panel'); ?>
                 
        </div>

</body>
</html>
