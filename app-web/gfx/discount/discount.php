<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .discount{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 70vh;
        background: linear-gradient(0deg, var(--color1) 0px, var(--color4));
    }

    .discount h1, p{
        color: var(--c2light);
    }

    .discount-box{
        width: 600px;
        background: linear-gradient(0deg, var(--color1) 0px, var(--color4));
        padding: 60px;
        border-radius: 10px;
        box-shadow: 0px 30px 40px 0px rgba(0, 0, 0, .5);
    }

    .discount-box .title-super{
        padding-bottom: 10px;
    }

    .discount-off{
        text-decoration: line-through;
    }

    @media (orientation: portrait) {
        .discount{
            height: 70vh;
            padding-left: 20px;
            padding-right: 20px;
        }

        .discount-box{
            width: 100%;
            padding: 30px;
        }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->
<section class="discount">
    <div class="discount-box">
        <h1 class="title-super color3">Promo!</h1>
        <p class="color2">Your best text to offer any thing!</p>
        <div class="clear20x"></div>

        <h1 class="title-4 discount-off color2">U$300</h1>
        <h1 class="title-4 colorlight">Only: U$1000</h1>
        <div class="clear20x"></div>
        <a href="#" class="btn">Your call to action</a>
    </div>
</section>