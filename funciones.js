$(document).ready(function(){
    $("#menu a").click(function(event){
        event.preventDefault(); // Evita la recarga de página

        let url = $(this).attr("href"); // Obtiene la URL original
        let cod = new URLSearchParams(url.split("?")[1]).get("cod"); // Extrae el código del poema

        // Petición AJAX a la API de Node.js
        $.get(`/api/poemas?cod=${cod}`, function(data) {
            if (data.error) {
                $("#detalles").html("<strong>Error:</strong> " + data.error);
            } else {
                $("#detalles").html(data.contenido);
            }
        }).fail(function() {
            $("#detalles").html("<strong>Error:</strong> No se pudo cargar el poema.");
        });
    });
});
