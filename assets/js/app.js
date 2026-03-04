function calculateTotal() {
    const amount = parseFloat(document.getElementById('amount').value) || 0;
    const price = parseFloat(document.getElementById('price').value) || 0;

    document.getElementById('total').value = (amount * price).toFixed(2);
}

document.getElementById('amount').addEventListener('input', calculateTotal);
document.getElementById('price').addEventListener('input', calculateTotal);