<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$extraMenu = $view['menu']->render('extra');
?>
<!-- start: sidebar-header -->
<div class="sidebar-header">
    <!-- brand -->
    <a class="mautic-brand<?php echo (!empty($extraMenu)) ? ' pull-left pl-0 pr-0' : ''; ?>" href="#">
    <img src="https://res.cloudinary.com/ackwire/image/upload/v1658947231/aw_logo_cgvqwy.png" style="width:100%; max-width:230px; margin:-65px 0px 0px -10px;" />
</a>
    <?php if (!empty($extraMenu)): ?>
        <div class="dropdown extra-menu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-chevron-down fa-lg"></i>
            </a>
            <?php echo $extraMenu; ?>
        </div>
    <?php endif; ?>
    <!--/ brand -->
</div>
<!--/ end: sidebar-header -->

<div class="sidebar-content">
    <div class="scroll-content slimscroll">
        <nav class="nav-sidebar">
            <?php echo $view['content']->getCustomContent('menu.above', $mauticTemplateVars); ?>
            <?php echo $view['menu']->render('main'); ?>

            <ul class="nav sidebar-left-dark">
                <li class="hidden-xs">
                    <a href="javascript:void(0)" data-toggle="minimize" class="sidebar-minimizer"><span class="direction icon pull-left fa"></span><span class="nav-item-name pull-left text"><?php echo $view['translator']->trans('mautic.core.menu.left.collapse'); ?></span></a>
                </li>
            </ul>
        </nav>
    </div>
</div>