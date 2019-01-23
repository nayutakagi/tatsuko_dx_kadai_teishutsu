$('#start').on('click', function () {
    $('#start').html('ストップ');
    $('body').addClass('top');
});

document.querySelector('#start').addEventListener('click', function () {
    document.querySelector('#start').innerHTML = 'ストップ';
    document.querySelector('body').classList.add('top')
});