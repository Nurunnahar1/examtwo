<?php $prefix= get_option('_prefix'); ?>
<footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script><?php echo $prefix['Created_With']; ?> <i class="ti-heart text-danger"></i> By <a href="<?php echo $prefix['Creator_url']; ?>" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards"><?php echo $prefix['Creator_name']; ?></span></a> 
            </p>
        </div>
    </footer>

	<?php wp_footer(); ?>
</body>
</html>

