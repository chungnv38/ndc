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
<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="flash <?= h($class) ?>"><?= h($message) ?></div>