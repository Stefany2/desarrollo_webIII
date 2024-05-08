import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('payment-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar recarga de página

        const data = {
            nombre: document.getElementById('nombre').value,
            numero: document.getElementById('numero').value,
            expiracion: document.getElementById('expiracion').value,
            cvv: document.getElementById('cvv').value,
            monto: document.getElementById('monto').value,
        };

        fetch('/generate-pdf', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(data),
        })
        .then(response => response.blob()) // Obtener el PDF como blob
        .then(blob => {
            const link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = 'boleta_compra.pdf';
            link.click();
        })
        .catch(error => {
            console.error("Error generando el PDF:", error);
        });
    });
});
