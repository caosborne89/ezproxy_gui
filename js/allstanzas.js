/**
 * Created by cao89 on 10/24/16.
 */
function collapseStanza(stanza){
    if(stanza.nextSibling.className === "stanza-details-open") {
        stanza.nextSibling.setAttribute("class", "dropdown-stanza-info");
    } else {
        if(document.getElementsByClassName("stanza-details-open")[0] !== undefined){
            var openedStanzaInfoBlocks = document.getElementsByClassName("stanza-details-open")[0];
            openedStanzaInfoBlocks.setAttribute("class", "dropdown-stanza-info");
        }
        stanza.nextSibling.setAttribute("class", "stanza-details-open");
    }
}
function getStanzaTitle(directive) {
    var title = directive.parentNode.previousSibling.firstChild.innerHTML;
    var ele = document.createElement("input");
    ele.setAttribute("type", "hidden");
    ele.setAttribute("value", title);
    ele.setAttribute("name", 'title-edit');
    document.getElementById('edit-stanza-form').appendChild(ele);
}

function getSearchValue() {
    var search = document.getElementById("searchbox").value;
    var searchForm = document.getElementById("search-stanza");
    var ele = document.createElement("input");
    ele.setAttribute("type", "hidden");
    ele.setAttribute("value", search);
    ele.setAttribute("name", 'search-val');
    searchForm.appendChild(ele);

}
function confirmRemove(directive) {
    var title = directive.parentNode.previousSibling.firstChild.innerHTML;
    var rmConfirm = confirm("Are you sure you want to remove the" + title + " stanza?");
    if(rmConfirm) {
        var ele = document.createElement("input");
        ele.setAttribute("type", "hidden");
        ele.setAttribute("value", title);
        ele.setAttribute("name", 'title-remove');
        document.getElementById('remove-stanza-form').appendChild(ele);
        document.getElementById('remove-stanza-boolean').value = "true";
    }
}
/*
(function($) {
    $(document).ready(function() {
        $('.stanza-list').click(function() {
            $(this).siblings('.dropdown-stanza-info').toggleClass('stanza-details-open');
        });
    });
})(jQuery);*/
