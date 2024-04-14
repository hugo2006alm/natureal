        <div class="w-screen h-16"></div>
        <?php include 'components/bottom_nav.php';?>
    </body>
    <script>
    var title = document.getElementById("title");
    var countdownBottom = document.getElementById("countdown-bottom");
    var countdownTop = document.getElementById("countdown-top");
    var bottom_nav = document.getElementById("bottom-nav");
    
    if (countdownBottom) {
        if (!location.pathname.includes('/index.php') && !location.pathname.endsWith('src/')) {
            title.classList.add('opacity-0');
            // title.classList.add('hidden');
            countdownBottom.classList.add('opacity-0');
            countdownBottom.classList.add('-z-10');
            countdownBottom.classList.remove('z-10');
            countdownTop.classList.remove('opacity-0');
            // countdownTop.classList.remove('hidden');
            throw new Error("Stop execution");
        }
        
        window.addEventListener("scroll", function() {
            if (this.pageYOffset > 0) {
                title.classList.add('opacity-0');
                // title.classList.add('hidden');
                countdownBottom.classList.add('opacity-0');
                countdownBottom.classList.add('-z-10');
                countdownBottom.classList.remove('z-10');
                countdownTop.classList.remove('opacity-0');
                // countdownTop.classList.remove('hidden');
                
            } else {
                title.classList.remove('opacity-0');
                // title.classList.remove('hidden');
                countdownBottom.classList.remove('opacity-0');
                countdownBottom.classList.remove('-z-10');
                countdownBottom.classList.add('z-10');
                countdownTop.classList.add('opacity-0');
                // countdownTop.classList.add('hidden');
            }
        });
    } else {
        if (!location.pathname.includes('/index.php') && !location.pathname.endsWith('src/')) {
            title.classList.add('opacity-0');
            // title.classList.add('hidden');
            countdownTop.classList.remove('opacity-0');
            // countdownTop.classList.remove('hidden');
            throw new Error("Stop execution");
        }
        
        window.addEventListener("scroll", function() {
            if (this.pageYOffset > 0) {
                title.classList.add('opacity-0');
                // title.classList.add('hidden');
                countdownTop.classList.remove('opacity-0');
                // countdownTop.classList.remove('hidden');
            } else {
                title.classList.remove('opacity-0');
                // title.classList.remove('hidden');
                countdownTop.classList.add('opacity-0');
                // countdownTop.classList.add('hidden');
            }
        });
    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </html>