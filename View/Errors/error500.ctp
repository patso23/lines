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
 * @package       Cake.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php $this->assign('title', 'Error'); ?>
<div id="twocolumns"><div id="container">
<h2 style="display:none;"><?php echo $name; ?></h2>
<h2 class="e500-header">TEMPORARILY UNAVAILABLE</h2>
<p class="e500-error">
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php printf(
		__d('cake', 'We\'re sorry, there was a problem communicating with our servers. Please try again later.')
	); ?>
</p>
	<p class="e500-error">So, what to do now? You can:</p>

	<div class="e500-left">
	 <p>Look at a photo of cute goats looking all "innocent"</p>
         <img src="/img/404goats.jpg" />
        </div>
        <div class="e500-right">
	 <p>Watch this video we paid money to have made</p>
         <iframe width="375" height="211" src="http://www.youtube.com/embed/yyz2Ua40TOM?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="e500-or">
         <p>
          Ultimately, you can do what reasonable people usually do: go <a href="/">home</a> and start over, cause home is nice
         </p>
        </div>

</div></div>
<?php
if (Configure::read('debug') > 0 ):
	echo $this->element('exception_stack_trace');
endif;
?>
