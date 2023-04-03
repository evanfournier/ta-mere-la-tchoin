let username = document.getElementById('username'), imgEdit = document.querySelector('.edit_img_username')
document.addEventListener('DOMContentLoaded', function () {
    $('#edit_checkbox_username').click(function(){
        if ($(this).prop('checked') == true){
            imgEdit.src = 'Images/check.png'
            username.contentEditable = true
            username.focus()
        }else{
            imgEdit.src = 'Images/edit.png'
            username.contentEditable = false
        }
    })
})


//modification pp

var pp_box = document.querySelector('.pp'),
    pp_img = document.querySelector('.profile_img'),
    pp_edit_div = document.querySelector('.change_pp_buttons'),
    input = document.querySelector('.file'),
    edit_pp = document.querySelector('.edit_pp'),
    position_pp = document.querySelector('.position_pp'),
    back = document.querySelector('.back'),
    save = document .querySelector('.save'),
    scaling = 0,
    currentImg = '',
    currentBackground = '',
    bg = document.querySelector('.circle').style.background
    zoomRange = document.querySelector('.range_zoom'),
    currentValue = zoomRange.value,
    pp_img.style.scale = 1

pp_box.addEventListener('mouseover', function(e){
    pp_img.style.opacity = '0.4';
    document.querySelector('.circle').style.opacity = 0.4;
    pp_edit_div.style.opacity = '1'
})

pp_box.addEventListener('mouseleave', function(e){
    pp_img.style.opacity = '1';
    document.querySelector('.circle').style.opacity = 1;
    pp_edit_div.style.opacity = '0'
})

edit_pp.addEventListener('click', function(e){
    e.preventDefault()
    $('.preview_img').prop('src', pp_img.src)
    $('.circle_edit').css('background', $('.circle').css('background'))
    $('.preview_img').css('scale', pp_img.style.scale)
    $('#color').prop('value', currentBackground)
    console.log(currentBackground)
    zoomRange.value = pp_img.style.scale - 1 + 1
    currentImg = pp_img.src
    position_pp.style.opacity = 1;
    position_pp.style.zIndex = 10;
})

function rgbToHex(rgb) {
    var hex = Number(rgb).toString(16);
    if (hex.length < 2) {
      hex = "0" + hex;
    }
    return hex;
  }
  
  function fullColorHex(r, g, b) {
    var red = rgbToHex(r);
    var green = rgbToHex(g);
    var blue = rgbToHex(b);
    return "#" + red + green + blue;
  }
  

save.addEventListener('click', function(e){
    e.preventDefault()
    position_pp.style.opacity = 0;
    position_pp.style.zIndex = -100;
    pp_img.src = document.querySelector('.preview_img').src;
    pp_img.style.scale = scaling;
    document.querySelector('.circle').style.background = bg;
    currentValue = zoomRange.value
    currentBackground = $('#color').prop('value')
})

back.addEventListener('click', function(e){
    e.preventDefault()
    position_pp.style.opacity = 0;
    position_pp.style.zIndex = -100;
    pp_img.src = currentImg
    pp_box.style.background = currentBackground;
})
     

    document.addEventListener('DOMContentLoaded', function () {
        zoom.call(zoomRange.value)
		$('input[type="range"]').on('mouseup', function() {
			this.blur();
		}).on('mousedown input', function () {
			zoom.call(this);
		})
        $('input[name="color"]').on('mouseup', function() {
			this.blur();
		}).on('mousedown input', function () {
			changeBackground.call(this);
		})
        $('input[name="file"]').on('mouseup', function() {
			this.blur();
		}).on('mousedown input', function () {
			previewPicture.call(this);
		})
    })
    var zoom = function(){
        document.querySelector('.preview_img').style.scale = this.value;
        scaling = this.value
        return scaling
    }
    var changeBackground = function(){
        document.querySelector('.circle_edit').style.background = this.value;
        bg = this.value
    }
    // La fonction previewPicture
    var previewPicture  = function () {

        // e.files contient un objet FileList
        const [picture] = this.files

        // "picture" est un objet File
        if (picture) {
            // On change l'URL de l'image
            document.querySelector('.preview_img').src = URL.createObjectURL(picture)
        }
    } 

//edition du mot de passe

var back_mdp = document.querySelector('.back_mdp')
var save_mdp = document .querySelector('.save_mdp')
var mdp_edit_box = document.querySelector('.edit_password_box')
var edit_password = document.querySelector('.edit_password')

back_mdp.addEventListener('click', function(e){
    e.preventDefault()
    mdp_edit_box.style.display = 'none';
})

save_mdp.addEventListener('click', function(e){
    e.preventDefault()
    mdp_edit_box.style.display = 'none';
})

edit_password.addEventListener('click', function(e){
    e.preventDefault()
    mdp_edit_box.style.display = 'flex';
})


//enregistrer les changements

var currentUsername = document.querySelector('.username').innerHTML
var currentMail = document.querySelector('.mail').innerHTML
var currentPhone = document.querySelector('.phone_number').innerHTML
var currentPassword = document.querySelector('.password').innerHTML

document.querySelector('.save_settings').addEventListener('click', function(e){
    e.preventDefault()
})

document.querySelector('.back_settings').addEventListener('click', function(e){
    e.preventDefault()
    window.location.href = "Main.php";
    document.querySelector('.username').innerHTML = currentUsername;
    document.querySelector('.mail').innerHTML = currentMail;
    document.querySelector('.phone_number').innerHTML = currentPhone
    document.querySelector('.password').innerHTML = currentPassword
})

function change() {
    window.location.href = "Main.php";
  }

