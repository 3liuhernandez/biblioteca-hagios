/*activar e ir a una categoria seleccionada*/
$('[data-category]').on('click', function(){
    alert($(this).attr('data-category'))
})