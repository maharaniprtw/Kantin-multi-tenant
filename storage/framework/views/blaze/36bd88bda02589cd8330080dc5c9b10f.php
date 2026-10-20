<?php
if (!function_exists('__36bd88bda02589cd8330080dc5c9b10f')):
function __36bd88bda02589cd8330080dc5c9b10f($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'name' => null,
    'variant' => null,
    'size' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute on the checkbox if it has been set
// manually, but not if it has been set from the wire:model attribute...
$showName = isset($name);

if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('block flex p-1')
    ->add('rounded-lg bg-zinc-800/5 dark:bg-white/10')
    ->add($size === 'sm' ? 'h-8 py-[3px] px-[3px]' : 'h-10 p-1')
    ->add($size === 'sm' ? '-my-px h-[calc(2rem+2px)]' : '')
    ;
?>

<?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/3117d4b0b96c66d1c52e0a49c64582ee.php'); ?>
<?php if (isset($__slots3117d4b0b96c66d1c52e0a49c64582ee)) { $__slotsStack3117d4b0b96c66d1c52e0a49c64582ee[] = $__slots3117d4b0b96c66d1c52e0a49c64582ee; } ?>
<?php if (isset($__attrs3117d4b0b96c66d1c52e0a49c64582ee)) { $__attrsStack3117d4b0b96c66d1c52e0a49c64582ee[] = $__attrs3117d4b0b96c66d1c52e0a49c64582ee; } ?>
<?php $__attrs3117d4b0b96c66d1c52e0a49c64582ee = ['attributes' => $attributes]; ?>
<?php $__slots3117d4b0b96c66d1c52e0a49c64582ee = []; ?>
<?php $__blaze->pushData($__attrs3117d4b0b96c66d1c52e0a49c64582ee); ?>
<?php ob_start(); ?>
    <ui-radio-group <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> data-flux-radio-group-segmented>
        <?php echo e($slot); ?>

    </ui-radio-group>
<?php $__slots3117d4b0b96c66d1c52e0a49c64582ee['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots3117d4b0b96c66d1c52e0a49c64582ee); ?>
<?php __3117d4b0b96c66d1c52e0a49c64582ee($__blaze, $__attrs3117d4b0b96c66d1c52e0a49c64582ee, $__slots3117d4b0b96c66d1c52e0a49c64582ee, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack3117d4b0b96c66d1c52e0a49c64582ee)) { $__slots3117d4b0b96c66d1c52e0a49c64582ee = array_pop($__slotsStack3117d4b0b96c66d1c52e0a49c64582ee); } ?>
<?php if (! empty($__attrsStack3117d4b0b96c66d1c52e0a49c64582ee)) { $__attrs3117d4b0b96c66d1c52e0a49c64582ee = array_pop($__attrsStack3117d4b0b96c66d1c52e0a49c64582ee); } ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/radio/group/variants/segmented.blade.php ENDPATH**/ ?>