/* $(document).ready(function () {
    $('#users').DataTable();
}); */

$(document).ready(function () {
    $('#users').DataTable({
        buttons: [
            'csv' // Enable CSV button
        ]
    });
});