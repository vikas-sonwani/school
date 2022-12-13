 <!--Jquery Library-->
 <script src="{{ asset('website/js/jquery.js') }}"></script>
 <!--Bootstrap core JavaScript-->
 <script src="{{ asset('website/js/bootstrap.js') }}"></script>
 <!--Slick Slider JavaScript-->
 <script src="{{ asset('website/js/slick.min.js') }}"></script>
 <!--Dl Menu Script-->
 <script src="{{ asset('website/js/dl-menu/modernizr.custom.js') }}"></script>
 <script src="{{ asset('website/js/dl-menu/jquery.dlmenu.js') }}"></script>
 <!--Custom JavaScript-->
 <script src="{{ asset('website/js/custom.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<script type="text/javascript">
 	/** TO DISABLE SCREEN CAPTURE **/
    document.addEventListener('keyup', (e) => {
        if (e.key == 'PrintScreen') {
            navigator.clipboard.writeText('');
            alert('Screenshots disabled!');
        }
    });
    /** TO DISABLE PRINTS WHIT CTRL+P **/
    document.addEventListener('keydown', (e) => {
        if (e.ctrlKey && e.key == 'p') {
            alert('This section is not allowed to print or export to PDF');
            e.cancelBubble = true;
            e.preventDefault();
            e.stopImmediatePropagation();
        }
    });
 </script>
 @stack('script')