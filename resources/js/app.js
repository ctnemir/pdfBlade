require('./bootstrap');
import $ from 'jquery';

$(document).ready(
    $("form").submit(function (e) {
        $(this).find('input[name="code"]').val(code.code)
        // e.preventDefault()
    })
)

import CodeFlask from 'codeflask';

console.log(document.querySelector('#codeArea'));

const code = new CodeFlask('#codeArea', {
    language: 'php',
    lineNumbers: true,
});
code.updateCode('<!doctype html>\n' +
    '<html lang="en">\n' +
    '<head>\n' +
    '    <meta charset="UTF-8">\n' +
    '    <meta name="viewport"\n' +
    '          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">\n' +
    '    <meta http-equiv="X-UA-Compatible" content="ie=edge">\n' +
    '    <title>Document</title>\n' +
    '    <script src="https://cdn.tailwindcss.com"></script>\n' +
    '</head>\n' +
    '<body class="bg-gray-300/50 flex flex-col overflow-x-hidden">' +
    '\n<p>{{$name}} {{$surname}}</p>\n</body>\n' +
    '</html>')
console.log(code)


// const data = new CodeFlask('#dataArea', {
//     language: 'php',
//     lineNumbers: true,
// });


