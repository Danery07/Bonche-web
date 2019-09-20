
$(document).ready(function() {
    agregar();
    function agregar() {
        $.ajax({
            type: "GET",
            url: "PHP/selecttabla.php",
            success: function(r) {
                let plantilla = '';
                let Tex="";
                r.forEach(element => {
        
                plantilla += `
                <tr>
                <td>${element.id}</td>
                <td>${element.nombre}</td>
                <td>${element.identidad}</td>
                <td>${element.correo}</td>
                <td>${element.telefono}</td>
                </tr>
                `
                });
                $('#datos').html(plantilla);
            }
        });
    }
    $('#formlario').submit(function(u){
   const datos={
            nombre:$('#nombre').val(),
            identidad: $('identidad').val(),
            email: $('email').val(),
            numero: $('numero').val(),
   


         };
         var nom=$('#nombre').val();
         var pre=$('#identidad').val();
         var ofe=$('#email').val();
         var des=$('#numero').val();
    
       $.ajax({
         type:"POST",
         url:"PHP/insert.php",
         data:{nombre:nom, identidad:pre,email:ofe,numero:des},
         success:function(n){
           console.log(u);
           
           agregar();
           document.getElementById("RegistroAlerte").style.display="block";
            setTimeout(function(){  location.reload(); }, 4000); 
         }
       });
       $('#Productos').trigger('reset');
         u.preventDefault()
       });       
});

