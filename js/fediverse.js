/**
 * All fediverse.org specific classes and functions
 */



/* return a list of all nodes built from the front end html table (to avoid connecting to the database)  */
function get_all_nodes(){
    var a_ret = new Array();
    $(".node").each( function( i, val ) {
        
        var node_id = $(this).find(".node_id").html();
        var node_url = $(this).find(".node_url").attr("href");
        // console.log(node_id + "/" + node_url);

        a_ret[a_ret.length] = {"node_id": node_id, "node_url" : node_url };
        // a_node_ids[a_node_ids.length] = {"node_id": node_id, "node_url" : node_url };
    });
    return a_ret;
}

/* Main function in charge of pining if nodes are up or not  */
function node_up(){
    if (undefined == a_node_ids[0]) {
        // $("#btn-check-up").attr("disabled", false);
        $("#btn-check-up").button('reset').removeClass("check-padding-top");;
        return;
    }

    $("#nodetr-"+a_node_ids[0].node_id).addClass("trprocessing");
    $(".node_lastseen-"+a_node_ids[0].node_id).html( '<span class="label label-default" style="font-size:9px;">PINGING...</span>' );
    
    $.ajax({
        method: "GET",
        crossDomain: true,
        timeout: (1000 * 15),
        url: a_node_ids[0].node_url + "/api/help/test.json"
    })
     .always(function(){
         $("#nodetr-"+a_node_ids[0].node_id).removeClass("trprocessing");
     })
     .done(function( data ) {


         console.log( a_node_ids[0].node_url + "=" + data);
         
         if ('ok' == data){
             $(".up-dot-"+a_node_ids[0].node_id)
                .removeClass("green red")
                .addClass("green");
             $("#nodetr-"+a_node_ids[0].node_id).removeClass("redbg");

             // update last time seen table value (according to client time now)
             var d = new Date();
             d = d.toString();
             $(".node_lastseen-"+a_node_ids[0].node_id).html( d.substr(4, d.length).substr(0, 20) );

             
             // a_node_ids.push(a_node_ids[0]); // add the first element to last
             a_node_ids.shift(); // delete the first element                     
         }else{
             $("#nodetr-"+a_node_ids[0].node_id).addClass("redbg");
             $(".up-dot-"+a_node_ids[0].node_id)
                .removeClass("green red")
                .addClass("red");
             $(".node_lastseen-"+a_node_ids[0].node_id).html( '<span class="label label-default" style="font-size:9px;">ERROR</span>' );
         }

         node_up();
         
     })
     .fail(function( jqXHR, textStatus ) {

         console.log( a_node_ids[0].node_url + "=" + textStatus); 
         $(".up-dot-"+a_node_ids[0].node_id)
            .removeClass("green red")
            .addClass("red");
         $("#nodetr-"+a_node_ids[0].node_id).addClass("redbg");
         $(".node_lastseen-"+a_node_ids[0].node_id).html( '<span class="label label-default" style="font-size:9px;">ERROR</span>' );

         a_node_ids.shift(); // delete the first element
         node_up();
     });             

}


$(function() {
    /* Ping button handler  */
    $("#btn-check-up").click(function(){
        a_node_ids = get_all_nodes();
        $(".lastseenth").html("Ping (local-time)");
        $(this).button("loading").addClass("check-padding-top");
        setTimeout(function(){node_up()}, 1000);
    });

    // add button form submit
    $("#frm-add-node" ).submit(function( event ) {
        
        event.preventDefault();
        if ($("#node_url").val().replace(" /gi", "") != ""){
            var data_send = $('#frm-add-node').serialize();
            data_send += "&action=add-node";
        }else{
            alert("Please add some url.");
            return;
        }
        $.ajax({
            url: './fedixhr.php',
            type: 'post',
            dataType: 'xml',
            data: data_send,
            success: function(xml) {

	        var result_code = $(xml).find('code').text();
                var result_description = $(xml).find('description').text();
                if (result_code != "ERROR"){
                    $('#add-node-modal').modal('hide');
                }
                $("#node_url").val("");
                alert(result_description);
                
            }
        });
    });    


});
