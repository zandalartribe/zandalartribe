        <p class="copyright">&copy; 2019<?php if (date('Y') > 2019) { echo '-' . date('Y'); } ?> All rights reserved by the authors. World of Warcraft&reg; and Warcraft&reg; are trademarks or registered trademarks of Blizzard Entertainment, Inc., in the U.S. and/or other countries.</p>

        <p class="theme-switcher">
            <a href="#" onClick="toggleTheme('light');">Light theme</a> | <a href="#" onClick="toggleTheme('dark');">Dark theme</a>
        </p>
        
    </div> <!-- /wrapper -->

    <?php wp_footer(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146404656-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-146404656-1', 'www.zandalartribe.eu');
    </script>

    <!-- Set a cookie for toggling theme -->
    <script>
        function toggleTheme(theme) {
            document.cookie = "theme=" + theme + "; path=/";
            window.location.reload();
        }
    </script>

</body>

</html>
