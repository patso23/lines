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
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="<?php echo $protocol;?>://www.facebook.com/2008/fbml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('Giv Mobile - No Contract Cell Phone Service - 8% Of Monthly Plan Goes to Charity | Save Money. Save the World. ') . ' | ' . $this->fetch('title'); ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		//echo $this->Html->css('all');
		echo $this->Html->css('fn');
		echo $this->Html->css('oa');
		echo $this->Html->css('mbl');
		echo $this->Html->css($protocol.'://fonts.googleapis.com/css?family=Roboto:400,300,500,700');
		echo $this->Html->css($protocol.'://fonts.googleapis.com/css?family=Open+Sans:400,300,600'); 
		echo $this->Html->css('customer.datatable');
		echo  (strtolower($this->name) != 'support') ? $this->Html->css('jquery-ui/jquery-ui-1.8.20.custom') : null;

        echo /*(strtolower($this->name) != 'support' || $this->params['action'] == 'map' || strtolower($this->name) == 'coverage')*/  $this->Html->script('jquery-1.7.2.min');
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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">

	        
	<meta property="fb:app_id" content="485831581439155" />
    <title>GIVMobile</title>
    <link rel="stylesheet" media="all" href="/css/all.css" type="text/css" />
    <?php //echo (strtolower($this->name) == 'plans' || strtolower($this->name) == 'pages') ? '<link href="/css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet" />' : null; ?>
    <!-- <link href="/css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet" /> -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600italic,600,700,700italic,800,800italic,300italic' rel='stylesheet' type='text/css' />
    <?php echo (strtolower($this->name) == 'support' && $this->params['action'] == 'faq') ? '<script type="text/javascript" src="'.$protocol.'://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>' : null; ?> 
    <!-- <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script> -->
    <?php //echo (strtolower($this->name) == 'plans' || strtolower($this->name) == 'pages') ? '<script type="text/javascript" src="/js/jquery.main.js"></script>' : null; ?>
    <?php echo (strtolower($this->name) != 'customers' && $this->params['action'] != 'map' && $this->params['action'] != 'get_hist' && $this->params['action'] != 'get_contrib_hist' 
            && $this->params['action'] != 'get_contrib_detail' && $this->params['action'] != 'update_shipping' && $this->params['action'] != 'view_hist' && $this->params['action'] != 'usage') ? '<script type="text/javascript" src="/js/jquery.main.js"></script>' : null; ?>
    
    <?php echo $this->Html->script('default');?>

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
//if(env('HTTP_HOST') == 'givmobile.com') 
//{
 /*echo '
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-547798-13\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>';*/
//}
?>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
 var ua = navigator.userAgent.toLowerCase(),
 platform = navigator.platform.toLowerCase();
 platformName = ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0],
 isMobile = /ios|android|webos/.test(platformName);

 if (!isMobile) {
  window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
  d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
  _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
  $.src='//v2.zopim.com/?27WdmaeiP5QWtEVI2Fos2XHE7y8JL3ws';z.t=+new Date;$.
  type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
 }
</script>
<!--End of Zopim Live Chat Script-->


<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-539724ed6d47dd15"></script>



<!-- giv2save -->
<?php 
    
    if($this->name == 'Promos' && $this->params['action'] == 'view') 
    {
       echo '<script type="text/javascript"> if (typeof hmtracker == \'undefined\') { var hmt_script = document.createElement(\'script\'), hmt_purl = encodeURIComponent(location.href).replace(\'.\', \'~\');  hmt_script.type = "text/javascript";    hmt_script.src = "//www.giv2save.com:443/tracking/?hmtrackerjs=Giv2Save~Transfer~Pages&uid=a4c87348299cb0af893c2e52c08f0000e1bd55dc&purl="+hmt_purl; document.getElementsByTagName(\'head\')[0].appendChild(hmt_script);}</script>'; 

    }
?>

</head>
<body class="<?php echo strtolower($this->name); echo (isset($private) && $private) ? ' private' : null;?>">
    <!-- Google Tag Manager -->

    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TVC83Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TVC83Z');</script>

<!-- End Google Tag Manager -->


    <?php echo $this->element('header'); ?>

    <!-- wrapper -->
    <div id="wrapper">
        <div id="page">
            <!-- main -->
            <div id="main">

<!--
                <div id="feedback">
		<?php echo (strtolower($this->name) != 'support') ? $this->Html->image($protocol."://assets.zendesk.com/external/zenbox/images/tab_support.png", array('id' => 'feedback-button')) : null; ?>
                </div>
-->
                <?php echo (strtolower($this->name) != 'support') ? $this->element('Zendesk.ticket-form') : null;?>


                <?php   if(strtolower($this->name) != 'pages')
                {
                                
                    echo '
                                <!-- twocolumns -->
                                <div id="twocolumns">
                                        <!-- headline -->
                                        <div class="headline'; if(empty($cart_total)) { echo "ha!"; }; echo '">
                                                <!--<form class="search-form" action="#">
                                                        <!--<fieldset>
                                                                <legend class="none">form</legend>
                                                                <input tabindex="9" accesskey="4" type="text" value="Search the site" title="text" />
                                                                <input tabindex="10" type="submit" value="Search" />
                                                        </fieldset>-->
                                                        <!--<fieldset>-->
                                                        <!--<div class="search-results">
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
                                                        </div>-->
                                                        <!-- </fieldset>-->
                                                </form>
                                                <h1><span>'; echo ucfirst($this->fetch('title')) . '</span> '; 
                                                        $pins_in_cart = $this->Session->read('pins_in_cart');
                                                        $type = ($pins_in_cart) ? 'cards_customer' : 'all';
                                                        echo (!empty($cart_total)) ? 
                                                            $this->Html->link('' . CakeNumber::currency($cart_total, 'USD', array('after' => false)), array('plugin' => null, 'controller' => 'orders', 'action' => 'view_cart', $type), array('id' => 'cartTotal')) 
                                                            : null; 
                                                echo '</h1>
                                        </div>
                                        <div class="sub-header">
                                        <!-- breadcrumbs -->
                                                <div class="breadcrumbs-holder">
                                                        <span class="title">You are here:</span>
                                                        <ul class="breadcrumbs">
                                                                <li><a href="/pages/">Home</a></li>
                                                                <li><a href="'; echo $parent_url; echo '">'; echo $breadcrumb_title; echo '</a></li>
                                                                <li><a href="'; echo $breadcrumb_url; echo'">'; echo ucfirst($action); echo '</a></li>
                                                        </ul>
                                                </div>
						<div class="fb-holder">'; ?>

						<!-- Go to your Addthis.com Dashboard to update any options -->
						<div class="addthis_sharing_toolbox"></div>

<?php echo '

                    </div><div style="clear:both;"></div></div>';
                                            
                    echo $this->Session->flash(); 

                    echo $this->fetch('content'); 
                    

                    if(file_exists(APP . 'View/' . 'Elements/' . $this->name . '/' . strtolower($this->name) . '_menu.ctp'))
                    {
                        $autobill_actions = array('update_autobill', 'view_autobill', 'change_status', 'view_hist', 'autobill');

                        if($this->params['action'] != 'reset_password' && !in_array($this->params['action'], $autobill_actions))
                        {
                            echo $this->element($this->name . '/' . strtolower($this->name) . '_menu'); 
                        }
                        else if($this->params['action'] != 'reset_password')
                        {
                            echo $this->element('CreditCards/creditcards_menu');
                        }
                    }
                               				 
                }
                else
                {
                        echo $this->Session->flash();
                        echo $this->fetch('content');
                        
                }?>

                        </div>

                </div>
                
                <?php echo $this->element('/Footer/bottom-panel'); ?>

                 
        </div>

</body>
</html>
