$(document).ready(function() {
    $('#form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: 'analysis.php',
            data: $(this).serialize(),
            success: function(response) {
          
                var jsonData = JSON.parse(response);
                 $('#respuesta').addClass('d-block');
                 for(i =0; i< jsonData.length;i++){
                    var elemento = '';
                    var contenedor = document.createElement('div');
                    if(jsonData[i].error){
                       elemento = document.createElement('p').appendChild(document.createTextNode(jsonData[i].error));
                        contenedor.appendChild(elemento);
                    }else{
                        elemento = document.createElement('p').appendChild(document.createTextNode(jsonData[i].success));
                        contenedor.appendChild(elemento);
                    }
                    document.getElementById('respuesta').appendChild(contenedor);
                }
                
            }
        });
    });
});