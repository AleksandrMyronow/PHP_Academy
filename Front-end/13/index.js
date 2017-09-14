/*Скрипт для подсчета тегов*/

var elements = document.getElementsByTagName('*'),
    /*Проверка, как будет работать массив*/
    arr = [1, 3, 5, 3, 4, 3],
    result = {};

/*Пробывал разными способами превратить объект в массив не получилось*/

// arr = jQuery.makeArray(elements);
// var arr = function f() {
//     return Array.from(elements);
// };
// var arr1=[].slice.call(elements);
// console.log(arr1);console.log(typeof arr);
// var arr = jQuery.makeArray(arr1);


//

arr.forEach(function (variable) {
    result[variable] = result[variable] + 1 || 1;
});
for (var key in result) {
    console.log(key + '=' + result[key]);
}

/*Скрипт для отображения блока*/

function openbox(box) {
    display = document.getElementById(box).style.display;
    if(display=='none') {
        document.getElementById(box).style.display = 'block';
    } else {
        document.getElementById(box).style.display = 'none';
    }

}

/*Скрипт для отображения текста в блоке*/

var text = document.getElementById('box');
text.innerHTML = result;




