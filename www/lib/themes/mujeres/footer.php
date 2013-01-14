        </div>
        
        <div class="footer">
            <div class="footer-wrapper">
                <div class="footer-menu">
                    <h4><?php echo __("Beauty"); ?></h4>
                    <ul>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Fashion"))); ?>" title="<?php echo __("Fashion"); ?>"><?php echo __("Fashion"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Makeup"))); ?>" title="<?php echo __("Makeup"); ?>"><?php echo __("Makeup"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Clothing"))); ?>" title="<?php echo __("Clothing"); ?>"><?php echo __("Clothing"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Shoes"))); ?>" title="<?php echo __("Shoes"); ?>"><?php echo __("Shoes"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Accessories"))); ?>" title="<?php echo __("Accessories"); ?>"><?php echo __("Accessories"); ?></a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h4><?php echo __("_Home"); ?></h4>
                    <ul>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Garden"))); ?>" title="<?php echo __("Garden"); ?>"><?php echo __("Garden"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Decoration"))); ?>" title="<?php echo __("Decoration"); ?>"><?php echo __("Decoration"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Saving"))); ?>" title="<?php echo __("Saving"); ?>"><?php echo __("Saving"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Prevention of accidents"))); ?>" title="<?php echo __("Prevention of accidents"); ?>"><?php echo __("Accidents"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Appliances"))); ?>" title="<?php echo __("Appliances"); ?>"><?php echo __("Appliances"); ?></a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h4><?php echo __("Family"); ?></h4>
                    <ul>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Maternity"))); ?>" title="<?php echo __("Maternity"); ?>"><?php echo __("Maternity"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Children"))); ?>" title="<?php echo __("Children"); ?>"><?php echo __("Children"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Teens"))); ?>" title="<?php echo __("Teens"); ?>"><?php echo __("Teens"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Marriage"))); ?>" title="<?php echo __("Marriage"); ?>"><?php echo __("Marriage"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Education"))); ?>" title="<?php echo __("Education"); ?>"><?php echo __("Education"); ?></a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h4><?php echo __("Health"); ?></h4>
                    <ul>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Exercise"))); ?>" title="<?php echo __("Exercise"); ?>"><?php echo __("Exercise"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Diets"))); ?>" title="<?php echo __("Diets"); ?>"><?php echo __("Diets"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Allergies"))); ?>" title="<?php echo __("Allergies"); ?>"><?php echo __("Allergies"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Infections"))); ?>" title="<?php echo __("Infections"); ?>"><?php echo __("Infections"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Skin"))); ?>" title="<?php echo __("Skin"); ?>"><?php echo __("Skin"); ?></a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h4><?php echo __("Sexuality"); ?></h4>
                    <ul>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Contraceptives"))); ?>" title="<?php echo __("Contraceptives"); ?>"><?php echo __("Contraceptives"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Couple"))); ?>" title="<?php echo __("Couple"); ?>"><?php echo __("Couple"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Sex and Relationships"))); ?>" title="<?php echo __("Sex and Relationships"); ?>"><?php echo __("Sex"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Sexually Transmitted Diseases"))); ?>" title="<?php echo __("Sexually Transmitted Diseases"); ?>"><?php echo __("Diseases"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Kamasutra"))); ?>" title="<?php echo __("Kamasutra"); ?>"><?php echo __("Kamasutra"); ?></a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h4><?php echo __("Others"); ?></h4>
                    <ul>
                        <li><a href="<?php echo path("blog/tag/". slug(__("News"))); ?>" title="<?php echo __("News"); ?>"><?php echo __("News"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Celebrities"))); ?>" title="<?php echo __("Celebrities"); ?>"><?php echo __("Celebrities"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Brides"))); ?>" title="<?php echo __("Brides"); ?>"><?php echo __("Brides"); ?></a></li>
                        <li><a href="<?php echo path("blog/tag/". slug(__("Horoscopes"))); ?>" title="<?php echo __("Horoscopes"); ?>"><?php echo __("Horoscopes"); ?></a></li>
                    </ul>
                </div>

                <div class="clear"></div>
            </div>

            <div class="footer-copyright">
                <p><?php echo __("This site is licensed under a"); ?> <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank" rel="nofollow">Creative Commons Attribution 3.0 License</a>.</p>
            </div>
        </div>
        
        <?php
            $this->js("$this->themeRoute/js/social.js", NULL, FALSE, TRUE); 
            
            echo $this->getJs(); 



            echo display('<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 4);

            display('<script type="text/javascript">
                        var sc_project = 8621664; 
                        var sc_invisible = 1; 
                        var sc_security = "3b97de20"; 
                    </script>
                    <script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>', 4);
        ?>
    </body>
</html>