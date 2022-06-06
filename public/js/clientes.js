jQuery(function(){
    //Para procesar el form
    $('#btnAgregar').on('click', function(e){
        //Detener el formulario
        e.preventDefault()
        $.ajax({
            type: $('#frmCliente').attr('method'),
            url: $('#frmCliente').attr('action'),
            data:$('#frmCliente').serialize(),
            success: function(response){
                // console.log(response)
                if(response>0){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'El cliente se agrego correctamente',
                        showConfirmButton: true,
                        timer: 1500
                      })
                    $('#frmCliente')[0].reset()
                }
            },
            error: function(){
                console.log('Error')
            }
        })
    })

   
 //BOTON MODIFICAR
 $('#btnModificar').on('click', function(e){
    e.preventDefault();
    $.ajax({
        type: $('#frmCliente').attr('method'),
        url: $('#frmCliente').attr('action'),
        data: $('#frmCliente').serialize(),
        success: function(response) {
            // console.log(response)
          if (response>0) { 
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'El cliente se modifico correctamente',
                showConfirmButton: true,
                timer: 1500
              })
           window.location.href='http://localhost/GoodFood-system/cliente/index'}
         },
         error: function(){
             console.log("Error")
         }

    })   

})



// Eliminar Producto

    
    //ELIMINAR
    $('tbody').on('click', '#btnEliminar', function(e){
        e.preventDefault()
                var boton = $(this)
                $.ajax({
                    type: 'GET',
                    url: boton.attr('href'),
                    success: function(response){
                        if (response>0) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'El cliente se elimino correctamente',
                                showConfirmButton: true,
                                timer: 1500
                              })
                            boton.closest('tr').remove()
                        }
                    },
                    error:function(){
                        console.log('Error')
                    }
                })
    })



})