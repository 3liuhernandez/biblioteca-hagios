/*activar e ir a una categoria seleccionada*/
$('[data-category]').on('click', function(){
    alert($(this).attr('data-category'))
})


function openNav(sidenav_id, to_open, category_id = "", category_name = "") {
    if(to_open == "width"){
        /* sidenav.style.width = "500px"; */
        $('#'+sidenav_id).css('width', '500px');
    }else {
        $('#'+sidenav_id).css('height', '500px');
    }

    if(category_id !== ""){
        $('#'+sidenav_id +" #category_id").val(category_id);
        $('#'+sidenav_id +" #sidenav_category_name").html(category_name + " width ID:" + category_id);
        console.log(category_name + "::" + category_id)
    }
}

function closeNav(sidenav_id, to_open){
    $('#'+sidenav_id+' form')[0].reset();
    if(to_open == "width"){
        $('#'+sidenav_id).css('width', '0');
    }else {
        $('#'+sidenav_id).css('height', '0');
    }
}