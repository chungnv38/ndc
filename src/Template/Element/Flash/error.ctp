<script>
    $(function() {
        $(".flash.message").each(function() {
            var left = ($(window).width() - $(this).width())/2;
            $(this).offset({left:left});
        });
        setTimeout(function() {
            $(".flash.message").hide();
        }, 5000);
    });
</script>
<div class="flash message error" onclick="this.classList.add('hidden');"><?= h($message) ?></div>