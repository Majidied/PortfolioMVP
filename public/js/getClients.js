$(document).ready(function () {
    $.ajax({
        url: '/api/clients',
        method: 'GET',
        success: function (data) {
            data.forEach(function (client) {
                var clientElement = $('<div></div>')
                    .addClass('client-item p-4 bg-white shadow rounded m-5 text-center')
                    .append($('<img>').attr('src', client.url).addClass('w-12 h-12 mb-2'))
                    .append($('<div></div>').text(client.title).addClass('font-bold'));

                $('#clients .flex').append(clientElement);
            });
        },
        error: function (error) {
            console.error('Error fetching clients:', error);
        }
    });
});
