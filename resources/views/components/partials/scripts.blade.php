{{-- <script>
    document.addEventListener('livewire:navigated', function(){
        console.log('sadasds');
        try{
            function makeKeyboardNavigable(container, options = {}) {
    const children = [...container.children].filter(el => el instanceof HTMLElement);
    let currentIndex = -1;

    const onSelect = options.onSelect || ((el) => el.click?.());
    const onEscape = options.onEscape || (() => {});
    const activeClass = options.activeClass || 'bg-gray-200';
    const loop = options.loop ?? true;

    const resetFocus = () => {
        children.forEach(el => el.classList.remove(activeClass));
    };

    const updateFocus = () => {
        resetFocus();
        if (children[currentIndex]) {
            children[currentIndex].classList.add(activeClass);
            children[currentIndex].focus?.();
        }
    };

    container.addEventListener('keydown', (e) => {
        const maxIndex = children.length - 1;

        if (e.key === 'ArrowDown') {
            e.preventDefault();
            currentIndex = (currentIndex + 1 > maxIndex)
                ? (loop ? 0 : maxIndex)
                : currentIndex + 1;
            updateFocus();
        } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            currentIndex = (currentIndex - 1 < 0)
                ? (loop ? maxIndex : 0)
                : currentIndex - 1;
            updateFocus();
        } else if (e.key === 'Enter') {
            e.preventDefault();
            if (currentIndex >= 0) {
                onSelect(children[currentIndex], currentIndex);
            }
        } else if (e.key === 'Escape') {
            e.preventDefault();
            onEscape();
        }
    });

    children.forEach((el, idx) => {
        el.setAttribute('tabindex', '0');

        el.addEventListener('mouseenter', () => {
            currentIndex = idx;
            updateFocus();
        });

        el.addEventListener('click', () => onSelect(el, idx));
    });
}

        }catch(e){
            console.warn('Error' + e)
        }
    })
</script> --}}