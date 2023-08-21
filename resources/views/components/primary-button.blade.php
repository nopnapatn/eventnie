<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-lg bg-black text-white w-20 h-10']) }}>
    {{ $slot }}
</button>