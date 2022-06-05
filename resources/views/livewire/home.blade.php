@section('styles')
<style>
body {
    font-family: "Peyda";
}
@media screen and (min-width:769px){
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
@media screen and (max-width:768px){
    .desktopContainer{
        display: none;
    }
    body {
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('images/mobileBackground.png');
        background-position: top;
        overflow: hidden;
        overflow-y: scroll;
    }
    .mobileCupImage{
        text-align:center;
        margin-top:80%;
    }
    .mobileH1Container{
        color: #fff;
        text-align:center;
    }
    .mobileScoreShowContainer{
        display:flex;
        flex-direction: row;
        gap: 1%;
        align-items: center;
        margin-top:5%;
        color: #fff;
        justify-content: center;
    }
    .mobileLine{
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
    .mobileLogoContainer{
        display: flex;
        gap:2%;
        flex-direction: row;
        align-items: center;
        justify-content:center;
    }
    .winnerContainer{
        display: flex;
        flex-direction: row;
        align-items: center;
        color: #fff;
        justify-content: center;
        margin-right: 15%;
    }
    .winnerRowsContainer{
        display: flex;
        flex-direction: column;
        align-items: center;
        align-self: flex-start;
        margin-top: 1%;
        width:100%;
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
    .mobileMedalImage{
        margin-right: -30%;
    }
    .mobileMedalImage img{
        width: 90%;
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
            <h5>{{$scores}} شانس</h5>
        </div>
        @if(auth()->user()->is_admin)
            <div class="desktopStartBtn" wire:click='choose()'>
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
                    @if($first_user_name==null)
                        <span>۰ شانس</span>
                        <span dir="ltr">نامشخص</span>
                    @else
                        <span>{{$first_user_score}} شانس</span>
                        <span dir="ltr">@ {{$first_user_name}}</span>
                    @endif
                </div>
                <div class="winnerRow">
                    @if($second_user_name==null)
                        <span>۰ شانس</span>
                        <span dir="ltr">نامشخص</span>
                    @else
                        <span>{{$second_user_score}} شانس</span>
                        <span dir="ltr">@ {{$second_user_name}}</span>
                    @endif
                </div>
                <div class="winnerRow">
                    @if($third_user_name==null)
                        <span>۰ شانس</span>
                        <span dir="ltr">نامشخص</span>
                    @else
                        <span>{{$third_user_score}} شانس</span>
                        <span dir="ltr">@ {{$third_user_name}}</span>
                    @endif
                </div>
            </div>
            <div class="desktopMedalImage">
                <img src="{{asset('images/firstmedal.png')}}">
            </div>
        </div>
    </div>
    <div class="mobileContainer">
        <div class="mobileCupImage">
            <img src="{{asset('images/winnercup.png')}}" style="width:60%;">
        </div>
        <div class="mobileH1Container">
            <h2>با آریو ایده باش و <span style="color:#FF9E0C;">جایزه</span> بگیر</h2>
            <h5>قرعه کشی کمپین آریو ایده در تاریخ ۲۱ خرداد ماه</h5>
        </div>
        <div class="mobileScoreShowContainer">
            <h5>تعداد شانس ها</h5>
            <div class="mobileLine"></div>
            <span class="dot"></span>
            <h5>{{$scores}} شانس</h5>
        </div>
        <div class="mobileLogoContainer">
            <h4 style="color:#FF9E0C;">برنده‌های <br>قرعه‌کشی</h4>
            <img src="{{asset('images/whiteLogo.png')}}">
        </div>
        <div class="winnerContainer">
            <div class="winnerRowsContainer">
                <div class="winnerRow">
                    @if($first_user_name==null)
                        <span>۰ شانس</span>
                        <span dir="ltr">نامشخص</span>
                    @else
                        <span>{{$first_user_score}} شانس</span>
                        <span dir="ltr">@ {{$first_user_name}}</span>
                    @endif
                </div>
                <div class="winnerRow">
                    @if($second_user_name==null)
                        <span>۰ شانس</span>
                        <span dir="ltr">نامشخص</span>
                    @else
                        <span>{{$second_user_score}} شانس</span>
                        <span dir="ltr">@ {{$second_user_name}}</span>
                    @endif
                </div>
                <div class="winnerRow">
                    @if($third_user_name==null)
                        <span>۰ شانس</span>
                        <span dir="ltr">نامشخص</span>
                    @else
                        <span>{{$third_user_score}} شانس</span>
                        <span dir="ltr">@ {{$third_user_name}}</span>
                    @endif
                </div>
            </div>
            <div class="mobileMedalImage">
                <img src="{{asset('images/firstmedal.png')}}">
            </div>
        </div>
    </div>
</div>
