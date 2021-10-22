let api = 'localhost:8000/api/';

function navigate(route) {
    location.href = route;
}

function read(){
    let doc = $('#doc').val();
    
    $.get(api+'persona/'+doc, function(res){
        console.log(res);
    });
}

function insert(){
    $.post(api+'persona/insertar', function(res){

    });
}

function update(doc){
    $.ajax({
        url: api+'persona/actualizar/'+doc,
        type: 'PUT',
        success: function(res) {
           
        }
    });
}

function remove(doc){
    $.ajax({
        url: api+'persona/borrar/'+doc,
        type: 'DELETE',
        success: function(res) {
           
        }
    });
}

$(document).ready(function(){
    
});



