/* Javascript for constancebainbridge.com */

// Navigation IDs
$(document).ready(function(){
  var mybodyid = $('body').attr('id');
  var mynavid = '#nav' + mybodyid;
  $(mynavid).attr('id','current');
});


// Portfolio page javascript
$(document).ready(function() {
  $('#musicTog').click(
    function(event) {
      $('#music_info').toggle('fast');
    }
  )
})

$(document).ready(function() {
  $('#artTog').click(
    function(event) {
      $('#art_info').toggle('fast');
    }
  )
})
