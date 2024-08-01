<link href="<?php echo base_url();?>media/website_assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>media/website_assets/css/revolution-slider.css" rel="stylesheet">
<link href="<?php echo base_url();?>media/website_assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url();?>media/website_assets/css/responsive.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

<!-- font-family:'Playfair Display',serif; -->

<style>
.bx-spin {-webkit-animation:spin 2s linear infinite;animation:spin 2s linear infinite}
@-webkit-keyframes spin {0% {-webkit-transform:rotate(0);transform:rotate(0)}
100% {-webkit-transform:rotate(359deg);transform:rotate(359deg)}}
@keyframes spin {0% {-webkit-transform:rotate(0);transform:rotate(0)}
100% {-webkit-transform:rotate(359deg);transform:rotate(359deg)}}
			
.arvToast{ z-index: 111;position: fixed;right:0px;top: 60px;min-width: 420px; visibility: hidden;}
.tChild{background-color:#fff;padding: 15px;border-bottom:3px solid #e3e3e3;box-shadow: 0rem 0.3125rem 0.3125rem 0rem rgba(82, 63, 105, 0.05);margin-bottom: 10px;}
.mClose{ float: right;font-size: 18px;cursor: pointer;}.tSuccess{ background-color: #00ADA3;border-bottom:3px solid #008C84;color: white;}
.tDanger{ background-color: #53c5f1;border-bottom: 3px solid #53c5f1;color: white;}.tWarning{ background-color: #f0d22e;border-bottom: 3px solid #d0b103;color: #8e5d00;}
.tDefault{background-color: #d5d5d5;border-bottom: 3px solid #b9b9b9;color: #5b5b5b;}.tPrimary{ background-color: #5351F4;border-bottom: 3px solid #3736AF;color: #fff;}
</style>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->  
 <style>
 .btn-join{background: linear-gradient(to right, #56ccf2, #2f80ed);color:white; padding:15px 22px 12px 22px; color:white;border-radius:2.5rem;margin-top:9rem;}
.btn-join:hover{background: linear-gradient(to right, #0575e6, #021b79);}
.btn-join_1{background: linear-gradient(to right, #0575e6, #021b79);color:white; padding:15px 22px 12px 22px; color:white;border-radius:0.5rem;margin-top:9rem;}
.btn-join_1:hover{background: linear-gradient(to right, #56ccf2, #2f80ed);}
        .mission-man{border:2px dotted #53c5f1;padding: 1.6rem;border-radius:22px 0px;}
        .mission-man:hover{background: linear-gradient(to right, #56ccf2, #2f80ed);border-radius:0px 32px;}

@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Yantramanav:300,400,500,700,900');

/* font-family: 'Roboto', sans-serif;
font-family: 'Roboto Slab', serif;
font-family: 'Yantramanav', sans-serif; */

@-webkit-keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(.3);
        transform: scale(.3);
    }
    100% {
        opacity: 1;
    }
}

@keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(.3);
        -ms-transform: scale(.3);
        transform: scale(.3);
    }
    100% {
        opacity: 1;
    }
}

.zoomIn {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn;
}

@keyframes zoomInLeft {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(-2000px);
        -ms-transform: scale(.1) translateX(-2000px);
        transform: scale(.1) translateX(-2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(48px);
        -ms-transform: scale(.475) translateX(48px);
        transform: scale(.475) translateX(48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

.zoomInLeft {
    -webkit-animation-name: zoomInLeft;
    animation-name: zoomInLeft;
}

@-webkit-keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(2000px);
        transform: scale(.1) translateX(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    10% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(-48px);
        transform: scale(.475) translateX(-48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

@keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(2000px);
        -ms-transform: scale(.1) translateX(2000px);
        transform: scale(.1) translateX(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(-48px);
        -ms-transform: scale(.475) translateX(-48px);
        transform: scale(.475) translateX(-48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

.zoomInRight {
    -webkit-animation-name: zoomInRight;
    animation-name: zoomInRight;
}

@-webkit-keyframes zoomInUp {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateY(2000px);
        transform: scale(.1) translateY(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(.475) translateY(-60px);
        transform: scale(.475) translateY(-60px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}


/* ########################################################################################## */

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

.animated.infinite {
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
}

.animated.hinge {
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
}

@-webkit-keyframes bounce {
    0%,
    20%,
    50%,
    80%,
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    40% {
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px);
    }
    60% {
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px);
    }
}

@keyframes bounce {
    0%,
    20%,
    50%,
    80%,
    100% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    40% {
        -webkit-transform: translateY(-30px);
        -ms-transform: translateY(-30px);
        transform: translateY(-30px);
    }
    60% {
        -webkit-transform: translateY(-15px);
        -ms-transform: translateY(-15px);
        transform: translateY(-15px);
    }
}

.bounce {
    -webkit-animation-name: bounce;
    animation-name: bounce;
}

@-webkit-keyframes flash {
    0%,
    50%,
    100% {
        opacity: 1;
    }
    25%,
    75% {
        opacity: 0;
    }
}

@keyframes flash {
    0%,
    50%,
    100% {
        opacity: 1;
    }
    25%,
    75% {
        opacity: 0;
    }
}

.flash {
    -webkit-animation-name: flash;
    animation-name: flash;
}


/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    50% {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
    100% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

@keyframes pulse {
    0% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
    50% {
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1);
    }
    100% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
}

.pulse {
    -webkit-animation-name: pulse;
    animation-name: pulse;
}

@-webkit-keyframes rubberBand {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    30% {
        -webkit-transform: scaleX(1.25) scaleY(0.75);
        transform: scaleX(1.25) scaleY(0.75);
    }
    40% {
        -webkit-transform: scaleX(0.75) scaleY(1.25);
        transform: scaleX(0.75) scaleY(1.25);
    }
    60% {
        -webkit-transform: scaleX(1.15) scaleY(0.85);
        transform: scaleX(1.15) scaleY(0.85);
    }
    100% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

@keyframes rubberBand {
    0% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
    30% {
        -webkit-transform: scaleX(1.25) scaleY(0.75);
        -ms-transform: scaleX(1.25) scaleY(0.75);
        transform: scaleX(1.25) scaleY(0.75);
    }
    40% {
        -webkit-transform: scaleX(0.75) scaleY(1.25);
        -ms-transform: scaleX(0.75) scaleY(1.25);
        transform: scaleX(0.75) scaleY(1.25);
    }
    60% {
        -webkit-transform: scaleX(1.15) scaleY(0.85);
        -ms-transform: scaleX(1.15) scaleY(0.85);
        transform: scaleX(1.15) scaleY(0.85);
    }
    100% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
}

.rubberBand {
    -webkit-animation-name: rubberBand;
    animation-name: rubberBand;
}

@-webkit-keyframes shake {
    0%,
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px);
    }
    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translateX(10px);
        transform: translateX(10px);
    }
}

@keyframes shake {
    0%,
    100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translateX(-10px);
        -ms-transform: translateX(-10px);
        transform: translateX(-10px);
    }
    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translateX(10px);
        -ms-transform: translateX(10px);
        transform: translateX(10px);
    }
}

.shake {
    -webkit-animation-name: shake;
    animation-name: shake;
}

@-webkit-keyframes swing {
    20% {
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
    }
    40% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg);
    }
    60% {
        -webkit-transform: rotate(5deg);
        transform: rotate(5deg);
    }
    80% {
        -webkit-transform: rotate(-5deg);
        transform: rotate(-5deg);
    }
    100% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
}

@keyframes swing {
    20% {
        -webkit-transform: rotate(15deg);
        -ms-transform: rotate(15deg);
        transform: rotate(15deg);
    }
    40% {
        -webkit-transform: rotate(-10deg);
        -ms-transform: rotate(-10deg);
        transform: rotate(-10deg);
    }
    60% {
        -webkit-transform: rotate(5deg);
        -ms-transform: rotate(5deg);
        transform: rotate(5deg);
    }
    80% {
        -webkit-transform: rotate(-5deg);
        -ms-transform: rotate(-5deg);
        transform: rotate(-5deg);
    }
    100% {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }
}

.swing {
    -webkit-transform-origin: top center;
    -ms-transform-origin: top center;
    transform-origin: top center;
    -webkit-animation-name: swing;
    animation-name: swing;
}

@-webkit-keyframes tada {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    10%,
    20% {
        -webkit-transform: scale(0.9) rotate(-3deg);
        transform: scale(0.9) rotate(-3deg);
    }
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: scale(1.1) rotate(3deg);
        transform: scale(1.1) rotate(3deg);
    }
    40%,
    60%,
    80% {
        -webkit-transform: scale(1.1) rotate(-3deg);
        transform: scale(1.1) rotate(-3deg);
    }
    100% {
        -webkit-transform: scale(1) rotate(0);
        transform: scale(1) rotate(0);
    }
}

@keyframes tada {
    0% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
    10%,
    20% {
        -webkit-transform: scale(0.9) rotate(-3deg);
        -ms-transform: scale(0.9) rotate(-3deg);
        transform: scale(0.9) rotate(-3deg);
    }
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: scale(1.1) rotate(3deg);
        -ms-transform: scale(1.1) rotate(3deg);
        transform: scale(1.1) rotate(3deg);
    }
    40%,
    60%,
    80% {
        -webkit-transform: scale(1.1) rotate(-3deg);
        -ms-transform: scale(1.1) rotate(-3deg);
        transform: scale(1.1) rotate(-3deg);
    }
    100% {
        -webkit-transform: scale(1) rotate(0);
        -ms-transform: scale(1) rotate(0);
        transform: scale(1) rotate(0);
    }
}

.tada {
    -webkit-animation-name: tada;
    animation-name: tada;
}


/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes wobble {
    0% {
        -webkit-transform: translateX(0%);
        transform: translateX(0%);
    }
    15% {
        -webkit-transform: translateX(-25%) rotate(-5deg);
        transform: translateX(-25%) rotate(-5deg);
    }
    30% {
        -webkit-transform: translateX(20%) rotate(3deg);
        transform: translateX(20%) rotate(3deg);
    }
    45% {
        -webkit-transform: translateX(-15%) rotate(-3deg);
        transform: translateX(-15%) rotate(-3deg);
    }
    60% {
        -webkit-transform: translateX(10%) rotate(2deg);
        transform: translateX(10%) rotate(2deg);
    }
    75% {
        -webkit-transform: translateX(-5%) rotate(-1deg);
        transform: translateX(-5%) rotate(-1deg);
    }
    100% {
        -webkit-transform: translateX(0%);
        transform: translateX(0%);
    }
}

@keyframes wobble {
    0% {
        -webkit-transform: translateX(0%);
        -ms-transform: translateX(0%);
        transform: translateX(0%);
    }
    15% {
        -webkit-transform: translateX(-25%) rotate(-5deg);
        -ms-transform: translateX(-25%) rotate(-5deg);
        transform: translateX(-25%) rotate(-5deg);
    }
    30% {
        -webkit-transform: translateX(20%) rotate(3deg);
        -ms-transform: translateX(20%) rotate(3deg);
        transform: translateX(20%) rotate(3deg);
    }
    45% {
        -webkit-transform: translateX(-15%) rotate(-3deg);
        -ms-transform: translateX(-15%) rotate(-3deg);
        transform: translateX(-15%) rotate(-3deg);
    }
    60% {
        -webkit-transform: translateX(10%) rotate(2deg);
        -ms-transform: translateX(10%) rotate(2deg);
        transform: translateX(10%) rotate(2deg);
    }
    75% {
        -webkit-transform: translateX(-5%) rotate(-1deg);
        -ms-transform: translateX(-5%) rotate(-1deg);
        transform: translateX(-5%) rotate(-1deg);
    }
    100% {
        -webkit-transform: translateX(0%);
        -ms-transform: translateX(0%);
        transform: translateX(0%);
    }
}

.wobble {
    -webkit-animation-name: wobble;
    animation-name: wobble;
}

@-webkit-keyframes bounceIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(.3);
        transform: scale(.3);
    }
    50% {
        opacity: 1;
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
    }
    70% {
        -webkit-transform: scale(.9);
        transform: scale(.9);
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

@keyframes bounceIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(.3);
        -ms-transform: scale(.3);
        transform: scale(.3);
    }
    50% {
        opacity: 1;
        -webkit-transform: scale(1.05);
        -ms-transform: scale(1.05);
        transform: scale(1.05);
    }
    70% {
        -webkit-transform: scale(.9);
        -ms-transform: scale(.9);
        transform: scale(.9);
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
}

.bounceIn {
    -webkit-animation-name: bounceIn;
    animation-name: bounceIn;
}

@-webkit-keyframes bounceInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateY(30px);
        transform: translateY(30px);
    }
    80% {
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes bounceInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateY(30px);
        -ms-transform: translateY(30px);
        transform: translateY(30px);
    }
    80% {
        -webkit-transform: translateY(-10px);
        -ms-transform: translateY(-10px);
        transform: translateY(-10px);
    }
    100% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

.bounceInDown {
    -webkit-animation-name: bounceInDown;
    animation-name: bounceInDown;
}

@-webkit-keyframes bounceInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(30px);
        transform: translateX(30px);
    }
    80% {
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px);
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes bounceInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(30px);
        -ms-transform: translateX(30px);
        transform: translateX(30px);
    }
    80% {
        -webkit-transform: translateX(-10px);
        -ms-transform: translateX(-10px);
        transform: translateX(-10px);
    }
    100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

.bounceInLeft {
    -webkit-animation-name: bounceInLeft;
    animation-name: bounceInLeft;
}

@-webkit-keyframes bounceInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(-30px);
        transform: translateX(-30px);
    }
    80% {
        -webkit-transform: translateX(10px);
        transform: translateX(10px);
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes bounceInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateX(-30px);
        -ms-transform: translateX(-30px);
        transform: translateX(-30px);
    }
    80% {
        -webkit-transform: translateX(10px);
        -ms-transform: translateX(10px);
        transform: translateX(10px);
    }
    100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

.bounceInRight {
    -webkit-animation-name: bounceInRight;
    animation-name: bounceInRight;
}

@-webkit-keyframes bounceInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px);
    }
    80% {
        -webkit-transform: translateY(10px);
        transform: translateY(10px);
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes bounceInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px);
    }
    60% {
        opacity: 1;
        -webkit-transform: translateY(-30px);
        -ms-transform: translateY(-30px);
        transform: translateY(-30px);
    }
    80% {
        -webkit-transform: translateY(10px);
        -ms-transform: translateY(10px);
        transform: translateY(10px);
    }
    100% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

.bounceInUp {
    -webkit-animation-name: bounceInUp;
    animation-name: bounceInUp;
}

@-webkit-keyframes bounceOut {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    25% {
        -webkit-transform: scale(.95);
        transform: scale(.95);
    }
    50% {
        opacity: 1;
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(.3);
        transform: scale(.3);
    }
}

@keyframes bounceOut {
    0% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
    25% {
        -webkit-transform: scale(.95);
        -ms-transform: scale(.95);
        transform: scale(.95);
    }
    50% {
        opacity: 1;
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1);
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(.3);
        -ms-transform: scale(.3);
        transform: scale(.3);
    }
}

.bounceOut {
    -webkit-animation-name: bounceOut;
    animation-name: bounceOut;
}

@-webkit-keyframes bounceOutDown {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px);
    }
}

@keyframes bounceOutDown {
    0% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateY(-20px);
        -ms-transform: translateY(-20px);
        transform: translateY(-20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px);
    }
}

.bounceOutDown {
    -webkit-animation-name: bounceOutDown;
    animation-name: bounceOutDown;
}

@-webkit-keyframes bounceOutLeft {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateX(20px);
        transform: translateX(20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
}

@keyframes bounceOutLeft {
    0% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
}

.bounceOutLeft {
    -webkit-animation-name: bounceOutLeft;
    animation-name: bounceOutLeft;
}

@-webkit-keyframes bounceOutRight {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px);
    }
}

@keyframes bounceOutRight {
    0% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px);
    }
}

.bounceOutRight {
    -webkit-animation-name: bounceOutRight;
    animation-name: bounceOutRight;
}

@-webkit-keyframes bounceOutUp {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateY(20px);
        transform: translateY(20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
}

@keyframes bounceOutUp {
    0% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    20% {
        opacity: 1;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
}

.bounceOutUp {
    -webkit-animation-name: bounceOutUp;
    animation-name: bounceOutUp;
}

@-webkit-keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
}

@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        -ms-transform: translateY(-20px);
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
}

@-webkit-keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

.fadeInDownBig {
    -webkit-animation-name: fadeInDownBig;
    animation-name: fadeInDownBig;
}

@-webkit-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

.fadeInLeftBig {
    -webkit-animation-name: fadeInLeftBig;
    animation-name: fadeInLeftBig;
}

@-webkit-keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        transform: translateX(20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}

@-webkit-keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

.fadeInRightBig {
    -webkit-animation-name: fadeInRightBig;
    animation-name: fadeInRightBig;
}

@-webkit-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}

@-webkit-keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

.fadeInUpBig {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig;
}

@-webkit-keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

.fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut;
}

@-webkit-keyframes fadeOutDown {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        transform: translateY(20px);
    }
}

@keyframes fadeOutDown {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
    }
}

.fadeOutDown {
    -webkit-animation-name: fadeOutDown;
    animation-name: fadeOutDown;
}

@-webkit-keyframes fadeOutDownBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px);
    }
}

@keyframes fadeOutDownBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px);
    }
}

.fadeOutDownBig {
    -webkit-animation-name: fadeOutDownBig;
    animation-name: fadeOutDownBig;
}

@-webkit-keyframes fadeOutLeft {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        transform: translateX(-20px);
    }
}

@keyframes fadeOutLeft {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-20px);
        -ms-transform: translateX(-20px);
        transform: translateX(-20px);
    }
}

.fadeOutLeft {
    -webkit-animation-name: fadeOutLeft;
    animation-name: fadeOutLeft;
}

@-webkit-keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
}

@keyframes fadeOutLeftBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
}

.fadeOutLeftBig {
    -webkit-animation-name: fadeOutLeftBig;
    animation-name: fadeOutLeftBig;
}

@-webkit-keyframes fadeOutRight {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        transform: translateX(20px);
    }
}

@keyframes fadeOutRight {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(20px);
        -ms-transform: translateX(20px);
        transform: translateX(20px);
    }
}

.fadeOutRight {
    -webkit-animation-name: fadeOutRight;
    animation-name: fadeOutRight;
}

@-webkit-keyframes fadeOutRightBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px);
    }
}

@keyframes fadeOutRightBig {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px);
    }
}

.fadeOutRightBig {
    -webkit-animation-name: fadeOutRightBig;
    animation-name: fadeOutRightBig;
}

@-webkit-keyframes fadeOutUp {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
    }
}

@keyframes fadeOutUp {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
        -ms-transform: translateY(-20px);
        transform: translateY(-20px);
    }
}

.fadeOutUp {
    -webkit-animation-name: fadeOutUp;
    animation-name: fadeOutUp;
}

@-webkit-keyframes fadeOutUpBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
}

@keyframes fadeOutUpBig {
    0% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
}

.fadeOutUpBig {
    -webkit-animation-name: fadeOutUpBig;
    animation-name: fadeOutUpBig;
}

@-webkit-keyframes flip {
    0% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(-360deg) scale(1);
        transform: perspective(400px) translateZ(0) rotateY(-360deg) scale(1);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    40% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-190deg) scale(1);
        transform: perspective(400px) translateZ(150px) rotateY(-190deg) scale(1);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    50% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-170deg) scale(1);
        transform: perspective(400px) translateZ(150px) rotateY(-170deg) scale(1);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    80% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(.95);
        transform: perspective(400px) translateZ(0) rotateY(0deg) scale(.95);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    100% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(1);
        transform: perspective(400px) translateZ(0) rotateY(0deg) scale(1);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
}

@keyframes flip {
    0% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(-360deg) scale(1);
        -ms-transform: perspective(400px) translateZ(0) rotateY(-360deg) scale(1);
        transform: perspective(400px) translateZ(0) rotateY(-360deg) scale(1);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    40% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-190deg) scale(1);
        -ms-transform: perspective(400px) translateZ(150px) rotateY(-190deg) scale(1);
        transform: perspective(400px) translateZ(150px) rotateY(-190deg) scale(1);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
    50% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-170deg) scale(1);
        -ms-transform: perspective(400px) translateZ(150px) rotateY(-170deg) scale(1);
        transform: perspective(400px) translateZ(150px) rotateY(-170deg) scale(1);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    80% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(.95);
        -ms-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(.95);
        transform: perspective(400px) translateZ(0) rotateY(0deg) scale(.95);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
    100% {
        -webkit-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(1);
        -ms-transform: perspective(400px) translateZ(0) rotateY(0deg) scale(1);
        transform: perspective(400px) translateZ(0) rotateY(0deg) scale(1);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
    }
}

.animated.flip {
    -webkit-backface-visibility: visible;
    -ms-backface-visibility: visible;
    backface-visibility: visible;
    -webkit-animation-name: flip;
    animation-name: flip;
}

@-webkit-keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
    40% {
        -webkit-transform: perspective(400px) rotateX(-10deg);
        transform: perspective(400px) rotateX(-10deg);
    }
    70% {
        -webkit-transform: perspective(400px) rotateX(10deg);
        transform: perspective(400px) rotateX(10deg);
    }
    100% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
}

@keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        -ms-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
    40% {
        -webkit-transform: perspective(400px) rotateX(-10deg);
        -ms-transform: perspective(400px) rotateX(-10deg);
        transform: perspective(400px) rotateX(-10deg);
    }
    70% {
        -webkit-transform: perspective(400px) rotateX(10deg);
        -ms-transform: perspective(400px) rotateX(10deg);
        transform: perspective(400px) rotateX(10deg);
    }
    100% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        -ms-transform: perspective(400px) rotateX(0deg);
        transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
}

.flipInX {
    -webkit-backface-visibility: visible !important;
    -ms-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInX;
    animation-name: flipInX;
}

@-webkit-keyframes flipInY {
    0% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
    40% {
        -webkit-transform: perspective(400px) rotateY(-10deg);
        transform: perspective(400px) rotateY(-10deg);
    }
    70% {
        -webkit-transform: perspective(400px) rotateY(10deg);
        transform: perspective(400px) rotateY(10deg);
    }
    100% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
}

@keyframes flipInY {
    0% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        -ms-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
    40% {
        -webkit-transform: perspective(400px) rotateY(-10deg);
        -ms-transform: perspective(400px) rotateY(-10deg);
        transform: perspective(400px) rotateY(-10deg);
    }
    70% {
        -webkit-transform: perspective(400px) rotateY(10deg);
        -ms-transform: perspective(400px) rotateY(10deg);
        transform: perspective(400px) rotateY(10deg);
    }
    100% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        -ms-transform: perspective(400px) rotateY(0deg);
        transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
}

.flipInY {
    -webkit-backface-visibility: visible !important;
    -ms-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInY;
    animation-name: flipInY;
}

@-webkit-keyframes flipOutX {
    0% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
}

@keyframes flipOutX {
    0% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        -ms-transform: perspective(400px) rotateX(0deg);
        transform: perspective(400px) rotateX(0deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        -ms-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
    }
}

.flipOutX {
    -webkit-animation-name: flipOutX;
    animation-name: flipOutX;
    -webkit-backface-visibility: visible !important;
    -ms-backface-visibility: visible !important;
    backface-visibility: visible !important;
}

@-webkit-keyframes flipOutY {
    0% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
}

@keyframes flipOutY {
    0% {
        -webkit-transform: perspective(400px) rotateY(0deg);
        -ms-transform: perspective(400px) rotateY(0deg);
        transform: perspective(400px) rotateY(0deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        -ms-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0;
    }
}

.flipOutY {
    -webkit-backface-visibility: visible !important;
    -ms-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipOutY;
    animation-name: flipOutY;
}

@-webkit-keyframes lightSpeedIn {
    0% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
    60% {
        -webkit-transform: translateX(-20%) skewX(30deg);
        transform: translateX(-20%) skewX(30deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: translateX(0%) skewX(-15deg);
        transform: translateX(0%) skewX(-15deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: translateX(0%) skewX(0deg);
        transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
}

@keyframes lightSpeedIn {
    0% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        -ms-transform: translateX(100%) skewX(-30deg);
        transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
    60% {
        -webkit-transform: translateX(-20%) skewX(30deg);
        -ms-transform: translateX(-20%) skewX(30deg);
        transform: translateX(-20%) skewX(30deg);
        opacity: 1;
    }
    80% {
        -webkit-transform: translateX(0%) skewX(-15deg);
        -ms-transform: translateX(0%) skewX(-15deg);
        transform: translateX(0%) skewX(-15deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: translateX(0%) skewX(0deg);
        -ms-transform: translateX(0%) skewX(0deg);
        transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
}

.lightSpeedIn {
    -webkit-animation-name: lightSpeedIn;
    animation-name: lightSpeedIn;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
}

@-webkit-keyframes lightSpeedOut {
    0% {
        -webkit-transform: translateX(0%) skewX(0deg);
        transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
}

@keyframes lightSpeedOut {
    0% {
        -webkit-transform: translateX(0%) skewX(0deg);
        -ms-transform: translateX(0%) skewX(0deg);
        transform: translateX(0%) skewX(0deg);
        opacity: 1;
    }
    100% {
        -webkit-transform: translateX(100%) skewX(-30deg);
        -ms-transform: translateX(100%) skewX(-30deg);
        transform: translateX(100%) skewX(-30deg);
        opacity: 0;
    }
}

.lightSpeedOut {
    -webkit-animation-name: lightSpeedOut;
    animation-name: lightSpeedOut;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
}

@-webkit-keyframes rotateIn {
    0% {
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(-200deg);
        transform: rotate(-200deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateIn {
    0% {
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(-200deg);
        -ms-transform: rotate(-200deg);
        transform: rotate(-200deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateIn {
    -webkit-animation-name: rotateIn;
    animation-name: rotateIn;
}

@-webkit-keyframes rotateInDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInDownLeft {
    -webkit-animation-name: rotateInDownLeft;
    animation-name: rotateInDownLeft;
}

@-webkit-keyframes rotateInDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInDownRight {
    -webkit-animation-name: rotateInDownRight;
    animation-name: rotateInDownRight;
}

@-webkit-keyframes rotateInUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInUpLeft {
    -webkit-animation-name: rotateInUpLeft;
    animation-name: rotateInUpLeft;
}

@-webkit-keyframes rotateInUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
}

@keyframes rotateInUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0;
    }
    100% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
}

.rotateInUpRight {
    -webkit-animation-name: rotateInUpRight;
    animation-name: rotateInUpRight;
}

@-webkit-keyframes rotateOut {
    0% {
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(200deg);
        transform: rotate(200deg);
        opacity: 0;
    }
}

@keyframes rotateOut {
    0% {
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        -webkit-transform: rotate(200deg);
        -ms-transform: rotate(200deg);
        transform: rotate(200deg);
        opacity: 0;
    }
}

.rotateOut {
    -webkit-animation-name: rotateOut;
    animation-name: rotateOut;
}

@-webkit-keyframes rotateOutDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0;
    }
}

@keyframes rotateOutDownLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0;
    }
}

.rotateOutDownLeft {
    -webkit-animation-name: rotateOutDownLeft;
    animation-name: rotateOutDownLeft;
}

@-webkit-keyframes rotateOutDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0;
    }
}

@keyframes rotateOutDownRight {
    0% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0;
    }
}

.rotateOutDownRight {
    -webkit-animation-name: rotateOutDownRight;
    animation-name: rotateOutDownRight;
}

@-webkit-keyframes rotateOutUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0;
    }
}

@keyframes rotateOutUpLeft {
    0% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: left bottom;
        -ms-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0;
    }
}

.rotateOutUpLeft {
    -webkit-animation-name: rotateOutUpLeft;
    animation-name: rotateOutUpLeft;
}

@-webkit-keyframes rotateOutUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0;
    }
}

@keyframes rotateOutUpRight {
    0% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        opacity: 1;
    }
    100% {
        -webkit-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0;
    }
}

.rotateOutUpRight {
    -webkit-animation-name: rotateOutUpRight;
    animation-name: rotateOutUpRight;
}

@-webkit-keyframes slideInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes slideInDown {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
    100% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

.slideInDown {
    -webkit-animation-name: slideInDown;
    animation-name: slideInDown;
}

@-webkit-keyframes slideInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes slideInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
    100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

.slideInLeft {
    -webkit-animation-name: slideInLeft;
    animation-name: slideInLeft;
}

@-webkit-keyframes slideInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px);
    }
    100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    0% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px);
    }
    100% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
}

.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight;
}

@-webkit-keyframes slideOutLeft {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
}

@keyframes slideOutLeft {
    0% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(-2000px);
        -ms-transform: translateX(-2000px);
        transform: translateX(-2000px);
    }
}

.slideOutLeft {
    -webkit-animation-name: slideOutLeft;
    animation-name: slideOutLeft;
}

@-webkit-keyframes slideOutRight {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        transform: translateX(2000px);
    }
}

@keyframes slideOutRight {
    0% {
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(2000px);
        -ms-transform: translateX(2000px);
        transform: translateX(2000px);
    }
}

.slideOutRight {
    -webkit-animation-name: slideOutRight;
    animation-name: slideOutRight;
}

@-webkit-keyframes slideOutUp {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
}

@keyframes slideOutUp {
    0% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(-2000px);
        -ms-transform: translateY(-2000px);
        transform: translateY(-2000px);
    }
}

.slideOutUp {
    -webkit-animation-name: slideOutUp;
    animation-name: slideOutUp;
}

@-webkit-keyframes slideInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes slideInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

.slideInUp {
    -webkit-animation-name: slideInUp;
    animation-name: slideInUp;
}

@-webkit-keyframes slideOutDown {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        transform: translateY(2000px);
    }
}

@keyframes slideOutDown {
    0% {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateY(2000px);
        -ms-transform: translateY(2000px);
        transform: translateY(2000px);
    }
}

.slideOutDown {
    -webkit-animation-name: slideOutDown;
    animation-name: slideOutDown;
}

@-webkit-keyframes hinge {
    0% {
        -webkit-transform: rotate(0);
        transform: rotate(0);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    20%,
    60% {
        -webkit-transform: rotate(80deg);
        transform: rotate(80deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    40% {
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    80% {
        -webkit-transform: rotate(60deg) translateY(0);
        transform: rotate(60deg) translateY(0);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1;
    }
    100% {
        -webkit-transform: translateY(700px);
        transform: translateY(700px);
        opacity: 0;
    }
}

@keyframes hinge {
    0% {
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    20%,
    60% {
        -webkit-transform: rotate(80deg);
        -ms-transform: rotate(80deg);
        transform: rotate(80deg);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    40% {
        -webkit-transform: rotate(60deg);
        -ms-transform: rotate(60deg);
        transform: rotate(60deg);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    80% {
        -webkit-transform: rotate(60deg) translateY(0);
        -ms-transform: rotate(60deg) translateY(0);
        transform: rotate(60deg) translateY(0);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1;
    }
    100% {
        -webkit-transform: translateY(700px);
        -ms-transform: translateY(700px);
        transform: translateY(700px);
        opacity: 0;
    }
}

.hinge {
    -webkit-animation-name: hinge;
    animation-name: hinge;
}


/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes rollIn {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%) rotate(-120deg);
        transform: translateX(-100%) rotate(-120deg);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
        transform: translateX(0px) rotate(0deg);
    }
}

@keyframes rollIn {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%) rotate(-120deg);
        -ms-transform: translateX(-100%) rotate(-120deg);
        transform: translateX(-100%) rotate(-120deg);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
        -ms-transform: translateX(0px) rotate(0deg);
        transform: translateX(0px) rotate(0deg);
    }
}

.rollIn {
    -webkit-animation-name: rollIn;
    animation-name: rollIn;
}


/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes rollOut {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
        transform: translateX(0px) rotate(0deg);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(100%) rotate(120deg);
        transform: translateX(100%) rotate(120deg);
    }
}

@keyframes rollOut {
    0% {
        opacity: 1;
        -webkit-transform: translateX(0px) rotate(0deg);
        -ms-transform: translateX(0px) rotate(0deg);
        transform: translateX(0px) rotate(0deg);
    }
    100% {
        opacity: 0;
        -webkit-transform: translateX(100%) rotate(120deg);
        -ms-transform: translateX(100%) rotate(120deg);
        transform: translateX(100%) rotate(120deg);
    }
}

.rollOut {
    -webkit-animation-name: rollOut;
    animation-name: rollOut;
}

@-webkit-keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(.3);
        transform: scale(.3);
    }
    50% {
        opacity: 1;
    }
}

@keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale(.3);
        -ms-transform: scale(.3);
        transform: scale(.3);
    }
    50% {
        opacity: 1;
    }
}

.zoomIn {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn;
}

@-webkit-keyframes zoomInDown {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateY(-2000px);
        transform: scale(.1) translateY(-2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(.475) translateY(60px);
        transform: scale(.475) translateY(60px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

@keyframes zoomInDown {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateY(-2000px);
        -ms-transform: scale(.1) translateY(-2000px);
        transform: scale(.1) translateY(-2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(.475) translateY(60px);
        -ms-transform: scale(.475) translateY(60px);
        transform: scale(.475) translateY(60px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

.zoomInDown {
    -webkit-animation-name: zoomInDown;
    animation-name: zoomInDown;
}

@-webkit-keyframes zoomInLeft {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(-2000px);
        transform: scale(.1) translateX(-2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(48px);
        transform: scale(.475) translateX(48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

@keyframes zoomInLeft {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(-2000px);
        -ms-transform: scale(.1) translateX(-2000px);
        transform: scale(.1) translateX(-2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(48px);
        -ms-transform: scale(.475) translateX(48px);
        transform: scale(.475) translateX(48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

.zoomInLeft {
    -webkit-animation-name: zoomInLeft;
    animation-name: zoomInLeft;
}

@-webkit-keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(2000px);
        transform: scale(.1) translateX(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(-48px);
        transform: scale(.475) translateX(-48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

@keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(2000px);
        -ms-transform: scale(.1) translateX(2000px);
        transform: scale(.1) translateX(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(-48px);
        -ms-transform: scale(.475) translateX(-48px);
        transform: scale(.475) translateX(-48px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

.zoomInRight {
    -webkit-animation-name: zoomInRight;
    animation-name: zoomInRight;
}

@-webkit-keyframes zoomInUp {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateY(2000px);
        transform: scale(.1) translateY(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(.475) translateY(-60px);
        transform: scale(.475) translateY(-60px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

@keyframes zoomInUp {
    0% {
        opacity: 0;
        -webkit-transform: scale(.1) translateY(2000px);
        -ms-transform: scale(.1) translateY(2000px);
        transform: scale(.1) translateY(2000px);
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }
    60% {
        opacity: 1;
        -webkit-transform: scale(.475) translateY(-60px);
        -ms-transform: scale(.475) translateY(-60px);
        transform: scale(.475) translateY(-60px);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
    }
}

.zoomInUp {
    -webkit-animation-name: zoomInUp;
    animation-name: zoomInUp;
}

@-webkit-keyframes zoomOut {
    0% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    50% {
        opacity: 0;
        -webkit-transform: scale(.3);
        transform: scale(.3);
    }
    100% {
        opacity: 0;
    }
}

@keyframes zoomOut {
    0% {
        opacity: 1;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
    50% {
        opacity: 0;
        -webkit-transform: scale(.3);
        -ms-transform: scale(.3);
        transform: scale(.3);
    }
    100% {
        opacity: 0;
    }
}

.zoomOut {
    -webkit-animation-name: zoomOut;
    animation-name: zoomOut;
}

@-webkit-keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale(.475) translateY(-60px);
        transform: scale(.475) translateY(-60px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(.1) translateY(2000px);
        transform: scale(.1) translateY(2000px);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
    }
}

@keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale(.475) translateY(-60px);
        -ms-transform: scale(.475) translateY(-60px);
        transform: scale(.475) translateY(-60px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(.1) translateY(2000px);
        -ms-transform: scale(.1) translateY(2000px);
        transform: scale(.1) translateY(2000px);
        -webkit-transform-origin: center bottom;
        -ms-transform-origin: center bottom;
        transform-origin: center bottom;
    }
}

.zoomOutDown {
    -webkit-animation-name: zoomOutDown;
    animation-name: zoomOutDown;
}

@-webkit-keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(42px);
        transform: scale(.475) translateX(42px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(-2000px);
        transform: scale(.1) translateX(-2000px);
        -webkit-transform-origin: left center;
        transform-origin: left center;
    }
}

@keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(42px);
        -ms-transform: scale(.475) translateX(42px);
        transform: scale(.475) translateX(42px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(-2000px);
        -ms-transform: scale(.1) translateX(-2000px);
        transform: scale(.1) translateX(-2000px);
        -webkit-transform-origin: left center;
        -ms-transform-origin: left center;
        transform-origin: left center;
    }
}

.zoomOutLeft {
    -webkit-animation-name: zoomOutLeft;
    animation-name: zoomOutLeft;
}

@-webkit-keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(-42px);
        transform: scale(.475) translateX(-42px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(2000px);
        transform: scale(.1) translateX(2000px);
        -webkit-transform-origin: right center;
        transform-origin: right center;
    }
}

@keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale(.475) translateX(-42px);
        -ms-transform: scale(.475) translateX(-42px);
        transform: scale(.475) translateX(-42px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(.1) translateX(2000px);
        -ms-transform: scale(.1) translateX(2000px);
        transform: scale(.1) translateX(2000px);
        -webkit-transform-origin: right center;
        -ms-transform-origin: right center;
        transform-origin: right center;
    }
}

.zoomOutRight {
    -webkit-animation-name: zoomOutRight;
    animation-name: zoomOutRight;
}

@-webkit-keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale(.475) translateY(60px);
        transform: scale(.475) translateY(60px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(.1) translateY(-2000px);
        transform: scale(.1) translateY(-2000px);
        -webkit-transform-origin: center top;
        transform-origin: center top;
    }
}

@keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale(.475) translateY(60px);
        -ms-transform: scale(.475) translateY(60px);
        transform: scale(.475) translateY(60px);
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
    }
    100% {
        opacity: 0;
        -webkit-transform: scale(.1) translateY(-2000px);
        -ms-transform: scale(.1) translateY(-2000px);
        transform: scale(.1) translateY(-2000px);
        -webkit-transform-origin: center top;
        -ms-transform-origin: center top;
        transform-origin: center top;
    }
}

.zoomOutUp {
    -webkit-animation-name: zoomOutUp;
    animation-name: zoomOutUp;
}





 </style>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

