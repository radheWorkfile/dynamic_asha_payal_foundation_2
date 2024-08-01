
<script src="<?php echo base_url();?>media/website_assets/js/jquery.js"></script> 
<script src="<?php echo base_url();?>media/website_assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/revolution.min.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/jquery.fancybox-media.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/owl.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/mixitup.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/wow.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/circle-progress.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/jquery.appear.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/jquery.countTo.js"></script>
<script src="<?php echo base_url();?>media/website_assets/js/script.js"></script>
<script>
function toastMultiShow(adCls,msg,icon){let valid = '';let myClass="tSuccess tWarning tDanger";let restCls=myClass.replace(adCls," ");let addonMsg='';$.each(msg,function (i,item){if(item!=""){valid +='<div class="tChild '+adCls+'" id="mrk-'+i+'">'+icon+item.replace(/(<([^>]+)>)/ig,"")+'<i class="fa fa-times mClose" id="icn-'+i+'"></i></div>';setTimeout(function(){$('#mrk-'+i).fadeOut('slow');},3000);}});$('.arvToast').css('visibility','visible').html(valid);} 
function validatePAN(input) {
let value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
let formattedValue = '';let lettersPart = value.slice(0, 5).replace(/[^A-Z]/g, '');
formattedValue += lettersPart;let digitsPart = value.slice(lettersPart.length, lettersPart.length + 4).replace(/[^0-9]/g, '');formattedValue += digitsPart;
if (formattedValue.length == 9) {let lastLetterPart = value.slice(lettersPart.length + digitsPart.length, lettersPart.length + digitsPart.length + 1).replace(/[^A-Z]/g, '');formattedValue += lastLetterPart; }input.value = formattedValue;
} function validateIFSC(input) {let value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
let formattedValue = '';let lettersPart = value.slice(0, 4).replace(/[^A-Z]/g, '');
formattedValue += lettersPart;let digitsPart = value.slice(lettersPart.length, lettersPart.length + 7).replace(/[^0-9]/g, '');formattedValue += digitsPart;input.value = formattedValue;}
function validateEmail(input) {input.value = input.value.toUpperCase().replace(/[^a-zA-Z@.]/g, '');const emailPattern = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;const errorMessage = document.getElementById('error-message');if (!emailPattern.test(input.value)) {errorMessage.textContent = "Invalid email address.";} else {errorMessage.textContent = "";}}
</script>