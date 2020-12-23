

$("#formInsertCurso").submit((e)=>{

    e.preventDefault();

    url = $("#formInsertCurso").attr("action");
    data = $("#formInsertCurso").serialize();

    request = $.ajax({
        type: "POST",
        url: url,
        data: data
    });
    
    request.done((response)=>{
        console.log(response);
    })
})




