<script type="text/javascript">
    // gsap init
    gsap.registerPlugin(ScrollTrigger);

    // autoscroll
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".autoscroll-btn").forEach(btn => {
            btn.addEventListener("click", function (e) {
                e.preventDefault();
                const targetId = this.getAttribute("href") || this.getAttribute("data-target");
                const targetElement = document.getElementById(targetId.substring(1));
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 0,
                        behavior: "smooth"
                    });
                }
            });
        });
    });

    //soon
    function comingsoon(){ alert("em breve!"); }
</script>

<script type="text/javascript">
    var faqEngine = document.getElementsByClassName("faq-ask");
    var i;

    for (i = 0; i < faqEngine.length; i++) {
        faqEngine[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var faq = this.nextElementSibling;
            if (faq.style.maxHeight) {
                faq.style.maxHeight = null;
            } else {
                faq.style.maxHeight = faq.scrollHeight + "px";
            }
        });
    }
</script>