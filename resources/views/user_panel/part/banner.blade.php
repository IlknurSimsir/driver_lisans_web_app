<style>
    .centered-text {
        position: absolute;
        top: 25%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.7);
        /* Beyaz arka plan ve biraz şeffaflık */
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        width: 400px;
    }

    #dynamicBannerText {
        font-size: 24px;
        /* Yazı boyutunu ayarlamak için */
        color: black;
    }
</style>
<div>
    <img src="img/mainPage.png" class="sliderImg" alt="">
    <div class="centered-text">
        <span id="dynamicBannerText">{{ $dynamicBannerText }}</span>
    </div>
</div>
