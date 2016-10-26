<div class="page-wrapper">
    <?php if (!empty($page['sidebar_first'])): ?>
    <aside class="sidebar_first">
        <?php  print render($page['sidebar_first']);?>
    </aside>
    <?php endif;?>
    <div class="content-wrapper">
        <div class="content-block">
        <div>            
            <!-- login screen -->
            <div class='title'>
                <p>
                    <?php print t("Welcome to Ma'agaley Siach");?>
                </p>
            </div>
            <div class="inner">
            <!-- to register -->
                <?php if ($messages): ?>
                <div id="messages">
                    <?php print $messages; ?>
                </div>
                <?php endif; ?>
                <?php print drupal_render($page['content']['system_main']); ?>     
               
                <div class="more-options">
                    <!-- renew password -->
                    <div class="to-renew">
                        <?php print l(t('Forgot your password'),'/user/password');?>
                    </div>

                    <div class="to-register">
                        <?php print l(t('New User'),'/user/register');?>
                    </div>
            </div>
            </div>
             </div>
         </div>
        <!-- content-block -->
<<<<<<< HEAD
=======
        <div class="footer pane-panels-mini pane-innovate-logo">
            <?php print $logo_section; ?>
        </div><!-- footer -->        
>>>>>>> beec0b12bf57986c933de107d5b143b1b43f72f4

    </div><!-- content-wrapper -->    

</div><!-- page-wrapper -->
