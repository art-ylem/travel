 <div class="footer">
            <div class="copy">
                <a href="/"><span>C</span>hoose<span>C</span>ravel</a>
                <p>Choose Travel 2017<br>
                   Все права защищены.<br>
                   Email: <?php bloginfo('admin_email'); ?></p>
            </div>
            <div class="menu-foot">
                <h2>Страницы</h2>
                <?php wp_nav_menu(array(
                'theme_location' => 'menu',
                'container' => false,
                'menu_class' => '',
                'before' => '- ')); ?>
            </div>

             <?php if(!dynamic_sidebar('footer')): ?>
            <div class="menu-foot">
            <h2>Категории</h2>
            </div>
            <?php endif; ?>

        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>