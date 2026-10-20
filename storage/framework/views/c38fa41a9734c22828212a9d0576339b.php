<?php
if (!function_exists('_c38fa41a9734c22828212a9d0576339b')):
function _c38fa41a9734c22828212a9d0576339b($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
extract(Flux::forwardedAttributes($attributes, [
    'tooltipPosition',
    'tooltipKbd',
    'tooltip',
]));
?>

<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'top',
    'tooltipKbd' => null,
    'tooltip' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
unset($__defaults);
?>

<?php if ($tooltip): ?>
    <?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/cfdfde50ab44559601b16649e4e1cd72.php'); ?>
<?php if (isset($__slotscfdfde50ab44559601b16649e4e1cd72)) { $__slotsStackcfdfde50ab44559601b16649e4e1cd72[] = $__slotscfdfde50ab44559601b16649e4e1cd72; } ?>
<?php if (isset($__attrscfdfde50ab44559601b16649e4e1cd72)) { $__attrsStackcfdfde50ab44559601b16649e4e1cd72[] = $__attrscfdfde50ab44559601b16649e4e1cd72; } ?>
<?php $__attrscfdfde50ab44559601b16649e4e1cd72 = ['content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slotscfdfde50ab44559601b16649e4e1cd72 = []; ?>
<?php $__blaze->pushData($__attrscfdfde50ab44559601b16649e4e1cd72); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slotscfdfde50ab44559601b16649e4e1cd72['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotscfdfde50ab44559601b16649e4e1cd72); ?>
<?php _cfdfde50ab44559601b16649e4e1cd72($__blaze, $__attrscfdfde50ab44559601b16649e4e1cd72, $__slotscfdfde50ab44559601b16649e4e1cd72, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackcfdfde50ab44559601b16649e4e1cd72)) { $__slotscfdfde50ab44559601b16649e4e1cd72 = array_pop($__slotsStackcfdfde50ab44559601b16649e4e1cd72); } ?>
<?php if (! empty($__attrsStackcfdfde50ab44559601b16649e4e1cd72)) { $__attrscfdfde50ab44559601b16649e4e1cd72 = array_pop($__attrsStackcfdfde50ab44559601b16649e4e1cd72); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>