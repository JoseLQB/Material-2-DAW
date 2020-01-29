$(document).ready(function () {
    $("body").append("<table>");
    for (let i = 0; i < 20; i++) {
        $("table").append("<tr>");
        for (let j = 0; j < 20; j++) {
            $("<td>").text(i + " " + j);
            $("tr").append("<td>");
        }
        $("<table>").append("<tr>");
    }
});