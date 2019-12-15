$('#input_search').keyup(function(){
   var dato=$("#input_search").val();



// Funcion Ajax http


$.ajax({
    type:'post',
    url: '?c=usuarios&m=search_ajax',
    data:{
        dato:dato
    },
    success(response){
        $("#response_ajax").html(response);
    }
});
});