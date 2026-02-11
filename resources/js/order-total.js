document.addEventListener('DOMContentLoaded', function () {
    const productSelect = document.getElementById('product');
    const quantityInput = document.getElementById('quantity');
    const totalDisplay = document.getElementById('total');

    // Fonction pour calculer le total
    function calculateTotal() {
        const selectedOption = productSelect.options[productSelect.selectedIndex];
        const price = parseFloat(selectedOption.dataset.price) || 0;
        const quantity = parseInt(quantityInput.value) || 0;
        const total = price * quantity;

        // Mettre à jour l'affichage du total
        totalDisplay.textContent = total.toFixed(2);
    }

    // Événements pour mise à jour dynamique
    productSelect.addEventListener('change', calculateTotal);
    quantityInput.addEventListener('input', calculateTotal);

    // Calcul initial
    calculateTotal();
});
