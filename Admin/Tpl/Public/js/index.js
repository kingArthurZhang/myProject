$(function(){
    $('.'+menu+' a:gt(0)').nextAll().show();
    $('.list-group').not($('.'+menu)).find('a:gt(0)').hide();

    $('.active').click(function() {
        $(this).nextAll().toggle();
        $('.active').not($(this)).nextAll().hide();
    });
});

//Kindeditor
var editor;
KindEditor.ready(function(K){
    editor=K.create('.content',{
        resizeType:1,
        items:[
            'fontname','fontsize','|','forecore','hilitecolor','bold',
            'italic','underline','removeformat','|','justifyleft',
            'justifycenter','justfyright','insertorderedlist',
            'insertunorderedlist','|',"emoticons",'image','link']
    })
});