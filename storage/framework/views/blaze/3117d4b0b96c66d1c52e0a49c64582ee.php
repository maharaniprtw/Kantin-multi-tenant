<?php
if (!function_exists('__3117d4b0b96c66d1c52e0a49c64582ee')):
function __3117d4b0b96c66d1c52e0a49c64582ee($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description) || isset($descriptionTrailing)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/e435fa9fbafc66a984bbfca76b875cff.php'); ?>
<?php if (isset($__slotse435fa9fbafc66a984bbfca76b875cff)) { $__slotsStacke435fa9fbafc66a984bbfca76b875cff[] = $__slotse435fa9fbafc66a984bbfca76b875cff; } ?>
<?php if (isset($__attrse435fa9fbafc66a984bbfca76b875cff)) { $__attrsStacke435fa9fbafc66a984bbfca76b875cff[] = $__attrse435fa9fbafc66a984bbfca76b875cff; } ?>
<?php $__attrse435fa9fbafc66a984bbfca76b875cff = ['attributes' => $fieldAttributes]; ?>
<?php $__slotse435fa9fbafc66a984bbfca76b875cff = []; ?>
<?php $__blaze->pushData($__attrse435fa9fbafc66a984bbfca76b875cff); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/c32c1c04a191df213e068bdd211310a2.php'); ?>
<?php if (isset($__slotsc32c1c04a191df213e068bdd211310a2)) { $__slotsStackc32c1c04a191df213e068bdd211310a2[] = $__slotsc32c1c04a191df213e068bdd211310a2; } ?>
<?php if (isset($__attrsc32c1c04a191df213e068bdd211310a2)) { $__attrsStackc32c1c04a191df213e068bdd211310a2[] = $__attrsc32c1c04a191df213e068bdd211310a2; } ?>
<?php $__attrsc32c1c04a191df213e068bdd211310a2 = ['attributes' => $labelAttributes]; ?>
<?php $__slotsc32c1c04a191df213e068bdd211310a2 = []; ?>
<?php $__blaze->pushData($__attrsc32c1c04a191df213e068bdd211310a2); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slotsc32c1c04a191df213e068bdd211310a2['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsc32c1c04a191df213e068bdd211310a2); ?>
<?php __c32c1c04a191df213e068bdd211310a2($__blaze, $__attrsc32c1c04a191df213e068bdd211310a2, $__slotsc32c1c04a191df213e068bdd211310a2, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackc32c1c04a191df213e068bdd211310a2)) { $__slotsc32c1c04a191df213e068bdd211310a2 = array_pop($__slotsStackc32c1c04a191df213e068bdd211310a2); } ?>
<?php if (! empty($__attrsStackc32c1c04a191df213e068bdd211310a2)) { $__attrsc32c1c04a191df213e068bdd211310a2 = array_pop($__attrsStackc32c1c04a191df213e068bdd211310a2); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/8547b950468f967dbbe553e3e13fde1e.php'); ?>
<?php if (isset($__slots8547b950468f967dbbe553e3e13fde1e)) { $__slotsStack8547b950468f967dbbe553e3e13fde1e[] = $__slots8547b950468f967dbbe553e3e13fde1e; } ?>
<?php if (isset($__attrs8547b950468f967dbbe553e3e13fde1e)) { $__attrsStack8547b950468f967dbbe553e3e13fde1e[] = $__attrs8547b950468f967dbbe553e3e13fde1e; } ?>
<?php $__attrs8547b950468f967dbbe553e3e13fde1e = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots8547b950468f967dbbe553e3e13fde1e = []; ?>
<?php $__blaze->pushData($__attrs8547b950468f967dbbe553e3e13fde1e); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slots8547b950468f967dbbe553e3e13fde1e['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots8547b950468f967dbbe553e3e13fde1e); ?>
<?php __8547b950468f967dbbe553e3e13fde1e($__blaze, $__attrs8547b950468f967dbbe553e3e13fde1e, $__slots8547b950468f967dbbe553e3e13fde1e, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack8547b950468f967dbbe553e3e13fde1e)) { $__slots8547b950468f967dbbe553e3e13fde1e = array_pop($__slotsStack8547b950468f967dbbe553e3e13fde1e); } ?>
<?php if (! empty($__attrsStack8547b950468f967dbbe553e3e13fde1e)) { $__attrs8547b950468f967dbbe553e3e13fde1e = array_pop($__attrsStack8547b950468f967dbbe553e3e13fde1e); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        [STARTCOMPILEDUNBLAZE:DAkdco8zBK]<?php \Livewire\Blaze\Unblaze::storeScope("DAkdco8zBK", scope: ['attributes' => $errorAttributes->getAttributes()]) ?>[ENDCOMPILEDUNBLAZE:DAkdco8zBK]

        <?php if (isset($descriptionTrailing)): ?>
            <?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/8547b950468f967dbbe553e3e13fde1e.php'); ?>
<?php if (isset($__slots8547b950468f967dbbe553e3e13fde1e)) { $__slotsStack8547b950468f967dbbe553e3e13fde1e[] = $__slots8547b950468f967dbbe553e3e13fde1e; } ?>
<?php if (isset($__attrs8547b950468f967dbbe553e3e13fde1e)) { $__attrsStack8547b950468f967dbbe553e3e13fde1e[] = $__attrs8547b950468f967dbbe553e3e13fde1e; } ?>
<?php $__attrs8547b950468f967dbbe553e3e13fde1e = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots8547b950468f967dbbe553e3e13fde1e = []; ?>
<?php $__blaze->pushData($__attrs8547b950468f967dbbe553e3e13fde1e); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slots8547b950468f967dbbe553e3e13fde1e['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots8547b950468f967dbbe553e3e13fde1e); ?>
<?php __8547b950468f967dbbe553e3e13fde1e($__blaze, $__attrs8547b950468f967dbbe553e3e13fde1e, $__slots8547b950468f967dbbe553e3e13fde1e, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack8547b950468f967dbbe553e3e13fde1e)) { $__slots8547b950468f967dbbe553e3e13fde1e = array_pop($__slotsStack8547b950468f967dbbe553e3e13fde1e); } ?>
<?php if (! empty($__attrsStack8547b950468f967dbbe553e3e13fde1e)) { $__attrs8547b950468f967dbbe553e3e13fde1e = array_pop($__attrsStack8547b950468f967dbbe553e3e13fde1e); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slotse435fa9fbafc66a984bbfca76b875cff['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotse435fa9fbafc66a984bbfca76b875cff); ?>
<?php __e435fa9fbafc66a984bbfca76b875cff($__blaze, $__attrse435fa9fbafc66a984bbfca76b875cff, $__slotse435fa9fbafc66a984bbfca76b875cff, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStacke435fa9fbafc66a984bbfca76b875cff)) { $__slotse435fa9fbafc66a984bbfca76b875cff = array_pop($__slotsStacke435fa9fbafc66a984bbfca76b875cff); } ?>
<?php if (! empty($__attrsStacke435fa9fbafc66a984bbfca76b875cff)) { $__attrse435fa9fbafc66a984bbfca76b875cff = array_pop($__attrsStacke435fa9fbafc66a984bbfca76b875cff); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>