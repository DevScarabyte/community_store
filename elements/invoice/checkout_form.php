<?php defined('C5_EXECUTE') or die("Access Denied.");
extract($vars);
?>

<p><?= t("An invoice will be sent to you upon ordering")?></p>

<script type="text/javascript">
    $(function() {
        $('div[data-payment-method-id="<?= $pmID; ?>"] .store-btn-complete-order').click(function(){
            $(this).attr({disabled: true}).val("<?= t('Processing...'); ?>");
            $(this).closest('form').submit();
        });
    });
</script>
