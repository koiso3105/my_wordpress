 <!-- Footer -->
        <footer class="floatcontainer">
            <h2 class="dubielplainregular"><a href="<?php bloginfo('url'); ?>">MAISEN HOUSE</a></h2>
            <div class="foot_right">
                <ul class="nav">
                <li><a href="/#banner">TOP</a></li>
                <li><a href="/#menu">お品書き</a></li>
                <li><a href="/#rice">お米へのこだわり</a></li>
                <li><a href="/#shop">店舗情報</a></li>
                </ul>
                <p>&copy; 2016 MAISEN HOUSE</p>
            </div>
            <!-- SP時 -->
            <div class="foot_copy">
                <p>&copy; 2016 MAISEN HOUSE</p>
            </div>
        </footer>
        <!-- /Footer -->
    </div>
    <!-- /Page-wrapper -->

    <!-- skrollr読み込み -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skrollr.min.js"></script>
    <script type="text/javascript">
        if( !/Android|webOS|iPhone|iPad/i.test(navigator.userAgent) ) {
         var s = skrollr.init();
        }
    </script>
    <?php wp_footer(); ?>
</body>

</html>
