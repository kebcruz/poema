import fs from "fs";
import path from "path";

export default function handler(req, res) {
    const { cod } = req.query; // Obtiene el código desde la URL

    // Validar que sea un número entre 1 y 10
    if (!cod || isNaN(cod) || cod < 1 || cod > 10) {
        res.status(400).json({ error: "Código inválido" });
        return;
    }

    // Definir la ruta del archivo
    const filePath = path.join(process.cwd(), "public", "poemas", `poema${cod}.txt`);

    try {
        const contenido = fs.readFileSync(filePath, "utf-8");
        const contenidoHTML = `<strong>Poema ${cod}:</strong><br>` + contenido.replace(/\n/g, "<br>");
        res.status(200).json({ contenido: contenidoHTML });
    } catch (error) {
        res.status(500).json({ error: "Archivo no encontrado" });
    }
}
