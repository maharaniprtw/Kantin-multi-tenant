<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'sidebar' => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'sidebar' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sidebar): ?>
    <?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/brand.blade.php', $__blaze->compiledPath.'/68fce4406b5fd8ae120c0766bb45d83b.php'); ?>
<?php if (isset($__slots68fce4406b5fd8ae120c0766bb45d83b)) { $__slotsStack68fce4406b5fd8ae120c0766bb45d83b[] = $__slots68fce4406b5fd8ae120c0766bb45d83b; } ?>
<?php if (isset($__attrs68fce4406b5fd8ae120c0766bb45d83b)) { $__attrsStack68fce4406b5fd8ae120c0766bb45d83b[] = $__attrs68fce4406b5fd8ae120c0766bb45d83b; } ?>
<?php $__attrs68fce4406b5fd8ae120c0766bb45d83b = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slots68fce4406b5fd8ae120c0766bb45d83b = []; ?>
<?php $__blaze->pushData($__attrs68fce4406b5fd8ae120c0766bb45d83b); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots68fce4406b5fd8ae120c0766bb45d83b['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slots68fce4406b5fd8ae120c0766bb45d83b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots68fce4406b5fd8ae120c0766bb45d83b); ?>
<?php _68fce4406b5fd8ae120c0766bb45d83b($__blaze, $__attrs68fce4406b5fd8ae120c0766bb45d83b, $__slots68fce4406b5fd8ae120c0766bb45d83b, ['name', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack68fce4406b5fd8ae120c0766bb45d83b)) { $__slots68fce4406b5fd8ae120c0766bb45d83b = array_pop($__slotsStack68fce4406b5fd8ae120c0766bb45d83b); } ?>
<?php if (! empty($__attrsStack68fce4406b5fd8ae120c0766bb45d83b)) { $__attrs68fce4406b5fd8ae120c0766bb45d83b = array_pop($__attrsStack68fce4406b5fd8ae120c0766bb45d83b); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php $__blaze->ensureRequired('D:\Servbay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/brand.blade.php', $__blaze->compiledPath.'/c29c5bf0e6dd76ea435b3c9957dea43e.php'); ?>
<?php if (isset($__slotsc29c5bf0e6dd76ea435b3c9957dea43e)) { $__slotsStackc29c5bf0e6dd76ea435b3c9957dea43e[] = $__slotsc29c5bf0e6dd76ea435b3c9957dea43e; } ?>
<?php if (isset($__attrsc29c5bf0e6dd76ea435b3c9957dea43e)) { $__attrsStackc29c5bf0e6dd76ea435b3c9957dea43e[] = $__attrsc29c5bf0e6dd76ea435b3c9957dea43e; } ?>
<?php $__attrsc29c5bf0e6dd76ea435b3c9957dea43e = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slotsc29c5bf0e6dd76ea435b3c9957dea43e = []; ?>
<?php $__blaze->pushData($__attrsc29c5bf0e6dd76ea435b3c9957dea43e); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slotsc29c5bf0e6dd76ea435b3c9957dea43e['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slotsc29c5bf0e6dd76ea435b3c9957dea43e['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsc29c5bf0e6dd76ea435b3c9957dea43e); ?>
<?php _c29c5bf0e6dd76ea435b3c9957dea43e($__blaze, $__attrsc29c5bf0e6dd76ea435b3c9957dea43e, $__slotsc29c5bf0e6dd76ea435b3c9957dea43e, ['name', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackc29c5bf0e6dd76ea435b3c9957dea43e)) { $__slotsc29c5bf0e6dd76ea435b3c9957dea43e = array_pop($__slotsStackc29c5bf0e6dd76ea435b3c9957dea43e); } ?>
<?php if (! empty($__attrsStackc29c5bf0e6dd76ea435b3c9957dea43e)) { $__attrsc29c5bf0e6dd76ea435b3c9957dea43e = array_pop($__attrsStackc29c5bf0e6dd76ea435b3c9957dea43e); } ?>
<?php $__blaze->popData(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH D:\Servbay\www\kantin-multi-tenant\resources\views/components/app-logo.blade.php ENDPATH**/ ?>