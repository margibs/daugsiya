@extends('home.layout')

@section('homecontentResposnive')

<style type="text/css">
  body {
        margin-top: 100px;
    }
  img{width: 100%;}
  .container_24{display: none;}

  .homepageReel{
    margin-top: 0;
    background: none;
  }
 
   #playbig {
    position: absolute;
    right: 125px;
    top: 540px;
    margin-left: 0;
  }
  @media(max-width: 1366px){
  	body{
  		margin-top: 80px;
  	}
    .container {
        width: 1060px;
    }
    .topReel{
      width: 100%;
    }
    .categoryReel{
      top: 627px;
      height: 953px;
      width: 1081px;
    }
    .homepageReel .headText2{
      font-size: 60px;
      padding-top: 47px;
    }
    .headText span, .headText2 span{
      font-size: 107px;
      margin-right: 90px;
    }
    .homepageReel .susan{
      width: 235px;
      z-index: 2;
      right: 67px;
      top: 2px;
    }
    .homeText{
      margin-top: 88px;
      margin-bottom: 8px;
    }
    .homeText2{
      top: 629px;
      left: 221px;
    }
    .categoryMain{
      padding: 23px 52px 0px 49px;
    }
    .categories{
      padding:10px 10px 57px 10px;
    }
    .reels {
        padding: 0 76px 0 79px;
    	margin-top: 46px;
        height: 259px;
    }
    #playbig{
        top: 491px;
    }
    .categAds1366{
      padding-right: 0;
    }

    .bigwinsMainReel{
      top: 1578px;
      left: 1px;
      width: 1083px;
    }
    .bigwinsMain {
      padding: 14px 0px 0 58px;
    }
    .bigwinsMain ul li a {
        height: 248px;
    }
    .latestMain{
      margin: 65px 0px 0 9px;
    }
    .latestMain ul li a{
      height: 127px;
    }
    .footerReel{
          width: 101%;
    }
  }
  @media(max-width: 1199px){
      body {
          margin-top: 120px;
      }
       #playbig a {
          width: 140px;
          height: 77px;
      }
      #playbig .button {
          font: 37px/1em 'Work Sans',sans-serif;
          padding: .4em .6em;
           font-weight: 600;
      }
      #playbig {
          right: 95px;
          top: 482px;
      }
      .homeText2 {
        top: 627px;
      }
      .homepageReel{
        height: auto;
      }
      .bigwinsMain ul li, .bigwinsMain ul li a{
            height: 251px;
      width: 235px;
      }
      .latestMain {
          margin: 65px -1px 0 8px;
      }
      .latestMain ul li a {
          height: 114px;
      }
      .latestMain .ads2 {
       margin-top: 53px;
      }
      .latestMain .ads2 img{
         width: 98%;
      }
      .categoryMain {
          padding: 23px 44px 0px 49px;
      }
      .categAds a img {
        width: 100%;
    }
  }
 
  @media(max-width: 1024px){
    .container{
      width: 100%;
    }
    body {
      margin-top: 110px;
    }

    .homepageReel .susan {
      width: 230px;
      right: 61px;
      top: -8px;
    }
    .topReel {
        width: 99.5%;
    }
    .reels {
      padding: 0 70px 0 75px;
      margin-top: 40px;
      height: 242px;
    }
    .categoryReel{
      width: 100%;
      top: 585px;
      left: 3px;
    }
    .categAds{
      height: 937px;
    }
    .categoryMain {
      padding: 16px 45px 0px 43px;
    }
     .categories {
      padding: 10px 9px 25px 10px;
    }
    .homepageReel .headText2 {
      font-size: 60px;
      padding-top: 45px;
    }
    .headText span, .headText2 span {
      font-size: 96px;
      margin-right: 90px;
    }
    .homeText {
      margin-top: 88px;
      margin-bottom: 8px;
      margin-left: 103px;
    }
    .homeText2 {
      top: 586px;
      left: 154px;
    }
    .bigwinsMainReel {
        top: 1471px;
        width: 100%;
        left: 3px;
    }
    #playbig {
        right: 95px;
        top: 459px;
    }
    #playbig a {
      width: 140px!important;
      height: 72px!important;
    }
    .bigwinsMain {
        padding: 11px 0px 0 58px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
        height: 229px;
        width: 216px;
    }
    .latestMain {
        margin: 38px 3px 0 8px;
    }
    .footerReel {
      width: 100%;
    }

  }
  @media(max-width: 1015px){
    .categoryReel{
      top: 582px;
    }
    .categoryMain {
        padding: 13px 45px 0px 43px;
    }
    .homeText2 {
      top: 580px;
    }
  }

  @media(max-width: 1012px){
    .categoryReel{
      top: 579px;
    }
    .categoryMain {
        padding: 10px 45px 0px 43px;
    }
    .homeText2 {
      top: 578px;
    }
    .bigwinsMainReel {
      top: 1461px;
    }
    .bigwinsMain {
        padding: 5px 0px 0 58px;
    }
  }
  @media(max-width: 1006px){
    .categoryReel{
      top: 575px;
      height: 877px;
    }
    .categAds {
        height: 842px;
    }
    .categoryMain {
        padding: 3px 45px 0px 43px;
    }
    .homeText2 {
      top: 571px;
    }
    .bigwinsMainReel {
      top: 1442px;
    }
    .bigwinsMain {
        padding: 87px 0px 0 58px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
        height: 228px;
        width: 213px;
    }
  }
  @media(max-width: 997px){
    .categoryReel {
        top: 571px;
    }
    .categoryMain {
        padding: 0px 45px 0px 43px;
    }
    .homeText2 {
        top: 568px;
    }
  }
  @media(max-width: 991px){
    .verytopHeader {
        padding: 5px 0 5px 70px;
    }
    .homepageReel .susan {
        top: -15px;
    }
    #playbig {
        right: 100px;
        top: 447px;
    }
    #playbig a {
        width: 127px!important;
        height: 66px!important;
    }
    #playbig .button {
        font: 33px/1em 'Work Sans',sans-serif;
        font-weight: 600;
    }
    .homepageReel .headText2 {
        font-size: 56px;
        padding-top: 41px;
    }
    .reels {
        padding: 0 72px 0 72px;
        margin-top: 42px;
        height: 232px;
    }
    .categoryReel {
        top: 561px;
    }
    .homeText {
      margin-top: 91px;
    }
    .homeText2 {
        top: 558px;
    }
    .categoryMain {
        height: 971px;
    }
    .bigwinsMainReel {
        top: 1438px;
    }
    .bigwinsMain {
        padding: 93px 0px 0 58px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
        height: 224px;
        width: 209px;
    }
    .latestMain {
        margin: 76px 2px 0 8px;
    }
    .latestMain .ads2 {
          margin-top: 13px;
    }
    .latestMain ul li a {
        height: 151px;
    }
    .categAds {
        height: 844px;
    }
  }

  @media(max-width: 975px){
    .homepageReel .susan {
        top: -18px;
    }
    .categoryReel {
        top: 557px;
        height: 854px;
    }
    .categories ul li {
        width: 19%;
    }
    .latestMain ul li a {
        height: 150px;
    }
    .reels {
        padding: 0 70px 0 71px;
        margin-top: 38px;
        height: 228px;
    }
    .homeText{
      margin-top: 94px;
      margin-bottom: 10px;
      font-size: 26px;
    }
    .homeText2 {
      top: 553px;
      font-size: 26px;
      margin-left: -2px;
    }
    .categoryMain {
        padding: 0 43px 0px 41px;
    }
    .categAds {
        height: 821px;
        overflow: hidden;
    }
    .bigwinsMain {
        padding: 72px 0px 0 58px;
    }
    .bigwinsMainReel {
        top: 1410px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
        height: 221px;
        width: 205px;
    }
    .latestMain {
        margin: 76px 2px 0 7px;
    }
  }

  @media(max-width: 966px){
    .homepageReel .susan {
        top: -20px;
    }
    .homepageReel .headText2 {
        font-size: 55px;
        padding-top: 40px;
    }
    .headText span, .headText2 span {
        font-size: 93px;
        margin-right: 90px;
    }
    .reels {
        padding: 0 70px 0 71px;
        margin-top: 42px;
        height: 229px;
    }
    .homeText {
         margin-bottom: 12px;
         margin-left: 101px;
    }
    .homeText2 {
        top: 546px;
    }
    #playbig {
        top: 434px;
    }
    .categoryReel {
      top: 553px;
      height: 848px;
    }
    .categAds {
      height: 816px;
    }
    .homeText {
        margin-top: 89px;
        margin-bottom: 11px;        
    }
    .homeText2 {
        top: 548px;     
    }
    .latestMain ul li a {
        height: 148px;
    }
    .bigwinsMainReel {
        top: 1390px;
    }
    .bigwinsMain {
        padding: 53px 0px 0 51px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
        height: 218px;
        width: 206px;
    }
  }
  @media(max-width: 959px){
    .homepageReel .susan {
        top: -21px;
    }
    .categoryReel {
      top: 547px;
      height: 838px;
    } 
    .reels {
      padding: 0 69px 0 69px;
      margin-top: 40px;
      height: 223px;
    }
    .homeText {
        margin-bottom: 12px;
    }
    .homeText2 {
        top: 540px;
        margin-left: -5px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
        height: 216px;
        width: 204px;
    }
    .latestMain ul li a {
        height: 145px;
    }
    .bigwinsMainReel {
        top: 1380px;
    }
    .categAds {
        height: 805px;
    }
    .bigwinsMain {
        padding: 48px 0px 0 51px;
    }
  }
  @media(max-width: 949px){
    .homepageReel .susan {
        top: -23px;
    }
    .homepageReel .headText2 {
      font-size: 51px;
    }
    .headText span, .headText2 span {
      font-size: 87px;
    }
    .homeText {
        margin-bottom: 10px;
    }
    .reels {
      padding: 0 69px 0 69px;
      margin-top: 47px;
      height: 223px;
    }
    .categAds {
        height: 797px;
    }
    .categories {
        padding: 10px 9px 19px 10px;
    }
    .categoryReel {
        top: 542px;
        height: 828px;
    }
    .categoryMain {
        padding: 0 40px 0px 39px;
    }
    .homeText2 {
      top: 537px;
    }
    .bigwinsMain {
        padding: 39px 0px 0 51px;
    }
    .bigwinsMainReel {
        top: 1369px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
        height: 214px;
        width: 202px;
    }
  }
  @media(max-width: 941px){
        #playbig {
          top: 425px;
      }
      .homeText {
          margin-top: 86px;
          margin-bottom: 8px;
      }
      .bigwinsMain {
          padding: 26px 0px 0 51px;
      }
      .homeText2 {
          top: 532px;
      }
      .categoryReel {
          top: 537px;
          height: 825px;
      }
      .categAds {
          height: 789px;
      }
      .bigwinsMainReel {
          top: 1357px;
      }
      .bigwinsMain ul li, .bigwinsMain ul li a {
          height: 212px;
          width: 200px;
      }
      .latestMain {
          margin: 76px 1px 0 7px;
      }
  }
  @media(max-width: 932px){
    #playbig {
        top: 421px;
    }
    .reels {
      padding: 0 66px 0 67px;
      margin-top: 43px;
      height: 217px;
    }
    .homepageReel .susan {
        top: -27px;
    }
    .homeText {
      margin-top: 86px;
      margin-bottom: 12px;
      margin-left: 79px;
    }
    .homeText2 {
        top: 524px;
        margin-left: -28px;
    }
    .categoryReel {
        top: 532px;
        height: 816px;
    }
    .categAds {
        height: 786px;
    }
    .bigwinsMain {
        padding: 24px 0px 0 51px;
    }
    .bigwinsMainReel {
        top: 1345px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
        height: 208px;
        width: 197px;
    }
    .latestMain ul li a {
        height: 137px;
    }
  }

  @media(max-width: 923px){
    .categoryReel {
        top: 526px;
        height: 800px;
    }
    .categoryMain {
      padding: 0 40px 0px 37px;
      height: 968px;
    }
    .homeText{
        margin-bottom: 6px;
        margin-left: 81px;
    }
    .categAds {
        height: 770px;
    }
    .categories {
        padding: 10px 9px 16px 10px;
    }
    .bigwinsMainReel {
        top: 1319px;
    }
    .bigwinsMain {
        padding: 0 0px 0 51px;
    }
    .latestMain {
        margin: 76px 1px 0 6px;
    }
  }

  @media(max-width: 913px){
    .homepageReel .susan {
        top: -31px;
    }
    .homepageReel .headText2 {
      font-size: 50px;
    }
    .headText span, .headText2 span {
        font-size: 82px;
    }
    #playbig {
      top: 410px;
      right: 90px;
    }
    .homeText2 {
      top: 518px;
    }
    .categoryReel {
        top: 520px;
        height: 792px;
    }
    .categoryMain {
        padding: 0 40px 0px 37px;
        height: 963px;
    }
    .categAds {
        height: 762px;
    }
    .bigwinsMainReel {
        top: 1309px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
        height: 205px;
        width: 193px;
    }
    .refCell:hover .info2 {
        padding-top: 45px;
    }
    .info2 h3 {
      font-size: 38px;
    }
  }

  @media(max-width: 903px){
    .reels {
        height: 211px;
    }
    #playbig {
        top: 406px;
        right: 90px;
    }
    .homeText {
        margin-bottom: 8px;
        margin-left: 81px;
    }
    .homeText2 {
        top: 511px;
    }
    .categoryReel {
        top: 517px;
        height: 780px;
    }
    .categoryMain {
        padding: 0 40px 0px 37px;
        height: 954px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
        height: 205px;
        width: 190px;
    }
    .categAds {
        height: 751px;
    }
    .bigwinsMainReel {
        top: 1295px;
    }
  }

  @media(max-width: 900px){
    .categoryReel {
      top: 512px;
      height: 780px;
    }
    .homepageReel .susan {
      top: -34px;
    }
    .homeText2 {
      top: 507px;
    }
    .homeText {
      margin-top: 82px;
      margin-bottom: 7px;
      margin-left: 81px;
    }
    .bigwinsMainReel {
      top: 1290px;
    }
    .categoryMain {
      height: 949px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 201px;
      width: 190px;
    }
  }

  @media(max-width: 890px){
    .homepageReel .susan {
      width: 211px;
      top: -18px;
    }
    .categoryReel {
      top: 506px;
      height: 772px;
    }
    .categAds {
      height: 743px;
    }
    .bigwinsMainReel {
      top: 1276px;
    }
    .categoryMain {
      height: 941px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 199px;
      width: 187px;
    }
    .latestMain ul li a {
      height: 130px;
    }
    .topReel {
      width: 99.4%;
    }
    .reels {
      height: 209px;
      padding: 0 62px 0 65px;
      margin-top: 38px;
    }
    .homeText2 {
      top: 501px;
    }
    .homeText {
      margin-top: 82px;
      margin-bottom: 8px;
    }
    #playbig {
      top: 398px;
      right: 90px;
    }
  }

  @media(max-width: 880px){
    .categoryReel {
      top: 501px;
      height: 771px;
    }
    .homeText {
      margin-top: 82px;
      margin-bottom: 6px;
      margin-left: 95px;
      font-size: 23px;
    }
    .homeText2 {
      top: 501px;
      font-size: 23px;
      margin-left: -17px;
    }
    .categoryMain {
      padding: 0 36px 0px 34px;
      height: 954px;
    }
    .bigwinsMainReel {
      top: 1270px;
    }
    .categoryMain {
      height: 934px;
    }
    .bigwinsMain {
      padding: 0 0px 0 47px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 197px;
      width: 186px;
    }
    .latestMain {
      margin: 76px 0px 0 5px;
    }
    #playbig {
      top: 392px;
      right: 90px;
    }
  }

  @media(max-width: 872px){
    .homepageReel .susan {
      width: 200px;
      top: -12px;
    }
    .reels {
      height: 201px;
    }
    .categoryReel {
      top: 496px;
      height: 762px;
    }
    .homeText {
      margin-top: 83px;
      margin-bottom: 7px;
    }  
    .homeText2 {
      top: 493px;
    }
    .categAds {
      height: 734px;
    }
    .bigwinsMainReel {
      top: 1257px;
    }
    .categoryMain {
      height: 928px;
    }
    .bigwinsMain {
      padding: 0 0px 0 45px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 195px;
      width: 185px;
    }
  }
  @media(max-width: 863px){
    .headText span, .headText2 span {
      font-size: 75px;
    }
    .homepageReel .susan {
      width: 200px;
      top: -13px;
    }
    .categoryReel {
      top: 489px;
      height: 749px;
    }
    .homeText2 {
      top: 486px;
    }
    #playbig {
      top: 380px;
      right: 90px;
    }
    .categAds {
      height: 721px;
    }
    .bigwinsMainReel {
      top: 1236px;
    }
    .categoryMain {
      height: 913px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 194px;
      width: 183px;
    }
    .latestMain {
      margin: 73px 0px 0 5px;
    }
  }
  @media(max-width: 853px){
    .categoryReel {
      top: 486px;
      height: 744px;
    }
    .homeText {
      margin-top: 80px;
    }
    .homeText2 {
      top: 484px;
    }
    .categAds {
      height: 716px;
    }
    .bigwinsMainReel {
      top: 1229px;
    }
    .categoryMain {
      height: 905px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 191px;
      width: 180px;
    }
    .latestMain ul li a {
      height: 126px;
    }
  }
  @media(max-width: 846px){
    .categoryReel {
      top: 482px;
      height: 733px;
    }
    .homeText {
      margin-top: 76px;
    }
    .homeText2 {
      top: 480px;
    }
    .categAds {
      height: 705px;
    }
    .bigwinsMainReel {
      top: 1214px;
    }
    .categoryMain {
      height: 890px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 188px;
      width: 179px;
    }
    .latestMain {
      margin: 73px -1px 0 5px;
    }
  }

  @media(max-width: 840px){
    .homepageReel .headText2 {
      font-size: 47px;
    }
    .headText span, .headText2 span {
      font-size: 72px;
    }
    .categoryReel {
      top: 477px;
      height: 730px;
    }
    .reels {
      height: 198px;
     padding: 0 59px 0 62px;
    }
    .homeText {
      margin-top: 79px;
    }
    .homepageReel .susan {
      width: 192px;
      top: -11px;
    }
    .homeText2 {
      top: 473px;
      margin-left: -19px;
    }
    #playbig {
      top: 368px;
      right: 90px;
    }
    .categoryMain {
      padding: 0 34px 0px 32px;
    }
    .categAds {
      height: 703px;
    }
    .bigwinsMainReel {
      top: 1206px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 188px;
      width: 177px;
    }
    .latestMain {
      margin: 70px -1px 0 5px;
    }
  }

  @media(max-width: 835px){
    .categoryReel {
      top: 477px;
    }
  }

  @media(max-width: 831px){
    .categoryReel {
      top: 473px;
      height: 718px;
    }
    .topReel {
      width: 99.5%;
      left: 7px;
    }
    .homeText {
      margin-top: 75px;
    }
    .homeText2 {
      top: 470px;
      margin-left: -19px;
    }
    .categAds {
      height: 691px;
    }
    .bigwinsMainReel {
      top: 1190px;
    }
    .categoryMain {
      height: 873px;
    } 
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 188px;
      width: 175px;
    }
    .latestMain ul li a {
      height: 122px;
    }
  }

  @media(max-width: 824px){
    .homepageReel .headText2 {
      padding-top: 35px;
      font-size: 44px;
    }
    .headText span, .headText2 span {
      font-size: 75px;
    }
    .reels {
      height: 195px;
      padding: 0 57px 0 58px;
    }
    #playbig {
      top: 357px;
      right: 90px;
    }
    .homepageReel .susan {
      top: -14px;
    }
    .categoryReel {
      top: 465px;
      height: 716px;
    }
    .categAds {
      height: 689px;
    }
    .homeText {
      margin-left: 90px;
    }
    .homeText2 {
      top: 462px;
      margin-left: -26px;
    }
    .categoryMain {
      padding: 0 32px 0px 30px;
    }
    .bigwinsMainReel {
      top: 1180px;
    }
    .categoryMain {
      height: 870px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 188px;
      width: 174px;
    }
    .latestMain {
      margin: 61px -1px 0 4px;
    }

  }
  @media(max-width: 810px){
    .homepageReel .susan {
      top: -16px;
    }
    .reels {
      height: 189px;
      padding: 0 56px 0 57px;
    }
    #playbig a {
      width: 122px!important;
      height: 62px!important;
    }
    .categoryReel {
      top: 459px;
      height: 701px;
    }
    .categAds {
      height: 682px;
    }
    .homeText2 {
      top: 456px;
      margin-left: -26px;
    }
    .categAds {
      height: 673px;
    }
    .bigwinsMainReel {
      top: 1156px;
    }
    .categoryMain {
      height: 851px;
    }
    .bigwinsMain {
      padding: 0 0px 0 40px;
    }
    .bigwinsMain ul li, .bigwinsMain ul li a {
      height: 183px;
      width: 172px;
    }
    .latestMain ul li a {
      height: 118px;
    }
  }
</style>


<div class="container-fluid">
  <div class="container"  style="position:relative;">
    <div class="row">
      <div class="col-lg-24">

        <img src="{{ asset('images/responsive/smallerHomepageReel.jpg')}}" class="topReel" />
        <img src="{{ asset('images/responsive/categoryReel4.jpg')}}"  class="categoryReel"/>
        <img src="{{ asset('images/responsive/bigwinsReel.jpg')}}" class="bigwinsMainReel">        
        <img src="{{ asset('images/responsive/footerReel.jpg')}}" class="footerReel">

         <div class="col-lg-24">
              <div class="homepageReel">
                 <img src="{{ asset('images/responsive/withtdog.png') }}" class="susan">
                <h1 class="headText2"> Hi! I'm Susan 
                  <span> Let's Play </span> 
                </h1>  
                <div class="reels">
                  <div class="row no-gutter">

                    <?php 
                      $counter = 1;
                      $segment = ceil($reel_posts_count) / 4;
                      $counter1 = 0;
                      $counter2 = 0;
                      $counter3 = 0;
                      $counter4 = 0;
                    ?>

                    @foreach($reel_posts as $reel_post)

                      @if($counter == 1)
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div id="planeMachine2">
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter1++; ?>
                      @elseif($counter < $segment)
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter1++; ?>
                      @elseif($counter == $segment)
                          </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div id="planeMachine3">
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter2++; ?>
                      @elseif($counter < $segment*2 && $counter > $segment)
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter2++; ?>
                      @elseif($counter == $segment*2)
                          </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div id="planeMachine4">
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter3++; ?>
                      @elseif($counter < $segment*3 && $counter > $segment && $counter > $segment*2)
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter3++; ?>
                      @elseif($counter == $segment*3)
                          </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div id="planeMachine5">
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter4++; ?>
                      @elseif($counter < $segment*4 && $counter > $segment && $counter > $segment*2 && $counter > $segment*3)
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div> 
                            <?php $counter4++; ?>
                      @endif

                      <?php $counter++; ?>

                    @endforeach
                          </div>
                          </div>
                  </div>
                </div>

               


              </div>
              <div class="categoryMain">
               

                 <div id="playbig">
                  <a id="gogogo2" class="button pink serif round glass"> Spin! </a>         
                </div>

                   <h6 class="homeText"> Know what you like? Check the categories below! </h6>
                   <h6 class="homeText2"> Know what you like? Check the categories below! </h6>

                <div class="col-xs-24 col-sm-19 col-md-19 col-lg-19 categoryCol">

                  <div class="categories">

                    <ul>
                    @foreach($category_randomizer as $key => $value)
                    {!! $value !!}
                    @endforeach
                      </ul>
                  </div>
                </div>
                <div class="col-xs-24 col-sm-5 col-md-5 col-lg-5 categAds1366">
                  <img src="{{ asset('images/responsive/categoryReelDivider.png') }}" class="homeCategoryDivider">
                  <div class="categAds">
                    <a href="#">                      
                      <img src="http://susanwins.com/uploads/86029_201x503.jpg">
                      <div class="questionMarkHover hint--left hint--bounce hint--rounded hint--warning" data-hint="Click to know more"> ? </div>
                    </a>
                    <a href="#">                      
                      <img src="http://susanwins.com/uploads/83977_foxycasino01_201x503.jpg">
                      <div class="questionMarkHover hint--left hint--bounce hint--rounded  hint--warning" data-hint="Click to know more"> ? </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="bigwinsMain">
                <ul>
                  @foreach($biggest_wins as $b)
                       <li class="refCell"> 
                         <img class="info" src="http://susanwins.com/uploads/24372_goldcoins.png" alt=""> 
                         <a href="{{ url().'/'.$b->post->slug }}"> 
                           <img src="{{ $b->custom_image ? url('uploads').'/'.$b->custom_image : url('uploads').'/'.$b->post->thumb_feature_image }}" /> 
                         </a>
                          <a href="{{ url().'/'.$b->post->slug }}" class="info2">
                                  <p> Total Win:</p>
                                  <h3> £{{ $b->total_wins }} </h3>
                                  <button class="yellow"> Play Now! </button>
                         </a>
                     </li>
                  @endforeach
                </ul>
              </div>
               <div class="latestMain">
                  <div class="col-xs-24 col-sm-18 col-md-18 col-lg-18">  
                      <div class="gameList">
                        <div class="inner">
                      <!--     <img src="http://susanwins.com/images/homepage/latestGamesSusan.png" class="susan"> -->
                          <ul>
                                  
                                  @foreach($posts as $post)
                                    <li>           
                                      <a href="{{url('')}}/{{$post->slug}}">                  
                                        <img src="{{url('uploads')}}/{{$post->thumb_feature_image}}">
                                      </a>
                                  </li>  
                                @endforeach
                                
                          </ul>
                        </div>
                      </div>
                  </div>
                  <div class="col-xs-24 col-sm-5 col-md-5 col-lg-5">  
                      <div class="ads2">
                        <a href="">
                          <img src="http://susanwins.com/uploads/86029_201x503.jpg">
                          <div class="questionMarkHover hint--left hint--bounce hint--rounded hint--warning " data-hint="Click to know more"> ? </div>
                        </a>
                        <a href="">
                          <img src="http://susanwins.com/uploads/83977_foxycasino01_201x503.jpg">
                          <div class="questionMarkHover hint--left hint--bounce hint--rounded  hint--warning" data-hint="Click to know more"> ? </div>
                        </a>
                        <a href="">
                          <img src="http://susanwins.com/uploads/74087_williamhill_201x503.jpg">
                          <div class="questionMarkHover hint--left hint--bounce hint--rounded hint--warning" data-hint="Click to know more"> ? </div>
                        </a>
                         
                      </div>
                  </div>
              </div>
        </div>

      </dov>
    </div>
  </div>  
</div>


@endsection


@section('footer_scripts')



  

   <script>

    $(document).ready(function(){



      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
      page = 1;

    // var images2 = new Array();

      function preload() {
        // console.log(preload.arguments[0]);
        for (i = 0; i < preload.arguments.length; i++) {
          var images2 = new Image();
          images2.src = preload.arguments[i];
        }
      }


      $(function(){

          var $divView = $('div.view');
          var innerHeight = $divView.removeClass('view').height();
          $divView.addClass('view');
            
          $('div.slide').click(function() {
              $('div.view').animate({
                height: (($divView.height() == 450)? innerHeight  : "450px")
              }, 500);
              return false;
          });

        var options = {
          horizontalPixelsCount: 90,
          verticalPixelsCount: 5,
          pixelSize: 5,
          disabledPixelColor: '#080808',
          enabledPixelColor: '#ff0101',
          pathToPixelImage: 'http://susanwins.com/uploads/43978_pixel.png',
          stepDelay: 40,
          // only for canvas
          backgroundColor: '#080808',
          // only for canvas
          pixelRatio: 0.7,
          runImmidiatly: true
        };

      });


    });



   $(window).bind("load", function() {
        
        new_blah1 = 0;
        new_blah2 = 0;
        new_blah3 = 0;
        new_blah4 = 0;

        var machine1 = $("#planeMachine2").slotMachine({
          active  : 0,
          delay : 500,
          randomize:function(activeElementIndex){
              return new_blah1;
          }
        });

        var machine2 = $("#planeMachine3").slotMachine({
          active  : 0,
          delay : 500,
          randomize:function(activeElementIndex){
              return new_blah2;
          }
        });

        var machine3 = $("#planeMachine4").slotMachine({
          active  : 0,
          delay : 500,
          randomize:function(activeElementIndex){
              return new_blah3;
          }
        });

        var machine4 = $("#planeMachine5").slotMachine({
          active  : 0,
          delay : 500,
          randomize:function(activeElementIndex){
              return new_blah4;
          }
        });


        function watermelon(new_blah)
        {
          return new_blah;
        }

        $("#gogogo2").click(function(){

          new_blah1++;
          new_blah2++;
          new_blah3++;
          new_blah4++; 

          if(new_blah1 == {{$counter1}})
          {
            new_blah1 = 0;
          }

          if(new_blah2 == {{$counter2}})
          {
            new_blah2 = 0;
          }

          if(new_blah3 == {{$counter3}})
          {
            new_blah3 = 0;
          }

          if(new_blah4 == {{$counter4}})
          {
            new_blah4 = 0;
          }

          machine1.shuffle(3);

          setTimeout(function(){
            machine2.shuffle(1);
          }, 500);

          setTimeout(function(){
            machine3.shuffle(3);
          }, 700);

          setTimeout(function(){
            machine4.shuffle(2);
          }, 900);

        });
});
  </script>

@endsection

