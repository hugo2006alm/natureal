        <?php include 'components/bottom_nav.php';?>
    </body>
    <script>
    var title = document.getElementById("title");
    var countdownBottom = document.getElementById("countdown-bottom");
    var countdownTop = document.getElementById("countdown-top");
    
    window.addEventListener("scroll", function() {
        if (this.pageYOffset > 0) {
            title.classList.add('opacity-0');
            // title.classList.add('hidden');
            countdownBottom.classList.add('opacity-0');
            countdownTop.classList.remove('opacity-0');
            // countdownTop.classList.remove('hidden');
        } else {
            title.classList.remove('opacity-0');
            // title.classList.remove('hidden');
            countdownBottom.classList.remove('opacity-0');
            countdownTop.classList.add('opacity-0');
            // countdownTop.classList.add('hidden');
        }
    });
</script>
</html>