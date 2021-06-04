<!-- Rotating spinning doge -->
<style>
         .animated {
            -webkit-animation-duration: 10s;animation-duration: 10s;
            -webkit-animation-fill-mode: both;animation-fill-mode: both;
         }
         @-webkit-keyframes fadeOut {
            0% {opacity: 1;-moz-transform: rotate(360deg);}
            100% {opacity: 0;}
         }

         @keyframes fadeOut {
            0% {opacity: 1;}
            100% {opacity: 0;-webkit-transform: rotate(360deg);}
         }
         .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
         }
         
  .rot8{
    /* rotate */
    	/*
        -webkit-animation:spin 4s;
        -moz-animation:spin 4s;
        animation:spin 4s;
        */
	}
/* rotate / fade keyframes */
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); }

</style>

<img class="animated fadeOut rot8" src="http://assets.stickpng.com/thumbs/5845e770fb0b0755fa99d7f4.png">
