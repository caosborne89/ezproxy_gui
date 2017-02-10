/**
 * Created by cao89 on 10/27/16.
 */
function getDirectives(directives) {
    for(var i = 0; i < directives.length; i++) {
        var directive = directives[i].split(' ')[1];
        var directiveType = directives[i].split(' ')[0];
        var directiveBlock = document.createElement("div");
        var main_content = document.getElementsByClassName("main-container")[0];
        directiveBlock.setAttribute("class", "additional-directive-block");
        directiveBlock.innerHTML = "<a class='add-rm-button' onclick='removeDirective($(this))'>Remove</a><br><label class='dtype'>" +
            directiveType + "</label><p class='directive-content'>" + directive + "</p>";
        main_content.appendChild(directiveBlock);
    }
}
var directive_string = document.getElementById("directives-string").value;
if(directive_string !== undefined) {
    getDirectives(directive_string.split(', '));
    directives = directive_string.split(', ')
}
