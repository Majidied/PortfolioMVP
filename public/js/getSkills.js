$(document).ready(function () {
    $.ajax({
        url: '/api/skills',
        method: 'GET',
        success: function (data) {
            data.forEach(function (skill) {
                var skillElement = $('<div></div>')
                    .addClass('skill-item p-4 bg-white shadow rounded m-2 text-center')
                    .append($('<img>').attr('src', skill.url).addClass('w-12 h-12 mb-2'))
                    .append($('<div></div>').text(skill.title).addClass('font-bold'));

                if (skill.category === 'Back-end') {
                    $('#backend-skills .flex').append(skillElement);
                } else if (skill.category === 'Front-end') {
                    $('#frontend-skills .flex').append(skillElement);
                } else if (skill.category === 'Desktop') {
                    $('#desktop-skills .flex').append(skillElement);
                }
            });
        },
        error: function (error) {
            console.error('Error fetching skills:', error);
        }
    });
});
