<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->

<!-- 

Loading gif

-->
<style type="text/css">
    .loading{
        z-index: 99;
        position: fixed;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(var(--color2), var(--color3));
        opacity: 1;
    }
    .loader-container {
        position: absolute;
        top: 30%;
    }

    .spinner {
        width: 66px; 
        height: 66px; 
        border: 1px solid var(--color3); 
        border-top-color: var(--color2);
        border-radius: 50%; 
        animation: spin .5s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    @media (orientation: portrait) {
        .loading img{
            width: 60%;
        }
    }
</style>

<div class="loading">
    <div class="loader-container loading-object">
        <div class="spinner"></div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        setTimeout(() => { loading(); }, 500);
    });

    gsap.set(".loading", {opacity: 1, y: 0});
    function loading(){
        let loading = gsap.timeline();
        loading.to(".loading-object", {
            duration: 1,
            opacity: 0,
            scale: 0.1,
            ease: "elastic.out"
        });
        loading.to(".loading", {
            duration: 1,
            autoAlpha: 0,
            ease: "power2.out",
            onComplete: motion
        }, "-=0.7");
    }
</script>