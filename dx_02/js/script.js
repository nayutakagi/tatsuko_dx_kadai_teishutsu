

const personAry = [];

for (let j=1; j<=50; j++) {
  personAry.push(j);
}

const shuffleArray = function() {
  for (var i = personAry.length - 1; i > 0; i--) {
    const r = Math.floor(Math.random() * (i + 1));
    const tmp = personAry[i];
    personAry[i] = personAry[r];
    personAry[r] = tmp;
  }
};
shuffleArray();


console.log(personAry);


// forEach(function(data, i){ });
// [3,2,1,5,4]
// alert(data, i)

const updateTable = function() {
  let div = '';
  personAry.forEach(function(data, i) {
    if ((i+1) % 6 == 0) {
      div += '<div class="seat">'+data+'</div></div>';
    } else if ((i+1) % 6 ==1) {
      div += '<div class="table-item text-center"><div class="seat">'+data+'</div>';
    } else {
      div += '<div class="seat">'+data+'</div>';
    }
  });
  document.querySelector('#app').innerHTML = div;
};

document.querySelector('#start').addEventListener('click', updateTable);


// なるべく表示が変わる部分のコードは少なくする！！
// 表示したいデータを作って（変数div）
// それを実際に表示する
