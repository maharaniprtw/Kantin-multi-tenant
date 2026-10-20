<?php
if (!function_exists('__6b1a82610376a148c991de3fecc50986')):
function __6b1a82610376a148c991de3fecc50986($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'length' => null,
    'private' => false,
];
$length ??= $attributes['length'] ?? $__defaults['length']; unset($attributes['length']);
$private ??= $attributes['private'] ?? $__defaults['private']; unset($attributes['private']);
unset($__defaults);
?>

<?php
    $classes = Flux::classes()
        ->add('flex items-center gap-2 isolate w-fit')
        ->add('[&_[data-flux-input-group]]:w-auto')
?>

<?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/3117d4b0b96c66d1c52e0a49c64582ee.php'); ?>
<?php if (isset($__slots3117d4b0b96c66d1c52e0a49c64582ee)) { $__slotsStack3117d4b0b96c66d1c52e0a49c64582ee[] = $__slots3117d4b0b96c66d1c52e0a49c64582ee; } ?>
<?php if (isset($__attrs3117d4b0b96c66d1c52e0a49c64582ee)) { $__attrsStack3117d4b0b96c66d1c52e0a49c64582ee[] = $__attrs3117d4b0b96c66d1c52e0a49c64582ee; } ?>
<?php $__attrs3117d4b0b96c66d1c52e0a49c64582ee = ['attributes' => $attributes]; ?>
<?php $__slots3117d4b0b96c66d1c52e0a49c64582ee = []; ?>
<?php $__blaze->pushData($__attrs3117d4b0b96c66d1c52e0a49c64582ee); ?>
<?php ob_start(); ?>
    <ui-otp
        <?php echo e($attributes->class($classes)); ?>

        data-flux-otp
        data-flux-control
        role="group"
        data-flux-input-aria-label="<?php echo e(__('Character {current} of {total}')); ?>"
    >
        <?php if($slot->isEmpty() && $length): ?>
            <?php for($i = 0; $i < $length; $i++): ?>
                <?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/otp/input.blade.php', $__blaze->compiledPath.'/f0b004d7a1c70e597b835f75c19a0ed4.php'); ?>
<?php $__blaze->pushData([]); ?>
<?php __f0b004d7a1c70e597b835f75c19a0ed4($__blaze, [], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
            <?php endfor; ?>
        <?php else: ?>
            <?php echo e($slot); ?>

        <?php endif; ?>
    </ui-otp>
<?php $__slots3117d4b0b96c66d1c52e0a49c64582ee['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots3117d4b0b96c66d1c52e0a49c64582ee); ?>
<?php __3117d4b0b96c66d1c52e0a49c64582ee($__blaze, $__attrs3117d4b0b96c66d1c52e0a49c64582ee, $__slots3117d4b0b96c66d1c52e0a49c64582ee, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack3117d4b0b96c66d1c52e0a49c64582ee)) { $__slots3117d4b0b96c66d1c52e0a49c64582ee = array_pop($__slotsStack3117d4b0b96c66d1c52e0a49c64582ee); } ?>
<?php if (! empty($__attrsStack3117d4b0b96c66d1c52e0a49c64582ee)) { $__attrs3117d4b0b96c66d1c52e0a49c64582ee = array_pop($__attrsStack3117d4b0b96c66d1c52e0a49c64582ee); } ?>
<?php $__blaze->popData(); ?><?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/otp/index.blade.php ENDPATH**/ ?>