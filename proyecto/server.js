const express = require('express');
const PDFDocument = require('pdfkit');
const fs = require('fs');
const path = require('path');

const app = express();
app.use(express.json());

// Endpoint para generar el PDF
app.post('/generate-pdf', (req, res) => {
    const { nombre, numero, expiracion, cvv, monto } = req.body;

    const doc = new PDFDocument();
    const filename = `boleta_compra_${Date.now()}.pdf`;
    const filePath = path.join(__dirname, filename);

    doc.pipe(fs.createWriteStream(filePath));
    doc.pipe(res);

    doc.fontSize(18).text('Boleta de Compra', { align: 'center' });
    doc.moveDown(2);

    doc.fontSize(14).text(`Nombre: ${nombre}`);
    doc.text(`Número de Tarjeta: ${numero}`);
    doc.text(`Fecha de Expiración: ${expiracion}`);
    doc.text(`CVV: ${cvv}`);
    doc.text(`Monto: $${monto}`);

    doc.end();

    res.attachment(filename);
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Servidor escuchando en el puerto ${PORT}`);
});
