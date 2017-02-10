/**
 * Created by cao89 on 10/23/16.
 */ 
var directives = [];
var directives_str = "";

function addDirective() {
    var directive = document.getElementById("directive").value;
    if(directive != "") {
        var directiveType = $('#dtype').val();
        var main_content = document.getElementsByClassName("main-container")[0];
        directives.push(directiveType + " " + directive);

        var directiveBlock = document.createElement("div");
        directiveBlock.setAttribute("class", "additional-directive-block");
        directiveBlock.innerHTML = "<a class='add-rm-button' onclick='removeDirective($(this))'>Remove</a><br><label class='dtype'>" +
            directiveType + "</label><p class='directive-content'>" + directive + "</p>";
        main_content.appendChild(directiveBlock);
        document.getElementById("directive").value = "";
        directives_str = directives.join(", ");
        var directives_input = document.getElementById("directives-list");
        directives_input.value = directives_str;
        //Not sure if it shuld be reset
        /*$("select").each(function() { this.selectedIndex = 0 });*/
    }
}

function removeDirective(directive) {
    var dtype = directive.parent().get( 0 ).childNodes[1].innerHTML;
    var dcontent = directive.parent().get( 0 ).childNodes[2].innerHTML;
    var index = directives.indexOf(dtype + " " + dcontent);
    directives.splice(index, 1);

    directive.closest("div").fadeOut(300);
    directives_str = directives.join(", ");
}