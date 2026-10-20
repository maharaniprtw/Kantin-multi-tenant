<?php
if (!function_exists('_cfdfde50ab44559601b16649e4e1cd72')):
function _cfdfde50ab44559601b16649e4e1cd72($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
$__defaults = [
    'interactive' => null,
    'position' => 'top',
    'align' => 'center',
    'content' => null,
    'kbd' => null,
    'toggleable' => null,
];
$interactive ??= $attributes['interactive'] ?? $__defaults['interactive']; unset($attributes['interactive']);
$position ??= $attributes['position'] ?? $__defaults['position']; unset($attributes['position']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$content ??= $attributes['content'] ?? $__defaults['content']; unset($attributes['content']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
$toggleable ??= $attributes['toggleable'] ?? $__defaults['toggleable']; unset($attributes['toggleable']);
unset($__defaults);
?>

<?php
// Support adding the .self modifier to the wire:model directive...
if (($wireModel = $attributes->wire('model')) && $wireModel->directive && ! $wireModel->hasModifier('self')) {
    unset($attributes[$wireModel->directive]);

    $wireModel->directive .= '.self';

    $attributes = $attributes->merge([$wireModel->directive => $wireModel->value]);
}
?>

<?php if ($toggleable): ?>
    <ui-dropdown position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/2b578bf885e4abc6a939a63eed031c81.php'); ?>
<?php if (isset($__slots2b578bf885e4abc6a939a63eed031c81)) { $__slotsStack2b578bf885e4abc6a939a63eed031c81[] = $__slots2b578bf885e4abc6a939a63eed031c81; } ?>
<?php if (isset($__attrs2b578bf885e4abc6a939a63eed031c81)) { $__attrsStack2b578bf885e4abc6a939a63eed031c81[] = $__attrs2b578bf885e4abc6a939a63eed031c81; } ?>
<?php $__attrs2b578bf885e4abc6a939a63eed031c81 = ['kbd' => $kbd]; ?>
<?php $__slots2b578bf885e4abc6a939a63eed031c81 = []; ?>
<?php $__blaze->pushData($__attrs2b578bf885e4abc6a939a63eed031c81); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slots2b578bf885e4abc6a939a63eed031c81['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots2b578bf885e4abc6a939a63eed031c81); ?>
<?php _2b578bf885e4abc6a939a63eed031c81($__blaze, $__attrs2b578bf885e4abc6a939a63eed031c81, $__slots2b578bf885e4abc6a939a63eed031c81, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack2b578bf885e4abc6a939a63eed031c81)) { $__slots2b578bf885e4abc6a939a63eed031c81 = array_pop($__slotsStack2b578bf885e4abc6a939a63eed031c81); } ?>
<?php if (! empty($__attrsStack2b578bf885e4abc6a939a63eed031c81)) { $__attrs2b578bf885e4abc6a939a63eed031c81 = array_pop($__attrsStack2b578bf885e4abc6a939a63eed031c81); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-dropdown>
<?php else: ?>
    <ui-tooltip position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip <?php if($interactive): ?> interactive <?php endif; ?>>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/2b578bf885e4abc6a939a63eed031c81.php'); ?>
<?php if (isset($__slots2b578bf885e4abc6a939a63eed031c81)) { $__slotsStack2b578bf885e4abc6a939a63eed031c81[] = $__slots2b578bf885e4abc6a939a63eed031c81; } ?>
<?php if (isset($__attrs2b578bf885e4abc6a939a63eed031c81)) { $__attrsStack2b578bf885e4abc6a939a63eed031c81[] = $__attrs2b578bf885e4abc6a939a63eed031c81; } ?>
<?php $__attrs2b578bf885e4abc6a939a63eed031c81 = ['kbd' => $kbd]; ?>
<?php $__slots2b578bf885e4abc6a939a63eed031c81 = []; ?>
<?php $__blaze->pushData($__attrs2b578bf885e4abc6a939a63eed031c81); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slots2b578bf885e4abc6a939a63eed031c81['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots2b578bf885e4abc6a939a63eed031c81); ?>
<?php _2b578bf885e4abc6a939a63eed031c81($__blaze, $__attrs2b578bf885e4abc6a939a63eed031c81, $__slots2b578bf885e4abc6a939a63eed031c81, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack2b578bf885e4abc6a939a63eed031c81)) { $__slots2b578bf885e4abc6a939a63eed031c81 = array_pop($__slotsStack2b578bf885e4abc6a939a63eed031c81); } ?>
<?php if (! empty($__attrsStack2b578bf885e4abc6a939a63eed031c81)) { $__attrs2b578bf885e4abc6a939a63eed031c81 = array_pop($__attrsStack2b578bf885e4abc6a939a63eed031c81); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-tooltip>
<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php ENDPATH**/ ?>