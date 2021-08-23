window.onload = () => {

let cards = document.querySelectorAll('.card');
let listHeight = 1754;
let margin = 45;
let currentHeight = 0;

    for (let i = 0; i < cards.length; i++) {
        currentHeight += cards[i].offsetHeight + margin;
        if (currentHeight >= listHeight) {
            let lastMargin = Math.abs(currentHeight - cards[i].offsetHeight - listHeight - 135);
            cards[i-1].style.marginBottom = `${lastMargin}px`;
            currentHeight = cards[i].offsetHeight + margin;
        }
    }
}


// function catalog () {

//     let content = document.querySelector('.content');
//     let tArticle = 'AS00E';
//     let img = `img/${tArticle}-1.jpg`;
//     let eArticle = '39819560 / 36902140';
//     let tName = 'AKIŞ ŞALTERİ+DOLDURMA MUSLUĞU (KISA) FERROLİ';
//     let rName = 'КРАН ПОДПИТКИ (КОРОТКИЙ) FERROLI С ДАТЧИКОМ ПРОТОКА 24 кВт.';
//     let eName = 'FILLING TAP FERROLI (SHORT) + FLOW SWITCH';
//     let desc = 'FERROLI Domicompact, Domiproject, Domina, Domicondens, Domitech, Fereasy, Easytech, FerellaZip';
//     let logo = `img/logo/gte.png`

//     content.innerHTML += `
//             <div class="card">
//                 <div class="card-img" style="background-image: url('${img}'); background-size: contain; background-repeat: no-repeat;"></div>
//                 <div class="card-info">
//                     <div class="articles">
//                         <div class="turkish-articles">${tArticle}</div>
//                         <div class="euro-articles">${eArticle}</div>
//                     </div>
//                     <div class="names">
//                         <p class="post posts">• ${tName}</p>
//                         <p class="post posts">• ${rName}</p>
//                         <p class="posts">• ${eName}</p>
//                     </div>
//                     <div class="desc">
//                         <div class="desk-text">${desc}</div>
//                         <div class="desk-img" style="background-image: url('${logo}'); background-size: contain; background-repeat: no-repeat;"></div>
//                     </div>
//                 </div>
//             </div>
//     `;

// }

// function newRequest() {
// 	$.ajax({
//         url: "calc.php?request=1",
//         method: "GET",
//         cache: false,
//         success: function arr(responseText) {
//             $('.result').html(responseText);
//         }
//     });
// }
	

// catalog();
// newRequest();