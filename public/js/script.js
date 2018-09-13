$(document).ready(function(){
    $('#save').click(function(event){
        event.preventDefault();
        var name = $("input[name=name]").val();
        var image = $("input[name=img]").val();

        var array = [];

        if(!name.length){
            array.push('The Name field is required');
        }

        if(!image.length){
            array.push('Please choose an image');
        }

        if(array.length == 0){
            $( "#form" ).submit();
        } else {
            array.forEach(function(error){
                $('#jsErrorDiv').append('<div class="alert alert-danger">'+error+'</div>')
            });
        }
    })
});