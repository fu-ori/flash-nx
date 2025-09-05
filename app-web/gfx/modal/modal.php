<style type="text/css">
    .modal {
        opacity: 0;
        visibility: hidden;
        position: fixed;
        z-index: 98;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
        width: 60%;
        background-color: #fefefe;
        margin: 5% auto;
        border-radius: 30px;
        padding: 40px;
        position: relative;
        font-family: "Montserrat", sans-serif;
    }

    .modal .close {
        position: absolute;
        top: 20px;
        right: 20px;
        color: #222;
        font-size: 28px;
        font-weight: bold;
    }
    .modal .close:hover,
    .modal .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    @media (orientation: portrait) {
        #modal-example .modal-content{
            width: 98%;
        }
    }
</style>

<div id="modal-example" class="modal">
    <div class="modal-content modal-center">
        <span class="close"><i class="ph-fill ph-x-circle"></i></span>
        <h1>Hello World</h1>
    </div>
</div>

<section class="section-full">
    <button onclick="openModal()" class="btn-outline">Open Modal</button>
</section>

<script type="text/javascript">
    function openModal() {
        gsap.to(".modal", { duration: 0.3, autoAlpha: 1, ease: "power2.out" });
    }
    function closeModal() {
        gsap.to(".modal", { duration: 0.3, autoAlpha: 0, ease: "power2.in" });
    }

    document.querySelector(".close").addEventListener("click", function() {
        closeModal();
    });
    window.addEventListener("click", function(event) {
        if (event.target.classList.contains("modal")) {
            closeModal();
        }
    });
</script>