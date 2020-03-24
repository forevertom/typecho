<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
    <?php _e('由 <a href="http://www.tom1688.com">Tom</a>定制'); ?>
    <p><a href="http://beian.miit.gov.cn">工业和信息化部备案管理系统网站</a>·渝ICP备20002155号</p>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
