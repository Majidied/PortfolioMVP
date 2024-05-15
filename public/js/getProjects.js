$(document).ready(function () {
    $.ajax({
        url: '/api/projects', // Assurez-vous que l'URL correspond à votre endpoint pour récupérer les projets
        method: 'GET',
        success: function (data) {
            data.forEach(function (project) {
                var projectElement = $('<div></div>')
                    .addClass('bg-white shadow-lg rounded-lg overflow-hidden')
                    .append($('<img>').attr('src', project.image).addClass('w-full h-64 object-cover'))
                    .append($('<div></div>').addClass('p-6')
                        .append($('<h2></h2>').text(project.title).addClass('text-xl font-bold text-gray-800 mb-3'))
                        .append($('<p></p>').text(project.description).addClass('text-gray-700'))
                        .append($('<a></a>').attr('href', project.github_link)
                            .addClass('block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded')
                            .text('View on GitHub'))
                    );

                $('#project-container').append(projectElement);
            });
        },
        error: function (error) {
            console.error('Error fetching projects:', error);
        }
    });
});
