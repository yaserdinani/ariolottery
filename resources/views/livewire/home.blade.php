@section('styles')
<style>
body {
    font-family: "Peyda";
}
@media screen and (min-width:577px){
    body {
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('images/DesktopBackground.png');
        height: 100vh;
        background-position: top;
    }
    .mobileContainer{
        display:none;
    }
    .desktopContainer{
        text-align: right;
    }
    .desktopCupImage{
        margin-right: 15%;
    }
    .desktopH1Container{
        color: #000;
    }
    .desktopH1Container{
        margin-right: 15%;
        margin-top: -2%;
    }
    .desktopScoreShowContainer{
        margin-right: 13%;
        display:flex;
        flex-direction: row;
        gap: 0.5%;
        align-items: center;
        margin-top:2%;
        color: #000;
    }
    .desktopLine{
        height: 1px;
        width: 20%;
        border-top: 2px dashed #FF9E0C;
        margin-top:-0.5%;
    }
    .dot{
        width:10px;
        height: 10px;
        background-color: #FF9E0C;
        border-radius: 50%;
        margin-top:-0.5%;
        margin-right: -1.1%;
    }
    .desktopLogoContainer{
        margin-right:13%;
        display: flex;
        gap:2%;
        flex-direction: row;
        align-items: center;
        margin-top:-2%;
    }
    .winnerContainer{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-right: 15%;
    }
    .winnerRowsContainer{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 25%;
        align-self: flex-start;
        margin-top: 1%;
    }
    .winnerRow{
        border: 1px solid #FF9E0C;
        border-radius: 12px;
        padding-top:2%;
        padding-bottom: 2%;
        padding-left:5%;
        padding-right: 5%;
        width:100%;
        display: flex;
        flex-direction: row;
        justify-content:space-around;
        align-items: center;
        margin-bottom: 5%;
    }
    .desktopMedalImage{
        margin-right: -8%;
    }
    .desktopStartBtn{
        padding-left:2%;
        padding-right: 2%;
        padding-top:0.5%;
        padding-bottom: 0.5%;
        font-size:1.5vw;
        color: #fff;
        text-align: center;
        margin-right: 18%;
        width:16%;
        background: #FF9E0C;
        box-shadow: 0px 0px 29px rgba(255, 158, 12, 0.5);
        border-radius: 27px;
        cursor: pointer;
    }
}
@media screen and (max-width:576px){
    .desktopContainer{
        display: none;
    }
}
</style>
@endsection
<div>
    <div class="desktopContainer">
        <div class="desktopCupImage">
            <img src="{{asset('images/winnercup.png')}}">
        </div>
        <div class="desktopH1Container">
            <h1>با آریو ایده باش و <span style="color:#FF9E0C;">جایزه</span> بگیر</h1>
            <h4>قرعه کشی کمپین آریو ایده در تاریخ ۲۱ خرداد ماه</h4>
        </div>
        <div class="desktopScoreShowContainer">
            <h5>تعداد شانس ها</h5>
            <div class="desktopLine"></div>
            <span class="dot"></span>
            <h5>۲۰۰ نفر</h5>
        </div>
        @if(auth()->user()->is_admin)
            <div class="desktopStartBtn">
                شروع
            </div>
        @else
            <div class="desktopLogoContainer">
                <h4 style="color:#FF9E0C;font-size:2vw;">برنده‌های <br>قرعه‌کشی</h4>
                <img src="{{asset('images/blacklogo.png')}}">
            </div>
        @endif
        <div class="winnerContainer">
            <div class="winnerRowsContainer">
                <div class="winnerRow">
                    <span>۱۰ شانس</span>
                    <span>@yaserdinani</span>
                </div>
                <div class="winnerRow">
                    <span>۱۰ شانس</span>
                    <span>@yaserdinani</span>
                </div>
                <div class="winnerRow">
                    <span>۱۰ شانس</span>
                    <span>@yaserdinani</span>
                </div>
            </div>
            <div class="desktopMedalImage">
                <img src="{{asset('images/firstmedal.png')}}">
            </div>
        </div>
    </div>
    <div class="mobileContainer"></div>
</div>
