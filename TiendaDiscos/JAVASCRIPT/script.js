function pdf() {
    // Declarar variable
    let doc = new jsPDF();

    // Escribir texto
    doc.text(20, 20, "Flood Of DKS");
    doc.text(20, 30, "DETALLES DE SU FACURA" + "\n\n NOMBRE: MIGUEL SUAREZ" + "\n\n DIRECCION: Av. Aztecas, 224, México D.F"+"\n\n ARTICULO: 1 ALBUM JAPAN X"+"TOTAL A PAGAR: 15.35 MNX"+ "\n\n MEDIO DE PAGO: PAYPAL"+"\n\n GRACIAS POR SU COMPRA");

    // Generar y guardar PDF
    doc.save('FACTURA.pdf');
};
