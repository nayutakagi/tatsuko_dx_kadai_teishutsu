// const shuffleArray = function () {
//     for (var i = personAry.length - 1; i > 0; i--) {
//         const r = Math.floor(Math.random() * (i + 1));
//         const tmp = performance[i];
//         personAry[i] = personAry[r];
//         personAry[r] = tmp;
//     }
// }


//空の変数を作る
let div = '';
//空の変数にdivタグを50個ループで作る
for (let i = 1; i <= 50; i++) {
    if ((i + 1) % 6 == 0) {
        div += '<div class = "seat">' + data + '</div></div>';
    } else if ((i + 1) % 6 == 1) {
        div += '<div class="table-item text-center"><div class = "seat">' + i + '</div>';
    } else {
        div += '<div class = "seat">' + data + '</div>'
    }
}

document.querySelector('#app').innerHTML = div;



//appクラスにdiv50個をhtml表示する


// なるべく表示が変わる部分のコードは少なくする！！
// 表示したいデータを作って（ 変数div）
// 実際にそれを表示する