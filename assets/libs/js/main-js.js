
jQuery(document).ready(function($) {
    'use strict';



    // ============================================================== 
    // Notification list
    // ============================================================== 
    if ($(".notification-list").length) {

        $('.notification-list').slimScroll({
            height: '250px'
        });

    }

    // ============================================================== 
    // Menu Slim Scroll List
    // ============================================================== 

  

    if ($(".menu-list").length) {
        $('.menu-list').slimScroll({

        });
    }

    // ============================================================== 
    // Sidebar scrollnavigation 
    // ============================================================== 

    if ($(".sidebar-nav-fixed a").length) {
        $('.sidebar-nav-fixed a')
            // Remove links that don't actually link to anything

            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top - 90
                        }, 1000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                };
                $('.sidebar-nav-fixed a').each(function() {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');
            });

    }

    // ============================================================== 
    // tooltip
    // ============================================================== 
    if ($('[data-toggle="tooltip"]').length) {
            
            $('[data-toggle="tooltip"]').tooltip()

        }

     // ============================================================== 
    // popover
    // ============================================================== 
       if ($('[data-toggle="popover"]').length) {
            $('[data-toggle="popover"]').popover()

    }
     // ============================================================== 
    // Chat List Slim Scroll
    // ============================================================== 
        

        if ($('.chat-list').length) {
            $('.chat-list').slimScroll({
            color: 'false',
            width: '100%'


        });
    }
    // ============================================================== 
    // dropzone script
    // ============================================================== 

 //     if ($('.dz-clickable').length) {
 //            $(".dz-clickable").dropzone({ url: "/file/post" });
 // }

}); // AND OF JQUERY

//uso da mask para formulario
 $(function(e) {
        "use strict";
            $(".date-inputmask").inputmask("dd/mm/yyyy"),
            $(".date2-inpor nadaputmask").inputmask("99/99/9999"),
            $(".phone-inputmask").inputmask("(999) 999-9999"),
            $(".international-inputmask").inputmask("+9(999)999-9999"),
            $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
            $(".purchase-inputmask").inputmask("aaaa 9999-****"),
            $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
            $(".ssn-inputmask").inputmask("999-99-9999"),
            $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
            $(".currency-inputmask").inputmask("$9999"),
            $(".percentage-inputmask").inputmask("99%"),
            $(".decimal-inputmask").inputmask({
                alias: "decimal",
                radixPoint: "."
            }),
            $(".email-inputmask").inputmask({
                mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                greedy: !1,
                onBeforePaste: function(n, a) {
                    return (e = e.toLowerCase()).replace("mailto:", "")
                },
                definitions: {
                    "*": {
                        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                        cardinality: 1,
                        casing: "lower"
                    }
                }
            })
    });
    
         var table = jQuery('#teste').DataTable({
    "aaSorting": [[ 0, "desc" ]]
  });
      //multiselect
    $('#permissions').multiSelect();
    $('#campanhaslist').multiSelect(); 
    
      var table = jQuery('#teste').DataTable({
    "aaSorting": [[ 0, "desc" ]]
  });
      //multiselect
    $('#permissions').multiSelect();
    $('#campanhaslist').multiSelect(); 
    

// usuarios
            $("#btn_users").click(function(e){
                        var jsonData = {};
                        var formData = $("#users").serializeArray();
                        $.each(formData, function() {
                        if (jsonData[this.name]) {
                        if (!jsonData[this.name].push) {
                        jsonData[this.name] = [jsonData[this.name]];
                        }
                        jsonData[this.name].push(this.value || '');
                        } else {
                        jsonData[this.name] = this.value || '';
                        }
                        });
                        console.log(jsonData);
                        $.ajax(
                        {
                        url : "_class/addUser2.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "POST",
                        data : jsonData,
                        success: function(resp){
                        if(resp == ""){  
                        alert("Usuário adicionado com sucesso");
                        window.location.replace("index.php?modulo=lista_users");
                        return false;
                        }
                        else
                        {
                        alert("Erro encontrado:  " +resp);
                        return false; //  $("#myInfo").remove();
                        }
                        },
                        });
                        e.preventDefault();	
            });
            $("#btn_usersEdit").click(function(e){
                        var jsonData = {};
                        var formData = $("#usersEdit").serializeArray();
                        $.each(formData, function() {
                        if (jsonData[this.name]) {
                        if (!jsonData[this.name].push) {
                        jsonData[this.name] = [jsonData[this.name]];
                        }
                        jsonData[this.name].push(this.value || '');
                        } else {
                        jsonData[this.name] = this.value || '';
                        }
                        });
                        console.log(jsonData);
                        $.ajax(
                        {
                        url : "_class/alteraUser.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "POST",
                        data : jsonData,
                        success: function(resp){
                        if(resp == ""){  
                         alert("Olá,\n\n Usuário alterado com sucesso! \n\nAgora você precisa logar novamente para usufruir das novas permissões ");
                        window.location.assign('logout.php');

                        return false;
                        }
                        else
                        {
                        alert("Erro encontrado:  " +resp);
                        return false; //  $("#myInfo").remove();
                        }
                        },
                        });
                        e.preventDefault();	
            });
            $("#btn_usersEditPass").click(function(e){
                        var jsonData = {};
                        var formData = $("#usersEditPass").serializeArray();
                        $.each(formData, function() {
                        if (jsonData[this.name]) {
                        if (!jsonData[this.name].push) {
                        jsonData[this.name] = [jsonData[this.name]];
                        }
                        jsonData[this.name].push(this.value || '');
                        } else {
                        jsonData[this.name] = this.value || '';
                        }
                        });
                        console.log(jsonData);
                        $.ajax(
                        {
                        url : "_class/alteraPass.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "POST",
                        data : jsonData,
                        success: function(resp){
                        if(resp == ""){  
                        //alert("Usuário editado com sucesso");
                        window.location.assign('index.php?modulo=lista_users');

                        return false;
                        }
                        else
                        {
                        alert("Erro encontrado:  " +resp);
                        return false; //  $("#myInfo").remove();
                        }
                        },
                        });
                        e.preventDefault();	
            });
            $("button.enable").click(function(e){
            e.preventDefault();	
                    var taskid = $(this).parent().attr('id');
                        //alert(taskid);
                        var jsonData2 = {};
                        var data1 = $(this).closest('form');
                         console.log(data1);
                        var formData2 = data1.serializeArray();
                        $.each(formData2, function() {
                        if (jsonData2[this.name]) {
                        if (!jsonData2[this.name].push) {
                        jsonData2[this.name] = [jsonData2[this.name]];
                        }
                        jsonData2[this.name].push(this.value || '');
                        } else {
                        jsonData2[this.name] = this.value || '';
                        }
                        });
                        console.log(jsonData2);
                        $.ajax(
                        {
                        url : "_class/ativarUser.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "POST",
                        data : jsonData2,
                        success: function(resp2){
                        if(resp2 == ""){  
                        //alert('form'+jsonData2.id);
                        
                        var formulario = 'form'+jsonData2.id;
                        //alert($('#'+formulario+' input[name=status]').val());
                        if (jsonData2.status=="desativo"){
                        
                        $('#'+formulario+ ' input[name=status]').val("ativo");
                       $('#'+formulario+' #iconStatus').removeClass('fa-lock-open');
                       $('#'+formulario+' #iconStatus').addClass('fa-lock');
                       $('#'+formulario+' #btn').removeClass('btn-success');
                       $('#'+formulario+' #btn').addClass('btn-dark');
                       $('#'+formulario+' #btn').tooltip('hide');
                        $('#'+formulario+' #btn').attr('data-original-title','Ativar Usuário<br><br>Se clicar nesta opção, vc permite que o usuário opere este sistema de acordo com as permissões consedidas para o time dele');
                       // alert($('#'+formulario+' input[name=status]').val());
                        } else {
                        $('#'+formulario+ ' input[name=status]').val("desativo");
                        $('#'+formulario+' #iconStatus').removeClass('fa-lock');
                        $('#'+formulario+' #iconStatus').addClass('fa-lock-open');
                        $('#'+formulario+' #btn').addClass('btn-success');
                       $('#'+formulario+' #btn').removeClass('btn-dark');
                        $('#'+formulario+' #btn').tooltip('hide');
                        $('#'+formulario+' #btn').attr('data-original-title','Desativar Usuário<br><br>Se clicar nesta opção, vc bloqueia o usuário de usar o sistema');
                       // alert($('#'+formulario+' input[name=status]').val());
                        }
                        //$('input[name=status]').val(jsonData2.status);
                        //$('#teste').reload();
                        

                        //$(".enable").html(jsonData2.status);

                       //alert(jsonData2.status);
                      
                  // location.reload();
                    
 // return false; 
            
            
            }
                        else
                        {
                        alert("Erro encontrado:  " +resp2);
                        return false; //  $("#myInfo").remove();
                        }
                        },
                        });
                       
            });
            $(".btn_excluiUsuario").click(function(e){
//alert('aqui');
         e.preventDefault();	
                    var taskid = $(this).parent().attr('id');
                        //alert(taskid);
                        var jsonData2 = {};
                        var data1 = $(this).closest('form');
                          //  alert(data1);
                        var formData2 = data1.serializeArray();
                        $.each(formData2, function() {
                        if (jsonData2[this.name]) {
                        if (!jsonData2[this.name].push) {
                        jsonData2[this.name] = [jsonData2[this.name]];
                        }
                        jsonData2[this.name].push(this.value || '');
                        } else {
                        jsonData2[this.name] = this.value || '';
                        }
                        });
                        console.log(jsonData2);
                        $.ajax(
                        {
                        url : "_class/excluiUsers.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "POST",
                        data : jsonData2,
                        success: function(resp2){
                        if(resp2 == ""){  
                        //alert('foi'+jsonData2.id);
  window.location.assign('index.php?modulo=lista_users');

                        return false;
                        } else {
                         alert('erro'+resp2);
                       // alert($('#'+formulario+' input[name=status]').val());
                        }
                
                   
                        },
                        });
                       
            });
   //files
            $("#btn_files").click(function(e){
                        var jsonData = {};
                        var formData = $("#files2").serializeArray();
                        $.each(formData, function() {
                        if (jsonData[this.name]) {
                        if (!jsonData[this.name].push) {
                        jsonData[this.name] = [jsonData[this.name]];
                        }
                        jsonData[this.name].push(this.value || '');
                        } else {
                        jsonData[this.name] = this.value || '';
                        }
                        });
                        console.log(jsonData);
                        $.ajax(
                        {
                        url : "_class/addVideos.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "POST",
                        data : jsonData,
                        success: function(resp){
                        if(resp == ""){  
                        alert("Olá,\n\n Video adicionado com sucesso! \n\n");
                                window.location.href = "index.php?modulo=meusvideos";
                        return false;
                        }
                        else
                        {
                        alert("Erro encontrado:  " +resp);
                        return false; //  $("#myInfo").remove();
                        }
                        },
                        });
                        e.preventDefault();	
            });
            $(".btn_excluiFiles").click(function(){
//al//ert('aqui');//
      //   e.preventDefault();	
                    var taskid = $(this).parent().attr('id_files');
                        //alert(taskid);
                        var jsonData2 = {};
                        var data1 = $(this).closest('form');
                          //  alert(data1);
                        var formData2 = data1.serializeArray();
                        $.each(formData2, function() {
                        if (jsonData2[this.name]) {
                        if (!jsonData2[this.name].push) {
                        jsonData2[this.name] = [jsonData2[this.name]];
                        }
                        jsonData2[this.name].push(this.value || '');
                        } else {
                        jsonData2[this.name] = this.value || '';
                        }
                        });
                        console.log(jsonData2);
                        $.ajax(
                        {
                        url : "_class/excluiFiles.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "POST",
                        data : jsonData2,
                        success: function(resp2){
                        if(resp2 == ""){  
                        //alert('foi'+jsonData2.id);
 // window.location.assign('index.php?modulo=lista_media');

                        return false;
                        } else {
                         alert('erro'+resp2);
                       // alert($('#'+formulario+' input[name=status]').val());
                        }
            
                   
                        },
                        });
                       
            
             
                });
//approval
            $(".appr").click(function(){
  $(this).css('color','#03A9F4');
 
// var thisAcao = $(this).attr('data-acao');
 var thisTipo = $(this).attr('data-peca');
 var thisPeca = $(this).attr('data-name');
 //   $("#Ban"+thisTipo).hide().fadeIn(1500);
  //$("#Ban"+thisTipo).css('display','none');
 $( "#Ban"+thisTipo ).animate({
    opacity: 0.25,
    left: "+=50",
    height: "toggle"
  }, 500, function() {
    $("#Ban"+thisTipo).css('display','none');
  });
 //$("#Ban"+thisTipo).css('display','none').fadeIn(1500);
  //var usersid =  $(this).data("id");
   // var username = $(this).data("username");
 //console.log(thisTipo);
//var formData = $(thisdata).serializeArray();
//console.log(formData);
   $.ajax(
                        {
                        url : "_class/approval2.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "GET",
                        data :{
                        clickApproval: thisPeca,
                        idFile: thisTipo,
                          },
                        //data:thisdata,
                        datatype : "json",
                        success: function(data){
                        if(data == ""){  
                      //  console.log(clickApproval);
                        //window.location.href = "index.php?modulo=approval";
                        return true;
                        }
                        else
                        {
                        alert("Erro encontrado:  " +data);
                        //alert(data);
                        return false; //  $("#myInfo").remove();
                        }
                        },
                        });
                   
                    //alert (href);
                   //   e.preventDefault();	
                    });
//segmento
            $(".btn_saveSeg").click(function(){
//alert('aqui');//
        // e.preventDefault();	
                    var taskid = $(this).parent().attr('id_seg');
                        //alert(taskid);
                        var jsonData2 = {};
                        var data1 = $(this).closest('form');
                          //alert(data1);
                        var formData2 = data1.serializeArray();
                        $.each(formData2, function() {
                        if (jsonData2[this.name]) {
                        if (!jsonData2[this.name].push) {
                        jsonData2[this.name] = [jsonData2[this.name]];
                        }
                        jsonData2[this.name].push(this.value || '');
                        } else {
                        jsonData2[this.name] = this.value || '';
                        }
                        });
                        console.log(jsonData2);
                        $.ajax(
                        {
                        url : "_class/alteraSeg.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "POST",
                        data : jsonData2,
                        success: function(resp2){
                        if(resp2 == ""){  
                        //alert('foi'+jsonData2.id);
 // window.location.assign('index.php?modulo=lista_media');

                        return false;
                        } else {
                         alert('erro'+resp2);
                       // alert($('#'+formulario+' input[name=status]').val());
                        }
            
                   
                        },
                        });
                       
            
             
                });
            $("#btn_seg").click(function(e){
                        var jsonData = {};
                        var formData = $("#seg").serializeArray();
                        $.each(formData, function() {
                        if (jsonData[this.name]) {
                        if (!jsonData[this.name].push) {
                        jsonData[this.name] = [jsonData[this.name]];
                        }
                        jsonData[this.name].push(this.value || '');
                        } else {
                        jsonData[this.name] = this.value || '';
                        }
                        });
                        console.log(jsonData);
                        $.ajax(
                        {
                        url : "_class/addSeg.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "POST",
                        data : jsonData,
                        success: function(resp){
                        if(resp == ""){  
                        //alert("cliente adicionado com sucesso");
                         alert("Olá,\n\n Segmento adicionado com sucesso! \n\n");
                        window.location.href = "index.php?modulo=lista_seg";

                        return false;
                        }
                        else
                        {
                        alert("Erro encontrado:  " +resp);
                        return false; //  $("#myInfo").remove();
                        }
                        },
                        });
                        e.preventDefault();	
            });
            

//deixar o menu acionado
$(function(){
    var current = location.pathname;
    $('#nav-link li a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('active');
        }
    });
});
// toogle para ver as pecas animadas
   $(".fechar").click(function(e){
                 $( ".fundo" ).slideUp();
                 //$( ".oculto" ).toggle();
                 e.preventDefault();	
    });
    
                    
//track quando o cliente clica no view
  $(".eye2").click(function(){
  $(this).css('color','#03A9F4');
// var thisAcao = $(this).attr('data-acao');
 var thisTipo = $(this).attr('data-name');
 var thisPeca = $(this).attr('data-peca');
  //var usersid =  $(this).data("id");
   // var username = $(this).data("username");
 //console.log(thisTipo);
//var formData = $(thisdata).serializeArray();
//console.log(formData);
   $.ajax(
                        {
                        url : "_class/addHistorico.php",
                        //crossDomain: true,
                        // crossOrigin: true,
                        type: "GET",
                        data :{
                        clickTAG: thisPeca,
                        clickTipo: thisTipo,
                          },
                        //data:thisdata,
                        datatype : "json",
                        success: function(data){
                        if(data == ""){  
                        //console.log(data);
                              //  window.location.href = "index.php?modulo=lista_portfolio";
                        return true;
                        }
                        else
                        {
                        alert("Erro encontrado:  " +data);
                        //alert(data);
                        return false; //  $("#myInfo").remove();
                        }
                        },
                        });
                    var hash = location.hash;
                    var hash2 = location.hash.substr(1);
                    $( ".fundo" ).slideDown( "slow", "linear" );
                    //alert(hash2);
                    $(hash).css('display','none');
                    $(hash).attr("src", 'about:blank');
                   
                         
                    var href=$(this).attr("href");
                    var src = $(href).attr("src");
                     $('.loading').css('display','block');
                         // console.log ('#Loading_'+href);
                    //$(href).attr("src", src);
                  //alert (href);
                    $(href).css('display','block');
                    $(href).each(function(){
                                    $(this).attr("src", $(this).data("src"));
                                    // $(this).attr("id", $(this).data("src"));
                                    //var scriptTag = "alert('a')";
                                    
                                    //  console.log ($(this).contents().find("body"));
                                
                                    
                                    //$(this).contents().find("script").append(scriptTag);
                                    //console.log(scriptTag);
                    });
                    //alert (href);
                       $(href).on('load', function () {
                      
        $('.loading').fadeOut(1500);
  
          // $('.loading').css('display','none');
            //    console.log (this);
        });  
        //e.preventDefault();	
                    });
                    