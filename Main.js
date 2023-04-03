var actualiseHour = setInterval(function () {
    var now = new Date();
    hour.innerHTML = now.getHours()+":"+((String(now.getMinutes()).length == 1) ? "0"+now.getMinutes() : now.getMinutes())+":"+((String(now.getSeconds()).length == 1) ? "0"+now.getSeconds() : now.getSeconds())
}, 0.1);

(window.screen.height > window.screen.width) ? console.log('phone mode') : console.log('pc mode');

document.querySelector('.signOut').addEventListener('click', function(){
    window.location.href = 'LogOut.php'
})

document.addEventListener('scroll', function(e){
    e.preventDefault
    if (window.scrollY >= 10){
        document.querySelector('.search__button').style.opacity = 0;
        document.querySelector('.search__button').style.zIndex = -100;
        document.querySelector('.search').style.opacity = 0;
        document.querySelector('.search').style.zIndex = -100;
        document.querySelector('.filters').style.opacity = 0;
        document.querySelector('.filters').style.zIndex = -100;
        document.querySelector('.filtre_sup').style.opacity = 0;
        document.querySelector('.filtre_sup').style.zIndex = -100;
    }else{
        document.querySelector('.search__button').style.opacity = 1;
        document.querySelector('.search__button').style.zIndex = 100;
        document.querySelector('.search').style.opacity = 1;
        document.querySelector('.search').style.zIndex = 100;
        document.querySelector('.filters').style.opacity = 1;
        document.querySelector('.filters').style.zIndex = 100;
        document.querySelector('.filtre_sup').style.opacity = 1;
        document.querySelector('.filtre_sup').style.zIndex = 100;
    }
    if (window.scrollY >= 200){
        $('#scrollTop').fadeIn(400);
    }else{
        $('#scrollTop').fadeOut();
    }
})


var i = 0
document.querySelector('.reduceDescription_img').addEventListener('click', function(e){
    e.preventDefault()
    if (i == 0){
        document.querySelector('.description').style.width = '30px';
        document.getElementById('descrition').style.opacity = 0;
        document.querySelector('.links').style.opacity = 0;
        document.getElementById('descrition').style.zIndex = -100;
        document.querySelector('.links').style.zIndex = -100;
        document.querySelector('.reduceDescription_img').style.left = '2%';
        document.querySelector('.reduceDescription_img').style.transform = 'rotateY(180deg)';
        i = 1
        document.querySelector('.offer_list').style.left = '5%';
        document.querySelector('.offer_list').style.width = '94%';
        document.querySelector('.search').style.left = '42%';
        document.querySelector('.filters').style.left = '66%';
        document.querySelector('.filtres_sup').style.left = '74.5%';
    }else{
        document.querySelector('.description').style.width = '26%';
        document.getElementById('descrition').style.opacity = 1;
        document.querySelector('.links').style.opacity = 1;
        document.getElementById('descrition').style.zIndex = 1;
        document.querySelector('.links').style.zIndex = 1;
        document.querySelector('.reduceDescription_img').style.left = '90%';
        document.querySelector('.reduceDescription_img').style.transform = 'rotateY(0deg)';
        i = 0
        document.querySelector('.offer_list').style.left = '30%';
        document.querySelector('.offer_list').style.width = '68%';
        document.querySelector('.search').style.left = '50%';
        document.querySelector('.filters').style.left = '70%';
        document.querySelector('.filtres_sup').style.left = '78.5%';
    }
})


//filtres ********************************************************************************************

const offers = document.querySelectorAll('.offer');
const stars = document.querySelectorAll('.rating input');

let rangeOne = document.querySelector('input[name="rangeOne"]'),
		rangeTwo = document.querySelector('input[name="rangeTwo"]'),
		outputOne = document.querySelector('.outputOne'),
		outputTwo = document.querySelector('.outputTwo'),
		inclRange = document.querySelector('.incl-range'),
        rate = 0,
        interval = [0, 150],
        checked = 0,
		updateView = function () {
            if (this != 0 && this != 1 && this != 2 && this != 3 && this != 4 && this != 5){
                if (this.getAttribute('name') == 'rangeOne') {
                    if (parseInt(rangeOne.value) > parseInt(rangeTwo.value)){
                        outputTwo.innerHTML = this.value;
                    }else{
                        outputOne.innerHTML = this.value;
                    }
                } else {
                    if (parseInt(rangeOne.value) > parseInt(rangeTwo.value)){
                        outputOne.innerHTML = this.value;
                    }else{
                        outputTwo.innerHTML = this.value;
                    }
                }
                if (parseInt(rangeOne.value) > parseInt(rangeTwo.value)) {
                    inclRange.style.width = (rangeOne.value - rangeTwo.value) / this.getAttribute('max') * 100 + '%';
                    inclRange.style.left = rangeTwo.value / this.getAttribute('max') * 100 + '%';
                    interval = [rangeTwo.value, rangeOne.value]
                } else {
                    inclRange.style.width = (rangeTwo.value - rangeOne.value) / this.getAttribute('max') * 100 + '%';
                    inclRange.style.left = rangeOne.value / this.getAttribute('max') * 100 + '%';
                    interval = [rangeOne.value, rangeTwo.value]
                }
            }else{
                document.getElementById('filtre2').style.display = 'flex';
                    rate = this - 1 + 1;
                    console.log(`Vous avez donné ${rate} étoiles.`);
                    for (var i = 1; i < 6; i++){
                        document.getElementById(`star${i}_label`).style.color = 'grey';
                    }
                    for (var i = this; i != 0; i--){
                        document.getElementById(`star${i}_label`).style.color = 'gold';
                    }
            }
              
            offers.forEach((offer) => {
                underPrice = offer.querySelector('.price').innerHTML - 1 + 1;
                underNote = offer.querySelector('.grade').getAttribute('value') - 1 + 1;
                if (rate != 0){
                    if (underPrice >= interval[0] && underPrice <= interval[1] && underNote == rate){
                        offer.style.display = 'flex';
                    }else{
                        offer.style.display = 'none';
                    }
                }else{
                    document.getElementById('filtre2').style.display = 'none';
                    if (underPrice >= interval[0] && underPrice <= interval[1]){
                        offer.style.display = 'flex';
                    }else{
                        offer.style.display = 'none';
                    }
                }
            })
		};

	document.addEventListener('DOMContentLoaded', function () {
        $('#scrollTop_img').click(function(){
            $('html, body').animate({scrollTop : 0},400);
        })
		updateView.call(rangeOne);
		updateView.call(rangeTwo);
		$('input[type="range"]').on('mouseup', function() {
			this.blur();
            if (rangeOne.value == 0 && rangeTwo.value == rangeTwo.getAttribute('max')){
                document.getElementById('filtre1').style.display = 'none';
            }else{
                document.getElementById('filtre1').style.display = 'flex';
            }
		}).on('mousedown input', function () {
			updateView.call(this);
		});
        $('input[name="rating"]').on('mouseup', function() {
			this.blur();
		}).on('click', function () {
            if(checked == this.id){
                updateView.call(0)
                checked = 0
            }else{
                updateView.call(this.value - 1 + 1)
                checked = this.id
            }
		});         
	});


const cross = document.querySelectorAll('.croix');
cross.forEach((croix) => {
    croix.addEventListener('click', function () {
        document.getElementById(`filtre${this.id[5]}`).style.display = 'none';
        if (this.id[5] == 2){
            for (var i = 1; i < 6; i++){
                document.getElementById(`star${i}_label`).style.color = 'grey';
                rate = 0
                checked = 0;
                updateView.call(rate)
            }
        }else{
            rangeOne.value = 0
            rangeTwo.value = 150
            inclRange.style.width = (rangeTwo.value - rangeOne.value) / 150 * 100 + '%';
            inclRange.style.left = rangeOne.value / 150 * 100 + '%';
            outputOne.innerHTML = 0;
            outputTwo.innerHTML = 150;
            updateView.call(rangeOne);
            updateView.call(rangeTwo);
            $('input[type="range"]').on('mouseup', function() {
                this.blur();
            }).on('mousedown input', function () {
                updateView.call(this);
            });
        }
    })
})


//note des offres //

document.addEventListener('DOMContentLoaded', function(){
    offers.forEach((offer) => {
        let grade = offer.querySelector('.grade'), gradeValue = grade.getAttribute('value') - 1 + 1, star;
        if (gradeValue > 0.25){
            for (gradeValue; gradeValue > 0; gradeValue--){
                (gradeValue < 1 && gradeValue > 0) ? star = '<i class="fas fa-star-half"></i>' : star = '<i class="fas fa-star"></i>';
                grade.innerHTML += '<div class="rating"><input type="radio" id="star' + gradeValue +'" name="rating" value="' + gradeValue + '"><label for="star' + gradeValue + '" id="star' + gradeValue + '_label">' + star +'</label></div>'
            }
        }else{
            grade.innerHTML = 'No rating';
        }
        
    })
})


// recherche systeme //





/* utile */


var div_cliquable = $('#ma_div');
$(document.body).click(function(e) {

  // Si ce n'est pas #ma_div ni un de ses enfants
  if( !$(e.target).is(div_cliquable) && !$.contains(div_cliquable[0],e.target) ) {
    div_cliquable.fadeOut(); // masque #ma_div en fondu
  }

});
