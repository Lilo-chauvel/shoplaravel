document.addEventListener('DOMContentLoaded', function () {
    const productSelect = document.getElementById('product');
    const quantityInput = document.getElementById('quantity');
    const totalSpan = document.getElementById('total');

    function updateTotal() {
        const selectedOption = productSelect.options[productSelect.selectedIndex];
        const price = parseFloat(selectedOption.dataset.price) || 0;
        const quantity = parseInt(quantityInput.value) || 1;
        const total = (price * quantity).toFixed(2);
        totalSpan.textContent = total;
    }

    productSelect.addEventListener('change', updateTotal);
    quantityInput.addEventListener('input', updateTotal);

    // Initialize total on page load
    updateTotal();
});
